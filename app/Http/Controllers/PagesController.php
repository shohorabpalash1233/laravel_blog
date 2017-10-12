<?php
	namespace App\Http\Controllers;

	/**
	* Pages Controller
	*/
	class PagesController extends Controller
	{
		
		public function getIndex(){
			return view('pages.welcome');
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