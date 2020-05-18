<?php

namespace App\Http\Controllers;
use middleware;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function _construct()  
	{                                   // to avoid access profile when loged out
		$this->middleware('auth');
	}
    public function create()
    {
    	return view('posts.create');
    }
    public function store()
    {
    	$data = request()->validate([
    		'caption' => 'required',
			'image' =>'required']);
			dd(request('image')->store('uploads','public'));// create public in storage and save image there

    	    //'image' =>['required','image']]);   /// now you can coose only image
      auth()->user()->posts()->create($data);    // authenticate vallid user // posts is table
      dd(request()->all());
    }
}
 