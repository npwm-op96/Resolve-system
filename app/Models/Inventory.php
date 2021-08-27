<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $table ="inventory";
    protected $guarded = []; 
    public $timestamps = false;
    protected $primaryKey = 'id_inv';
}
