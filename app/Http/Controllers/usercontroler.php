<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\table_books;

class usercontroler extends Controller
{
    public function show()
    {
        return view('old.name');
    }

    public  function insert(Request $data)
    {
        // dd('Test');
        $table = new table_books;
        $table->First_name = $data['fname'];
        $table->Last_name = $data['lname'];
        $table->email = $data['email'];
        $table->save();
        return  "data saved successfully";
    }
}
