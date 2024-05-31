<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    // public function index()
    // {
    //     $response = Http::get('http://127.0.0.1:8000/api/users');
    //     if ($response->successful()) {
    //         return response()->json($response->json(), 200);
    //     }
    //     return response()->json(['error' => 'Unable to fetch users'], 500);
    // }
}
