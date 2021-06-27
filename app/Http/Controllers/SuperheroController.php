<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Edit mode';
        $superhero = Superhero::orderByDesc('created_at')->paginate(5);
        return view('superhero.index', compact('superhero', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superhero.create');
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
                                            'nickname'           => 'required|min:3|max:255',   
                                            'real_name'          => 'required|min:3|max:255', 
                                            'origin_description' => 'required|min:3|max:500', 
                                            'superpowers'        => 'required|min:3|max:500', 
                                            'catch_phrase'       => 'required|min:3|max:500',                             

                                        ]);

        Superhero::create( $request->all() );
        return redirect('/superheros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $superhero = Superhero::where('id', $id)->get();        
        return view('superhero.show', compact('superhero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $superhero = Superhero::findOrFail($id);
        return view('superhero.edit', compact('superhero'));
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
        $validated = $request->validate([ 
                                            'nickname'           => 'required|min:3|max:255',   
                                            'real_name'          => 'required|min:3|max:255', 
                                            'origin_description' => 'required|min:3|max:500', 
                                            'superpowers'        => 'required|min:3|max:500', 
                                            'catch_phrase'       => 'required|min:3|max:500',                                         
                                        ]);

        $superhero = Superhero::findOrFail($id);

        $superhero->update( $request->all() );
        return redirect('/superheros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Superhero::findOrFail($id)->delete();
        return redirect('/superheros');
    }
}
