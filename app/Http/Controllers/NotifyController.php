<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Auth;
use DB;
use App\Doctor;
class NotifyController extends Controller
{
    public function index()
    {
        $booking = new Booking();
        $serial = Booking::all();
        $serial = DB::table('bookings')->where('user_id',Auth::User()->id)->value('id');
        $doctor_id = DB::table('bookings')->where('user_id',Auth::User()->id)->value('doctor_id');
        $doctor_name = DB::table('doctors')->where('id',$doctor_id)->value('name');
        return view('home',['serial'=>$serial,'doctor_name'=>$doctor_name]);
    }
}
