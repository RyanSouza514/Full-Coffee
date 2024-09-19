<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dash-usuario');
    }

    public function login(){
        return view('admin.admin');
    }

    public function loginUser(Request $request){
        $validacao = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required","string"],
        ]);

        // Tenta autenticar o usuário
        if(Auth::attempt(['email' => $validacao['email'], 'password' => $validacao['password']])){
            $request->session()->regenerate();
            return redirect()->intended(route("dashbord.index"));
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
            "email"=> ["required", "email", "unique:users,email"], // Verifica se o email já existe
            "password"=> ["required", "string", "confirmed"]
        ]);

        // Cria o novo usuário
        $user = new User();
        $user->name = $validacao["name"];
        $user->email = $validacao["email"];
        $user->password = Hash::make($validacao["password"]); // Hash da senha
        $user->save();

        // Autentica o usuário após o cadastro
        // Auth::attempt(['email' => $validacao['email'], 'password' => $request->password]);

        //return redirect()->intended(route("admin.dash-usuario"));
        // return view('admin.dash-usuario');
        return redirect()->route('Usuario.index')->with('save-success', 'Usuario cadastrado com sucesso!');
    
    }

    public function deslogar(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route("login"));
    }
}
