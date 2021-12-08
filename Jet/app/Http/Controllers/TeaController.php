<?php

namespace App\Http\Controllers;

use App\Models\Tea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class TeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Tea::all();
        return Inertia::render('Make',['types'=>$type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, ['title'=>'required',
        'content'=>'required|min:3']);

        $fileName = null;
        if($request->hasFile('image')) {
        $fileName = time().'_'.
        $request->file('image')->getClientOriginalName();
        // $path = $request->file('image')
        //    ->storeAs('public/images', $fileName);
       }

        $input = array_merge($request->all(),
           ["user_id"=>Auth::user()->id]);

        if($fileName) {
        $input = array_merge($input, ['image' => $fileName]);
        }


        Tea::create($input);

        return Inertia::render('Menu', ['user'=>auth()->user(), 'teas'=>Auth::user()->tea]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Tea::find($id);

        return Inertia::render('show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tea $tea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tea $tea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tea $tea)
    {
        //
    }
}
