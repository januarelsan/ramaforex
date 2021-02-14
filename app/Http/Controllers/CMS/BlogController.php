<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function listBlog()
    {
        return view('blog.listBlog');
    }

    public function addBlog()
    {
        return view('blog.addBlog');
    }

    public function editBlog()
    {
        return view('blog.editBlog');
    }
}
