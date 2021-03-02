<?php

namespace App\Http\Controllers\CMS;

use Illuminate\Http\Request;
use App\Blog;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    

    public function addBlog()
    {
        return view('cms.blog.addBlog');
    }

    public function uploadBlog(Request $request)
	{
		$title = $request->title;
		$desc = $request->desc;
		$logo = $request->file('logo');
		$logoName = time().'.'.$logo->extension();
		$logo->move(public_path('data_file'),$logoName);

		$blog = new Blog();
		$blog->title =$title;
		$blog->desc =$desc;
		$blog->logo =$logoName;
		$blog->save();
		return back()->with('success_add','Success Add Blog');
	}

	public function listBlog()
    {
		$blogs = Blog::all();
        return view('cms.blog.listBlog',compact('blogs'));
    }

    public function editBlog($id)
    {
		$blog = Blog::find($id);
        return view('cms.blog.editBlog',compact('blog'));
    }

	public function updateBlog(Request $request)
	{
		$title = $request->title;
		$desc = $request->desc;
		$logo = $request->file('logo');
		$logoName = time().'.'.$logo->extension();
		$logo->move(public_path('data_file'),$logoName);

		$blog = Blog::find($request->id);
		$blog->title = $title;
		$blog->desc = $desc;
		$blog->logo = $logoName;
		$blog->save();
		return back()->with('success_edit','Success Edit Blog');
	}

	public function deleteBlog($id)
	{
		$blog = Blog::find($id);
		unlink(public_path('data_file').'/'.$blog->logo);
		$blog->delete();
		return back()->with('success_delete','This Blog has been Deleted');

	}
}
 