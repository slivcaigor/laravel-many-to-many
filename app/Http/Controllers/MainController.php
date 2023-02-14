<?php

namespace App\Http\Controllers;
use Faker\Generator as Faker;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Typology;
use App\Models\Product;

class MainController extends Controller
{
    public function home() {

        $categories = Category :: all();

        return view('pages.home', compact('categories'));
    }

    public function products() {

        $products = Product :: all();

        return view('pages.product.home', compact('products'));
    }
}