<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GBL;

class GBLController extends Controller
{
    public function index(){
        $gbl = GBL::all();
        return view('gbl',['gbl'=>$gbl]);
    }
}
