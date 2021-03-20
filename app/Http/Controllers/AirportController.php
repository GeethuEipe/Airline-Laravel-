<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airport;

class AirportController extends Controller
{

    /******************************
     * Author:Asha chandran
     * Date:10/03/2021
     * Module:Admin
     * function:add and view airport details
     * ***************************/
    function addairport(Request $req)
    {
        $Airport=new Airport;
        $Airport->airportname=$req->airportname;
        $Airport->city=$req->city;
        $Airport->state=$req->state;
        $Airport->zipcode=$req->zipcode;
        $Airport->timezone=$req->timezone;
        $query=$Airport->save();
        return redirect('airport');
    }

    function addairport_view(Request $req)
    {
        $users=Airport::all();
        return view('addairport_view',['users'=>$users]);
    }
}
