<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class MainController extends Controller
{
    public function index()
    {
        $title = 'Superheros';
        $superheros = Superhero::orderByDesc('created_at')->paginate(5);
        
        return view('layouts.index', compact('title', 'superheros'));
    }    

    public function deleteImage(Superhero $superhero) 
    {            
        $fpath = $superhero->img;
        $arrPath = explode('/', $fpath);        
        $imgName = $arrPath[3];
        
        unlink('photos/shares/'.$imgName);
        $superhero->update(['img' => Null]);  

        return back();
    }

}
