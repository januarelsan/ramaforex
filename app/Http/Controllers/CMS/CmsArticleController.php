<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;

class CmsArticleController extends Controller
{
    public function addArticle()
    {
        return view('cms.blog.addBlog');
    }

    public function uploadArticle(Request $request)
	{
		$title = $request->title;
		$body = $request->body;
		$img_url = $request->file('img_url');
		$img_urlName = time().'.'.$img_url->extension();
		$img_url->move(public_path('data_file'),$img_urlName);

		$article = new Article();
		$article->title =$title;
		$article->body =$body;
		$article->img_url =$img_urlName;
		$article->save();
		return back()->with('success_add','Success Add Article');
	}

	public function listArticle()
    {
		$articles = Article::all();
        return view('cms.blog.listBlog',compact('articles'));
    }

    public function editArticle($id)
    {
		$article = Article::find($id);
        return view('cms.blog.editBlog',compact('article'));
    }

	public function updateArticle(Request $request)
	{
		$title = $request->title;
		$body = $request->body;
		$img_url = $request->file('img_url');
		$img_urlName = time().'.'.$img_url->extension();
		$img_url->move(public_path('data_file'),$img_urlName);

		$article = Article::find($request->id);
		$article->title = $title;
		$article->body = $body;
		$article->img_url = $img_urlName;
		$article->save();
		return back()->with('success_edit','Success Edit Article');
	}

	public function deleteArticle($id)
	{
		$article = Article::find($id);
		unlink(public_path('data_file').'/'.$article->img_url);
		$article->delete();
		return back()->with('success_delete','This Article has been Deleted');

	}
}
