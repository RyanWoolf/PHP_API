<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index() {
        $title = "Welcome to my Laravel course";
        $description = "Created by Ryan";

        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        // compact method
        // return view('products.index', compact('title', 'description'));
        //this title name is same as variable

        //with method, good to use when varible is only one
        // return view('products.index')->with('title', $title);
        // return view('products.index')->with('data', $data);

        //Directly in the view
        return view('products.index', [
            'data' => $data,
            
        ]);
    }

    public function about() {
        return 'About Us Page';
    }

    public function show($name) {
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung'
        ];
        return view('products.index', [
            'products' => $data[$name] ?? 'Products ' . $name . ' does not exist.'
        ]);

    }
}
