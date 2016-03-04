<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{

		return View::make('hello');
	}



	public function Mail(){
		// echo "MIAU";
		// dd(Response::json(Request::all()));
		$data = Input::all();
    	$rules = array(
    		'name'    => 'required',
    		'email'   => 'required|email',
    		'body' 	  => 'required',
    		'subject' => 'required',
  		  );
		 $validator = Validator::make($data, $rules);

		if ($validator->passes()) {

		 	  if(Request::ajax()) {
			    	$name    = Input::get('name');
			    	$email   = Input::get('email');
			    	$subject = Input::get('subject');
			    	$body    = Input::get('body');
			  }
			  // dd($data);
			    Mail::send('emails.welcome', array('name'=>Input::get('name'), 'email'=>Input::get('email'), 'body'=>Input::get('body'), 'subj'=>Input::get('subject')), function($message){
			        $message->from(Input::get('email'), Input::get('name'))->subject(Input::get('subject'));
			        $message->to('office@missmesh.com','Miss Mesh')->subject(Input::get('subject'));
			    });

			    return View::make('hello')->with('message', 'Thanks for registering!');
		} else {

		   		return View::make('hello')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}


	}




}


// }
