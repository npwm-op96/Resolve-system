<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Type_product extends Controller
{
    public function Gettype_product() {
        $type_products = type_product::all()->get();
        return $type_products;
        }
}
