<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;

class CocktailController extends Controller
{
    public function index()
    {
        $projects = Cocktail::all();
        return response()->json([
            'success' => true,
            'results' => $cocktails,
        ]);
    }
}
