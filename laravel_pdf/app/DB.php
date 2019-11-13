<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DB extends Model
{
     protected $fillable =[
         'CustomerName','Address','City','PostalCode','Country'
     ];
} 