<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index() {
        // return view('posts/index');
        //Non fluent
        //DB::select(['table' => 'posts', 'where' => ['id' => 1]])

        //Fluent
        //DB::table('posts')->where('id', 1)->get()

        $id = 2;
        // $posts = DB::select('select * from posts where id = ?', [1]);
        // $posts = DB::select('select * from posts where id = :id', ['id'=>2]);

        // $posts = DB::table('posts')
        //     ->where('id', $id)
        //     ->get();

        // $posts = DB::table('posts')
        //     ->select('body')
        //     ->get();

        // $posts = DB::table('posts')
        //     ->where('created_at', '>=', now()->subDay())
        //     ->get();

        // $posts = DB::table('posts')
        //     ->where('created_at', '>', now()->subDay())
        //     ->orWhere('title', 'Prof.')
        //     ->get();

        // $posts = DB::table('posts')
        //     ->where('created_at', '>', now()->subDay())
        //     ->whereBetween('id', [2, 5])
        //     // 2 and 5 included
        //     ->get();

        // $posts = DB::table('posts')
        //     ->where('created_at', '>', now()->subDay())
        //     ->whereNotNull('title')
        //     ->get();

        // $posts = DB::table('posts')
        //     ->where('created_at', '>', now()->subDay())
        //     ->select('title')
        //     ->distinct()
        //     ->get();

        // $posts = DB::table('posts')
        //     ->where('created_at', '>', now()->subDay())
        //     ->orderBy('title', 'asc')
        //     ->get();

        // $posts = DB::table('posts')
        //     ->where('created_at', '>', now()->subDay())
        //     ->latest() // oldest() // inRandomOrder()
        //     ->get(); //get all results

        // $posts = DB::table('posts')
        //     ->where('created_at', '>', now()->subDay())
        //     ->orderBy('created_at', 'desc')
        //     ->first(); //get only the first one

        // $posts = DB::table('posts')
        //     ->count();

        // $posts = DB::table('posts')
        //     ->max('id'); // min()

        // $posts = DB::table('posts')
        //     ->avg('id'); // sum()

        // $posts = DB::table('posts')
        //     ->insert([
        //         'title' => 'New Post',
        //         'body' => 'Hi'
        //     ]);

        // $posts = DB::table('posts')
        //     ->where('id', '=', 1)
        //     ->update([
        //         'title'=>'New Title2',
        //         'body'=>'Updated output'
        //     ]);

        $posts = DB::table('posts')
            ->where('id', '=', 1)
            ->delete();

        dd($posts);

    }
}
