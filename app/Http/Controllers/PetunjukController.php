<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetunjukController extends Controller
{
    private $path = "petunjuk";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->path . '.index');
    }

}
