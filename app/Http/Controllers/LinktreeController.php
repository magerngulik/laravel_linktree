<?php

namespace App\Http\Controllers;

use App\Models\Tree;
use App\Models\Profile;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;

class LinktreeController extends Controller
{
    public function index(){

        $link =  Tree::all();
        $pp =collect(Profile::first()->get());
     
        
        $title = $pp[0]->title;
        $profile  = $pp[0]->profile;
        $background  = $pp[0]->background;

        return view('linktree',[
            "link_tree" => $link,
            "title" => $title,
            "profile" => ImageHelper::convertImagePathToUrl($profile),
            "background" => ImageHelper::convertImagePathToUrl($background),
        ]);
        
    }
}
