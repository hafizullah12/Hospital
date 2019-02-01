<?php

namespace App\Http\Controllers;
use App\Medicine;
use Illuminate\Http\Request;
use App\Surgery;
use App\Doctor;
use App\Booking;
use Auth;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::all();
        //dd($medicines);
        return view('pages.medicine',['medicines'=>$medicines]);
       
    }

    public function showMedicine()
    {
        $medicines = Medicine::all();
        //dd($medicines);
        return view('pages.medicine',['medicines'=>$medicines]);
    }
   
 
    /**
    
    * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showDoctor($id)
    {
        $doctors = Doctor::find($id);
       // $doctors = Doctor::where('id',$id)->get();
       // dd($doctors);
        return view('pages.doctor-details',['doctors'=> $doctors]);
    }
    public function showgyae()
    {
        $doctors = Doctor::where('category','Gyaenocology')->get();
        return view('pages.gyae',['doctors'=>$doctors]);
    }
    public function profile()
    {
        return view('pages.profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Booking();
        $book->doctor_id = $request->doctor_id;
      
        if(Auth::check())
        {
            $book->user_id = Auth::user()->id;
        }
        $book->save();
        return redirect()->back()->with('success', 'Your Book Successfully Placed.plz,Check Your Profile'); 
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
        return view('pages.medicine-doctors',['doctors'=> $doctors]);
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
