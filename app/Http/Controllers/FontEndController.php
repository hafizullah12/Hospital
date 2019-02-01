<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Service;


class FontEndController extends Controller
{
 public function index()
 {
     $blogs   = Blog::orderBY('id','DESC')->limit(6)->get();
     $services = Service::orderBy('id', 'ASC') ->limit(6)->get(); 
     return view('index',[
         'blogs'    =>$blogs,
         'services' =>$services
     ]);
 }  
 
 public function meet()
 {
     return view('pages.meet');
 }
 public function serviceShow()
 {
     $services = Service::paginate(9);
     return view('pages.services-all',['services'=>$services]);
 }
 public function showPost($id)
 {
    $blog = Blog::find($id);
    return view ('pages.news-details',['blog'=>$blog]);
 }
 public function contact()
 {
     return view('pages.contact-us');
 }

}
