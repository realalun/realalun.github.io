<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('layouts/index');
    }

    public function submit(Request $req)
    {
        $name = $req->input('name');
        $email = $req->input('email');
        $phone = $req->input('phone');
        $message = $req->input('message');

        $data = array('name'=>$name,"email"=>$email,"phone"=>$phone,"message"=>$message);

        DB::table('contact')->insert($data);

        /*$data->save();*/
        return view('layouts/index');
    }

    /*public function about()
    {
        return view('about');
    }

     public function clients()
    {
        return view('clients');
    }

     public function services()
    {
        return view('services');
    }

     public function portfolio()
    {
        return view('portfolio');
    }

     public function contact()
    {
        return view('contact');
    }*/



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
