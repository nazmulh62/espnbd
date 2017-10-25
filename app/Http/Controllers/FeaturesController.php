<?php

namespace App\Http\Controllers;

use App\Features;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function addFeature(){
        return view('admin.feature.add-feature');
    }
    public function saveFeatureInfo(Request $request){
        $featureImage = $request->file('feature_image');
        $imageName = $featureImage->getClientOriginalName();
        $directory = 'feature_images/';
        $imageUrl = $directory.$imageName;
        $featureImage->move($directory, $imageName);
        $features = new Features();
        $features->feature_title = $request->feature_title;
        $features->feature_image = $imageUrl;
        $features->feature_description = $request->feature_description;
        $features->publication_status = $request->publication_status;
        $features->save();
        return redirect('/feature/add')->with('message','Features Info Save Successfully.');

    }
    public function manageFeature(){
        $features = Features::all();
        return view('admin.feature.manage-feature',['features'=>$features]);
    }
    public function viewFeatureDetailsInfo($id){
        $featureById = Features::find($id);
        return view('admin.feature.view-feature',['featureById'=>$featureById]);

    }
    public function unpublishedFeatureInfo($id){

        $featureById = Features::find($id);
        $featureById->publication_status = 0;
        $featureById->save();
        return redirect('/feature/manage-feature');

    }
    public function publishedFeatureInfo($id){
        $featureById = Features::find($id);
        $featureById->publication_status = 1;
        $featureById->save();
        return redirect('/feature/manage-feature');

    }

    public function editFeatureInfo($id){
        $featureById = Features::find($id);
        return view('admin.feature.edit-feature',['featureById'=>$featureById]);
    }
    public function updateFeatureInfo(Request $request){

        if($request->feature_image){
            $features = Features::find($request->feature_id);
            //unlink($features->feature_image);
            $featureImage = $request->file('feature_image');
            $imageName = $featureImage->getClientOriginalName();
            $directory = 'feature_images/';
            $imageUrl = $directory.$imageName;
            $featureImage->move($directory, $imageName);
            $features->feature_title = $request->feature_title;
            $features->feature_image = $imageUrl;
            $features->feature_description = $request->feature_description;
            $features->publication_status = $request->publication_status;
            $features->save();
            return redirect('/feature/manage-feature');

        }else{
            $features = Features::find($request->feature_id);
            $features->feature_title = $request->feature_title;
            $features->feature_description = $request->feature_description;
            $features->publication_status = $request->publication_status;
            $features->save();

            return redirect('/feature/manage-feature');

        }
    }

    public function deleteFeatureInfo($id){
        $featureById = Features::find($id);
        $featureById->delete();
        return redirect('/feature/manage-feature');
    }


}
