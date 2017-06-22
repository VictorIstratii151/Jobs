<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$posts = Post::latest()->get();
    	$posts = Post::paginate(3);
    	return view('posts.index', compact('posts'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, ['title' => 'required',
                                'body' => 'required',
                                'name' => 'required',
                                'email' => 'required',
                                'phone_number' => 'required']);

        $data = $request->input();

        Post::create([
            'company_name' => $data['name'],
            'company_email' => $data['email'],
            'company_phone_number' => $data['phone_number'],
            'title' => $data['title'],
            'body' => $data['body']
        ]);

        $responseData = [
            'success' => true,
            'message' => 'Your AJAX processed correctly'
        ];

        return response()->json($responseData, 200, [], JSON_PRETTY_PRINT);
    }

    public function show()
    {
        return view('posts.show');
    }
}
