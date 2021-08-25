<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
class RoleController extends Controller
{
    public function Getrole() {
        $roles = Role::all()->toArray();
        return $roles;
        }
}
