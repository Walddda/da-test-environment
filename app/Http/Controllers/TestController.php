<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Test;

class TestController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $test = Test::all();

        return view('testView', [
            'test' => $test,
        ]);
    }
}
