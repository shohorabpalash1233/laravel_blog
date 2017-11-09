<?php
	namespace App\Http\Controllers;
	use App\Post;

	/**
	* Pages Controller
	*/
	class PagesController extends Controller
	{
		
		public function getIndex(){
			$posts = Post::orderBy('created_at', 'desc')->paginate(4);
			return view('pages.welcome')->withPosts($posts);
		}

		public function getAbout(){

			$firstname = 'Shohorab';
			$lastname = 'Palash';
			$fullname = $firstname . ' ' . $lastname;

			$email = 'shohorabpalash1@gmail.com';

			$data = [];
			$data['email'] = $email;
			$data['fullname'] = $fullname;

			// return view('pages.about')->with("fullname", $fullname);
			// return view('pages.about')->withFullname($fullname)->withEmail($email);
			return view('pages.about')->withData($data);
		}

		public function getContact(){
			return view('pages.contact');
		}
	}
?>