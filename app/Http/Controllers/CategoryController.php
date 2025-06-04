<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return "Welcome to the category page";
    }

    public function show($id){
        return "Welcome to the category page with id: $id";
    }
}
