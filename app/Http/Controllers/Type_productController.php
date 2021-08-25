<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type_product;
class Type_productController extends Controller
{
    public function Gettype_product() {
        $type_products = Type_product::all()->toArray();
        return $type_products;
        }
}
