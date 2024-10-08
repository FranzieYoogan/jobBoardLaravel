<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller
{
    
    public function login(Request $request) {

    $email = $request->input('email');
    $password = $request->input('password');

    $person = DB::select('select personEmail,personName,personLastName,personPassword from person');
    
    foreach ($person as $value) {

        if($value->personEmail == $email && $value->personPassword == $password) {

            $perfect = true;

            session(['personName' => $value->personName]);
            session(['personLastName' => $value->personLastName]);
            session(['personEmail' => $value->personEmail]);

            break;
        
        }


    }

    if(isset($perfect)) {

        return redirect('/dashboard');
   
       } else {
   
           $error = true;
           return view('welcome', ['error' => $error]);
           
   
       }


  

    }

    public function dashboard() {

        $email = session('personEmail');

        $user = DB::select(" select * from person where personEmail = '$email' ");

        return view('dashboard', ['user' => $user]);

    }

    public function employers() {

        $jobs = DB::select('select * from jobs');

        $peopleCount = DB::table('jobs')->count();

        return view('employers', ['peopleCount' => $peopleCount, 'jobs' => $jobs]);

        
    }

    public function getJob(Request $request) {

        $searchInput = $request->input('searchInput');

        $jobs = DB::select("select * from jobs where jobName LIKE '$searchInput%' OR jobCity LIKE '$searchInput%'");

        $peopleCount = DB::table('jobs')->count();


        return view('employers', ['jobs' => $jobs,'peopleCount' => $peopleCount]);



    }

    public function employment(Request $request) {

        $id = $request->input('id');
        $jobs = DB::select("select * from jobs WHERE jobID = '$id'");

        return view('employment', ['jobs' => $jobs]);
       

    }

}
