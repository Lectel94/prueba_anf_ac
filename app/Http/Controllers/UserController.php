<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();

        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'sexo' => 'required|string',
            'edad' => 'required|integer',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string'
        ]);

        $user=new User();
        $user->nombre=$request->nombre;
        $user->apellidos=$request->apellidos;
        $user->sexo=$request->sexo;
        $user->edad=$request->edad;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();

        return response()->json($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'sexo' => 'required|string',
            'edad' => 'required|integer',
            'email' => 'required|string|email|unique:users'            
        ]);
        $user=User::find($id);
        $user->nombre=$request->nombre;
        $user->apellidos=$request->apellidos;
        $user->sexo=$request->sexo;
        $user->edad=$request->edad;
        $user->email=$request->email;
        $user->save();

        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user=User::find($id)->delete();
        
        return response()->json($user);
    }
}
