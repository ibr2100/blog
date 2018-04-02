<?php

namespace App\Http\Controllers;
use App\Phone;
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

$phone->save();



    }
}
