<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{//SALVAR LOGIN E PASSWORD
    public function index()
    {
        dd('UserController@index');//'dd'faz debug
    }
    
    public function register()
    {
        return view('pages-register');
    }

    public function login(Request $requesicaoFormularioLogin)
    {

        $credenciais = $requesicaoFormularioLogin->only(["username", "password"]);

        if(!Auth::attempt($credenciais)){
            return redirect()->back()->withInput()->withErrors(array('messege' => 'Usuario não localizado'));
        }

        return view('index');

    }

    public function salvarUsuario(Request $requesicaoFormulario)
    {
       $salvarNoBanco = new Usuarios();

       $salvarNoBanco->nome = $requesicaoFormulario->nome;
       $salvarNoBanco->username = $requesicaoFormulario->email;
       $salvarNoBanco->password = bcrypt($requesicaoFormulario->password);

       $salvarNoBanco->save();

       return view('login');

    }

    public function sair(){

        auth()->logout();

        return redirect()->route('telaInicial')->with('success', 'Você saiu da sua conta com sucesso');
    }
    
}
