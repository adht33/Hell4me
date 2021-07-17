<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
   
class UserController extends Controller
{
  

    public function index()
    {
        return response()->json(User :: all());
    }
    public function create()
    {

    }
    public function store(Request $request)
    {
        $user= new User();
        $user->save();
        return response()->json(['status'=>'succes']);
    }
    public function show (User $user)
    {
        return response()->json($user);
    }
    public function edit (User $user)
    {

    }
    public function update (Request $request, User $user)
    {
        $user-> save();
        return response()->json(['status'=>'success']);
    }
    public function destroy (User $user)
    {
        $user-> delete();
        return response()->json(['status'=>'succes']);
    }

}
