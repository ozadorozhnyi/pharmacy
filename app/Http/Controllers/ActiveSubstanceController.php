<?php

namespace App\Http\Controllers;

use App\Http\Resources\ActiveSubstanceCollection;
use App\Models\ActiveSubstance;

class ActiveSubstanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ActiveSubstanceCollection(
           ActiveSubstance::all()
        );
    }
}
