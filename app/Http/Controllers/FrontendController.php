<?php

namespace App\Http\Controllers;

use App\Client;
use App\Features;
use App\Notice;
use App\Category;
use App\Team;
use View;
use App\Product;
use App\Slider;
use DB;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function Home(){
        $allPublushedSliders  = Slider::where('publication_status', '1')->get();
        $allPublushedProucts = Product::where('publication_status', '1')->get();
        $allPublushedFeatures = Features::where('publication_status', '1')->get();
        $allPublushedClients = Client::where('publication_status', '1')->get();

        return view('frontEnd.home',[
            'allPublushedSliders'=>$allPublushedSliders,
            'allPublushedProucts'=>$allPublushedProucts,
            'allPublushedFeatures'=>$allPublushedFeatures,
            'allPublushedClients'=>$allPublushedClients





        ]);

    }


    public function About(){
        $allPublushedTeamInfos = Team::where('publication_status', '1')->get();
        return view('frontEnd.about',['allPublushedTeamInfos'=>$allPublushedTeamInfos]);
    }
    public function Notice(){
        $allPublushedNotices = Notice::where('publication_status', '1')->get();
        return view('frontEnd.notice',['allPublushedNotices'=>$allPublushedNotices]);
    }
    public function noticeDetail($id){
        $noticeById = Notice::find($id);
        return view('frontEnd.news-details',['noticeById'=>$noticeById]);
    }

    public function Contact(){

        return view('frontEnd.contact');
    }
    public function category($id){


        $categoryProducts= Product::where('category_id',$id)->get();
        return view('frontEnd.category',[
            'categoryProducts'=>$categoryProducts
        ]);
    }
}
