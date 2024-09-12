<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dash-usuario');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function login(){
        return view('admin.admin');
    }

    public function loginUser(Request $request){
        $validacao = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required","string"],
        ]);

        

        if(Auth::attempt($validacao)){
            $request->session()->regenerate();
            return redirect()->intended(route("admin.dashboard"));
        }else{
            return redirect()->back()->with("erro", "E-mail ou senha inválidos");
        }
    }

    public function retornarUsuario(){
        return view('admin.dash-usuario');
    }

    public function cadastrarUsuario(Request $request){
           $validacao = $request->validate([
            "name" => ["required", "string"],
            "email"=> ["required", "email"],
            "password"=> ["required", "string", "confirmed"]
        ]);

        $user = new User();
        $user->name = $validacao["name"];
        $user->email = $validacao["email"];
        $user->password = Hash::make($validacao["password"]);
        $user->save();

        Auth::attempt($validacao);
        return redirect()->intended(route("home.index"));
    }

    public function deslogar(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route("admin.admin"));
    }
}
