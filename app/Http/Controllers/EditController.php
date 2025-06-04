<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index($id){
        return "Welcome to the edit page with id: $id";
    }
}
