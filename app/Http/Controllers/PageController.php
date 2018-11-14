<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public static function about(Request $request){
		return view('about');
	}
	public static function services(Request $request){
		return view('services');
	}
	public static function audio(Request $request){
		return view('audio');
	}
	public static function video(Request $request){
		return view('video');
	}
	public static function clothes(Request $request){
		return view('clothes');
	}
	public static function makeup(Request $request){
		return view('makeup');
	}
	public static function visage(Request $request){
		return view('visage');
	}
	public static function projects(Request $request){
		return view('projects');
	}
	public static function contacts(Request $request){
		return view('contacts');
	}



}
