<?php
/********************
 * Author:Geethu Eipe
 * Date:9/3/2021
 * Module:admin
 * function:flight details
 **********************/

namespace App\Http\Controllers;
use App\models\Notification;
use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Book;
use Illuminate\Support\Facades\DB;


class FlightController extends Controller
{
    function insertflight(Request $req)
    {
    $Flight=new Flight;
         $Flight->airline=$req->flname;
         $Flight->fl_number=$req->flno;
         $Flight->departure=$req->depar;
         $Flight->dep_date=$req->depdate;
         $Flight->dep_time=$req->deptime;
         $Flight->destination=$req->dest;
         $Flight->dest_date=$req->desdate;
         $Flight->dest_time=$req->destime;
         $Flight->btseats=$req->btseat;
         $Flight->ftseats=$req->ftseat;
         $Flight->etseats=$req->etseat;
         $Flight->baseat=$req->baseat;
         $Flight->faseat=$req->faseat;
         $Flight->easeat=$req->easeat;
         $Flight->cost=$req->cost;
         $Flight->seatsa=$req->seatsa;
         $Flight->bcost=$req->bcost;
         $Flight->fcost=$req->fcost;
         $Flight->ecost=$req->ecost;
         $Flight->bccost=$req->bccost;
         $Flight->fccost=$req->fccost;
         $Flight->eccost=$req->eccost;
         $query=$Flight->save();
         return redirect('add');
    }

    function list()
    {
        $data=Flight::all();
        return  view('flightlist',['data'=>$data]);
    }

    function delete($id)
    {
        $data=Flight::find($id);
        $data->delete();
        return redirect('flights');
    }
    function flightupdates($id)
    {
        $data=Flight::find($id);
        return view('flightsupdate',['data'=>$data]);
        
    }
    function update_actions(Request $req)
    {
        $Flight=Flight::find($req->id);
        $Flight->airline=$req->flname;
        $Flight->fl_number=$req->flno;
        $Flight->departure=$req->depar;
        $Flight->dep_date=$req->depdate;
        $Flight->dep_time=$req->deptime;
        $Flight->destination=$req->dest;
        $Flight->dest_date=$req->desdate;
        $Flight->dest_time=$req->destime;
        $Flight->btseats=$req->btseat;
        $Flight->ftseats=$req->ftseat;
        $Flight->etseats=$req->etseat;
        $Flight->baseat=$req->baseat;
        $Flight->faseat=$req->faseat;
        $Flight->easeat=$req->easeat;
        $Flight->cost=$req->cost;
        $Flight->seatsa=$req->seatsa;
        $Flight->bcost=$req->bcost;
        $Flight->fcost=$req->fcost;
        $Flight->ecost=$req->ecost;
        $Flight->bccost=$req->bccost;
        $Flight->fccost=$req->fccost;
        $Flight->eccost=$req->eccost;
        $query=$Flight->save();
        return redirect('flights');
    
    }
    function notification(Request $req)
    {
        $data=Flight::find($req->id);
         return view('notification',['data'=>$data]);
      // return view('notification', compact('user'));

    }
    public function searchaction(Request $req)

    {
        $flight= new Flight;
        $dep_date=$req->departuredate;
        $dep=$req->departureairport;
        $dest=$req->arrivalairport;
        $users = DB::table('flights')
            ->where("departure",$dep)
            ->where("destination",$dest)
            //->where("dep_date",$dep_date)
            ->get();
        return view('flightview',['users'=>$users]);
        // $user=Flight::all();
        // return view('flightview',['user'=>$user]);
    }
 
 function flight_view_user()
 {
     $data=Flight::all();
      return view('flight_view_user',['data'=>$data]);
 }

 function flight_view_user_book(Request $req)
 {
     $data=Flight::find($req->id);;
      return view('bookform',['data'=>$data]);
 }
    function ticket_issue(Request $req)
    {
        $data = DB::table('flights')
        ->join('books', 'flights.airline', '=', 'books.airline')
        ->where('flights.departure', $req->depar)
        ->where('flights.departure', $req->depar)
        ->where('flights.dep_date', $req->depdate)
        ->where('flights.dep_time', $req->dep_time)
        ->where('flights.seatsa', $req->seatsa)
        ->where('flights.destination', $req->dest)
        ->where('books.class', $req->class)
        ->where('books.fname', $req->fname)
        ->where('books.lname', $req->lname)
        ->where('books.age', $req->age)
        ->where('books.id', $req->id)
        ->get();
 return view('ticket_view',['data'=>$data]);
    }


    function seat_aval()
    {

        $seat=Flight::all();
        return view('seat_aval',['seats'=>$seat]);
        
    }
}
