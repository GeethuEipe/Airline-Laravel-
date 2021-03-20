<?php
/********************
 * Author:Geethu Eipe
 * Date:11/3/2021
 * Module:admin
 * function:Notification details
 **********************/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    
   
    function notificationadd(Request $req)
    {  
        
        $data=new Notification;
        $data->fl_number=$req->fl_number;
        $data->airline=$req->flname;
        $data->notification=$req->notification;
        $data->current_date=$req->currentdate;
        $data->save();
        return view('notification');
}

function notification_view()
{
    $data=Notification::all();
    return view('notification_view',['data'=>$data]);
}

}
