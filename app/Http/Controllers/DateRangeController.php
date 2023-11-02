<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class DateRangeController extends Controller
{

    function index()
    {
        //$users = DB::table('users')->get();
        return view('date_range');
    }

    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      if($request->from_date != '' && $request->to_date != '')
      {
       $data = DB::table('users')
         ->whereBetween('date_of_birth', array($request->from_date, $request->to_date))
         ->get();
      }
      else
      {
       $data = DB::table('users')->orderBy('date_of_birth', 'desc')->get();
      }
      echo json_encode($data);
     }
    }

}

// $users = User::all();

//         return view('index', compact('users'));
