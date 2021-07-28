<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
class MaterialController extends Controller
{
 public function All()
   {
        return Material::all();
    }
}
