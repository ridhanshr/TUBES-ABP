<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class apiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $users = User::latest()->get();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data User',
            'data'    => $users  
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'username' => 'required|max:255', 
        ]);
        
        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //save to database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username
        ]);

        //success save to database
        if($user) {

            return response()->json([
                'success' => true,
                'message' => 'user Created',
                'data'    => $user  
            ], 201);

        } 

        //failed save to database
        return response()->json([
            'success' => false,
            'message' => 'User Failed to Save',
        ], 409);
    }

    /**
     * Display the specified resource.
     *
     * @param  mixed $id
     * @return void
     */
    public function show($id)
    {
        //find user by ID
        $user = User::findOrfail($id);

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Detail Data User',
            'data'    => $user 
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  mixed $request
     * @param  mixed $user
     * @return void
     */
    public function update(Request $request, User $user)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'username' => 'required|max:255', 
        ]);
        
        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //find user by ID
        $user = User::findOrFail($user->id);

        if($user) {

            //update user
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username
            ]);

            return response()->json([
                'success' => true,
                'message' => 'User Updated',
                'data'    => $user  
            ], 200);

        }

        //data user not found
        return response()->json([
            'success' => false,
            'message' => 'User Not Found',
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  mixed $id
     * @return void
     */
    public function destroy($id)
    {
        //find user by ID
        $user = User::findOrfail($id);

        if($user) {

            //delete user
            $user->delete();

            return response()->json([
                'success' => true,
                'message' => 'User Deleted',
            ], 200);

        }

        //data user not found
        return response()->json([
            'success' => false,
            'message' => 'user Not Found',
        ], 404);
    }
}