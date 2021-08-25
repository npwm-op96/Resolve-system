<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Role extends Controller
{
    public function Getrole() {
        $roles = role::all()->get();
        return $roles;
        }
}
