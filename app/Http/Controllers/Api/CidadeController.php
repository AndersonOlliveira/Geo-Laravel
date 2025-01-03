<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\cidade;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class CidadeController extends Controller
{

 public function index() :JsonResponse{

    $cidae = cidade::all();
     return response()->json([
        'Status' => 2,
        'message' => $cidae,
     ],200);
    }
}
