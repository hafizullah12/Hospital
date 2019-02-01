<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Surgery ;
use App\Doctor;

class SurgeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $surgeries = Surgery::all();
       return view('admin.surgery.index',['surgeries'=> $surgeries]);
    }

    public function showAll()
    {
        $surgeries = Surgery::all();
        return view('pages.surgery',['surgeries'=>$surgeries]); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.surgery.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function savePost($request,$imageUrl)
    {
    $medicine = new Surgery();
    $medicine->name = $request->name;
    $medicine->description = $request->description;
    $medicine->feature_image = $imageUrl;
    $medicine->status = $request->status;
    $medicine->save();   
    }
   
public function store(Request $request)
{

    $featureImage = $request->file('feature_image');
    $name = $featureImage->getClientOriginalName();
    $uploadPath = 'public/feature_img/';
    $featureImage->move($uploadPath, $name);
    $imageUrl = $uploadPath . $name;
    $this->savePost($request, $imageUrl);
    return redirect()->back()->with('success', 'Surgery Created Successfully');   
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $doctors = Doctor::find($name);
        $doctors = Doctor::where('sub_category',$name)->get();
       // dd($doctors);
        return view('pages.surgery-doctors',['doctors'=> $doctors]);
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
