<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use BcMath\Number;

class IndexController extends Controller
{
    public function __invoke()
    {
        $products = Product::all();
        $tags = Tag::all();
        $colors = Color::all();
        return view('product.index', compact('products', 'tags', 'colors'));
    }
}
