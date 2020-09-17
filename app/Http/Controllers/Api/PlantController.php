<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plant;
class PlantController extends Controller
{
    public function index(){
        return Plant::all();
    }
}
