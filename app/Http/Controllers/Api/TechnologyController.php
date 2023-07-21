<?php

namespace App\Http\Controllers\Api;

use App\Models\Technology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TechnologyController extends Controller
{
    public function index()
    {
        $technology = Technology::all();

        return response()->json([
            'success' => true,
            'results' => $technology,
        ]);
    }
}
