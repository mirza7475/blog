<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testing extends Controller
{
    //
    function handleForm(Request $request)
    {
        // Access form input (e.g. 'name')
        $name = $request->input();

        return $name;
    }
}
