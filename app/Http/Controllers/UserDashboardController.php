<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function dashboard(){
        return view('user.index');
    }
    public function findCare(){
        return view('user.findCare');
    }
    public function tests(){
        return view('user.tests');
    }
    public function visits(){
        return view('user.visits');
    }
    public function testInfo(){
        return view('user.testInfo');
    }
}
