<?php
/********************
 * Author:Athulya A
 * Date:12/3/2021
 * Module:user
 * function:user booking
 **********************/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Flight;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    function booknow(Request $req)
    {
        $book=new Book;
        $book->airline=$req->flname;
        $book-> fl_number=$req->flno;
        $book->departure=$req->depar;
        $book->dep_date=$req->depdate;
        $book->dep_time=$req->deptime;
        $book->destination=$req->dest;
        $book->dest_date=$req->desdate;
        $book->age=$req->age;
        $book->class=$req->class;
        $book->fname=$req->fname;
        $book->lname=$req->lname;
        $book->phone=$req->phone;
        $book->save();
        $fid=$req->id;
        if($req->class=='ecnomic')
        {
            Flight::where('id',$fid)->update(
                array(
                    'easeat'=>DB::raw('easeat - 1')
                )
                );
        }
        elseif($req->class=='bussiness')
        {
            Flight::where('id',$fid)->update(
                array(
                    'baseat'=>DB::raw('baseat - 1')
                )
                );
        }
        else
        {
            Flight::where('id',$fid)->update(
                array(
                    'faseat'=>DB::raw('faseat - 1')
                )
                );
        }
        $data = DB::table('flights')
        ->join('books', 'flights.airline', '=', 'books.airline')
        ->where('books.class', $req->class)
        ->where('books.fname', $req->fname)
        ->where('books.age', $req->age)
        ->where('books.id', $book->id)
        ->get();
 return view('receipt',['data'=>$data]);
    }


    
    
    function book_table()
    {
        $data=Book::all();
        return  view('bookuser',['data'=>$data]);
    }
    public function pay_payment()
    {
        $data=Book::all();
        
        return view('payment',['user'=>$data]);

    }
}
