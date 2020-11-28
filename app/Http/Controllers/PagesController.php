<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\BlogPost;

class PagesController extends Controller
{
	public function index() {
		$title = 'Welcome To Laravel';
		return view('pages.index')->with('title', $title);
	}

	public function about() {
		$title = 'About Us';
		return view('pages.about')->with('title', $title);
	}

	public function services() {
		$data = array(
			'title' => 'Services',
			'services' => [
				'Web Design',
				'Programming',
				'SEO',
			],
		);
		return view('pages.services')->with($data);
	}

	public function blog_get(Request $request) {
		$posts = BlogPost::all();
		$html = 'list: <br>';
		foreach($posts as $key => $post) {
			$html .= $post->title . '<br>';
		}
		return $html;
	}

	public function blog_new() {
		$csrf_field = csrf_field();
		$html = '<form method="POST" action=/blog/create>'
				. $csrf_field
				.'<input type="text" name="title"><br>'
				.'<textarea name="content"></textarea><br>'
				.'<input type="submit" value="Create"><br>'
			.'</form>';
		return $html;
	}

	public function blog_create(Request $request) {
		$title = $request->input('title');
		$content = $request->input('content');

		$post = new BlogPost;
		$post->title = $title;
		$post->content = $content;
		$post->save();

		Log::info('Create new blog post: id = ' . $post->id);

		return 'Successfully';
	}
}
