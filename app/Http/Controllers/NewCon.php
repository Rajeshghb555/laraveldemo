<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewCon extends Controller
{
    //

    function mtest1($id){

    	echo "Hi - ".$id;
    }

    function mtest12(){

$name="A1";
$email="A@2.com";
return view('raj',['myname'=>$name,'myemail'=>$email]);
    	
    }
}
