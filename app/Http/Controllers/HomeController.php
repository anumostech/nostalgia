<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexHome()
    {
        $categories = Category::where('status',1)->get();
        return view('index',[
            'categories' => $categories
        ]);
    }
}
