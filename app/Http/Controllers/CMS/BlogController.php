<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function listBlog()
    {
        return view('cms.blog.listBlog');
    }

    public function addBlog()
    {
        return view('cms.blog.addBlog');
    }

    public function editBlog()
    {
        return view('cms.blog.editBlog');
    }
}
