<?php

namespace App\Http\Controllers\Api;

use App\Models\Type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $type = Type::all();

        return response()->json([
            'success' => true,
            'results' => $type,
        ]);
    }
}
