<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        return "hello about";
	}

    public function about(){
//        return "about dodo";
        $name = "dodoniao";
        return view('pages.about')->with('name',$name);
    }

    public function about11(){
        return view('pages.about1')->with(['first' => 'Foo', 'second' => 'dodo']);
    }

    public function about12(){
        $data['first'] = 'Foo';
        $data['second'] = 'dodo';
        return view('pages.about1', $data);
    }

    public function about13(){
        $first = 'Foo';
        $second = 'dodo';
        return view('pages.about1', compact('first', 'second'));
    }

    public function about2(){
        $data['first'] = 'Foo';
        $data['second'] = 'dodo';
        return view('pages.about2', $data);
    }


    public function about21(){
        return view('pages.about21');
    }

    public function about22(){
        $data['first'] = 'Foo';
        $data['second'] = 'dodo';
        return view('pages.about22', compact('data'));
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
