<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->input();

    	$posts = Post::latest()->get();
    	$posts = Post::paginate(3);
    	return view('posts.index', compact('posts'));
    }

    public function search(Request $request)
    {
        $data = $request->input();

        if ($count = count($data))
        {
            $matching = [];

            $keyword;

            foreach($data as $key => $value)
            {
                $keyword = $value;
            }

            $one;
            $two;
            $three;

            if (array_key_exists('programming_language', $data))
            {
                $one = Post::where('programming_language', '=', $keyword);
            }

            if (array_key_exists('company_name', $data))
            {
                $two = Post::where('company_name', '=', $keyword);
            }

            if (array_key_exists('keyword', $data))
            {
                $three = Post::where('keyword', 'LIKE', $keyword);
            }

            //$posts = Post::where($one)->union($two)->union($three);
            //$posts = Post::where()->orWhere($two)
            $posts = Post::where('programming_language', '=', $keyword)
                        ->orWhere('company_name', '=', $keyword)
                        ->orWhere('keyword', 'LIKE', $keyword)
                        ->paginate(3);


            return view('posts.index', compact('posts'));
        }

        
        return redirect()->to('/');
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
                                'phone_number' => 'required',
                                'programming_language' => 'required']);

        $data = $request->input();

        Post::create([
            'company_name' => $data['name'],
            'company_email' => $data['email'],
            'company_phone_number' => $data['phone_number'],
            'programming_language' => $data['programming_language'],
            'title' => $data['title'],
            'body' => $data['body']
        ]);

        $responseData = [
            'success' => true,
            'message' => 'Post created successfully.'
        ];

        return response()->json($responseData, 200, [], JSON_PRETTY_PRINT);
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


}
