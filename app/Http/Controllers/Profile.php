<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile extends Controller
{
    public function Getprofile() {
    $Profiles = profile::all()->get();
    return $Profiles;
    }
}
