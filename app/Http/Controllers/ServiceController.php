<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $services = Service::all();
       return view('admin.service.index',['services'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function savePost($request,$imageUrl)
     {
        $service = new Service();
        $service->name           = $request->name;
        $service->description    =$request->description;
        $service->price          =$request->price;
        $service->location       =$request->location;
        $service->feature_image  =$imageUrl;
        $service->status         =$request->status;
        $service->save(); 
     }
     
    public function store(Request $request)
    {
        $featureImage = $request->file('feature_image');
        $name = $featureImage->getClientOriginalName();
        $uploadPath = 'public/feature_img/';
        $featureImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;
        $this->savePost($request, $imageUrl);
        return redirect()->back()->with('success', 'Service Added Successfully'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
