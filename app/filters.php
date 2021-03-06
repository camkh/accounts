<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
 $locale = array('en', 'km');
 if (Input::has('lang')) {
        $lang = Input::get('lang');
        if(in_array($lang, $locale)) {
            Session::put('lang',$lang);
            App::setLocale(Session::get('lang'));
        } else {
           Session::put('lang', Config::get('app.locale'));
        }

    } else {
    	if(!Session::get('lang')){
    		Session::put('lang','en');
    	}
    }
});



App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (empty(Session::get('SESSION_USER_ID')))
	{
		return Redirect::to('/')
		->with('flash_error', 'You must be logged in to view this page!');
	}
});

Route::filter('auth_member', function()
{
	if (!Session::has('currentUserId'))
	{
		return Redirect::to('member/login');
	}
});




Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});


