<?php

namespace App\Http\Controllers;

use App\Http\Resources\ManufacturerCollection;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ManufacturerCollection(
            Manufacturer::all()
        );
    }
}
