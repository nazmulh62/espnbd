<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function saveCommentInfo(Request $request)
    {
		 $this->validate($request,[

            'customer_name'=>'required|alpha',
            'customer_email'=>'required|email',
            'customer_comment' => 'required'

        ]);
        $comment = new Comment();
        $comment->customer_name = $request->customer_name;
        $comment->customer_email = $request->customer_email;
        $comment->customer_comment = $request->customer_comment;
        $comment->save();
        return redirect('/');
    }
    public function manageComment(){
        $comments = Comment::all();
        return view('admin.comment.manage-comment',['comments'=>$comments]);

    }
    public function deleteCommentInfo($id){
        $commentById = Comment::find($id);
        $commentById->delete();
        return redirect('/comment/manage-comment');
    }
}