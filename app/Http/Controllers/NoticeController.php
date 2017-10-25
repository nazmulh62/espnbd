<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use DB;

class NoticeController extends Controller
{
    public function addNotice(){
        return view('admin.notice.add-notice');
    }
    public function saveNoticeInfo(Request $request){
        $noticeImage = $request->file('notice_image');
        $imageName = $noticeImage->getClientOriginalName();
        $directory = 'notice_images/';
        $imageUrl = $directory.$imageName;
        $noticeImage->move($directory, $imageName);
        $notice = new Notice();
        $notice->notice_title = $request->notice_title;
        $notice->author_name = $request->author_name;
        $notice->notice_description = $request->notice_description;
        $notice->notice_image = $imageUrl;
        $notice->publication_status = $request->publication_status;
        $notice->save();
        return redirect('/notice/add')->with('message','Notice Info Save Successfully.');

    }
    public function manageNotice(){
        $notices = Notice::all();
        return view('admin.notice.manage-notice',['notices'=>$notices]);
    }
    public function viewNoticeDetailsInfo($id){
        $noticeById = Notice::find($id);
        return view('admin.notice.view-notice',['noticeById'=>$noticeById]);

    }
    public function unpublishedNoticeInfo($id){

        $noticeById = Notice::find($id);
        $noticeById->publication_status = 0;
        $noticeById->save();
        return redirect('/notice/manage-notice');

    }
    public function publishedNoticeInfo($id){
        $noticeById = Notice::find($id);
        $noticeById->publication_status = 1;
        $noticeById->save();
        return redirect('/notice/manage-notice');

    }
    public function editNoticeInfo($id){
        $noticeById = Notice::find($id);
        return view('admin.notice.edit-notice',['noticeById'=>$noticeById]);
    }

    public function updateNoticeInfo(Request $request){

        if($request->notice_image){
            $notice = Notice::find($request->notice_id);
            //unlink($notice->notice_image);
            $noticeImage = $request->file('notice_image');
            $imageName = $noticeImage->getClientOriginalName();
            $directory = 'notice_images/';
            $imageUrl = $directory.$imageName;
            $noticeImage->move($directory, $imageName);
            $notice->notice_title = $request->notice_title;
            $notice->author_name = $request->author_name;
            $notice->notice_description = $request->notice_description;
            $notice->notice_image = $imageUrl;
            $notice->publication_status = $request->publication_status;
            $notice->save();
            return redirect('/notice/manage-notice');
        }else{
            $notice = Notice::find($request->notice_id);
            $notice->notice_title = $request->notice_title;
            $notice->author_name = $request->author_name;
            $notice->notice_description = $request->notice_description;
            $notice->publication_status = $request->publication_status;
            $notice->save();
            return redirect('/notice/manage-notice');



        }
    }
    public function deleteNoticeInfo($id){
        $noticeById = Notice::find($id);
        $noticeById->delete();
        return redirect('/notice/manage-notice');
    }

}
