<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function getIndex(){
    	return view('welcome');
    }
    public function resizewidth(){

    }
}
