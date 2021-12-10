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
        return Inertia::render('Menu',[
            'teas' => Tea::orderBy('id', 'desc')->paginate(3)->through(function ($tea) {
            return [
                'id' => $tea->id,
                'image' => $tea->image,
                'name' => $tea->name,
                'type' => $tea->type,
                'text' => $tea->text,
                'price' => $tea->price,
            ];
        }),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Make');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'text' => 'required',
            'price' => 'required',
            'image' => 'image' ,
        ]);




        $path = $request->image->store('image', 'public');

        $validated = array_merge($validated, ['image' => $path]);


        $devices = Tea::create($validated);


        $devices->save();


        return redirect()->route('Menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teas = Tea::find($id);

        return Inertia::render('Show', ['teas'=>$teas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $tea = Tea::find($id);

        // return Inertia::render('Edit', ['tea'=>$tea]);
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

        $validated = $request->validate([
        'name' => 'required',
        'type' => 'required',
        'text' => 'required',
        'price' => 'required',
        'image' => 'image' ,
        ]);

        $path = null;

        if($request->image){
            $path = $request->image->store('image', 'public');
        }

        if($path != null){
            $validated = array_merge($validated, ['image' => $path]);
        }

        $tea->update($validated);

        return redirect()->route('Show', ['tea'=> $tea->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tea  $tea
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teas = Tea::find($id);

        if($teas != null){
            $teas->delete();
        }

        return redirect()->route('Menu');
    }
}
