<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroler extends Controller
{

    public function pass()
    {
        return view('pass', ['name1' => 'Anisha', 'name2' => 'Nishka', 'name3' => 'Sumit']);
    }
    public function form()
    {
        return view('form');
    }
    public function data(Request $data)
    {

        $data->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        // echo "<pre>";
        // print_r($data->all());
        // echo "</pre>";

        // $name = $data->input('fname');
        // $email = $data->input('email');
        // $lname = $data->input('lname');

        // $pass = $data->input('password');
        // $cpass = $data->input('confirm_password');
        // // get input valuesthrough input() methods
        // echo "name is : $name 
        // <br>lname is : $lname 
        // <br>email is : $email <br>";
        // // $abc = $data->fname;
        // // echo "$abc"; // direct input value access
        // // return view('form');

    }
}
