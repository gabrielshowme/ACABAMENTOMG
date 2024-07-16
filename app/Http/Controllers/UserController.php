<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{ //SALVAR LOGIN E PASSWORD

    
  //FUNÇÃO QUE ENVIA PARA VIEW PAGE REGISTER
    public function register()
    {
        return view('pages-register');
    }
    //FAZ LOGIN UTILIANDO A CLASS AUTH

    public function login(Request $requesicaoFormularioLogin)
    {

        $credenciais = $requesicaoFormularioLogin->only(["username", "password"]);

        if (!Auth::attempt($credenciais)) {
            return redirect()->back()->withInput()->withErrors(array('messege' => 'Usuario não localizado'));
        }

        return view('index');
    }
    //FUNÇÃO SALVA REQUISIÇÕES QUE VEM DO FORMULÁRIO DENTRO DO BANCO, POR ISSO USA O request.

    public function salvarUsuario(Request $requesicaoFormulario)
    {
        $salvarNoBanco = new Usuarios();

        $salvarNoBanco->nome = $requesicaoFormulario->nome;
        $salvarNoBanco->username = $requesicaoFormulario->email;
        $salvarNoBanco->password = bcrypt($requesicaoFormulario->password);

        $salvarNoBanco->save();

        return view('login');
    }
    //FUNÇÃO FAZ LOGOUT DO SISTEMA.

    public function sair()
    {

        auth()->logout();

        return redirect()->route('telaInicial')->with('success', 'Você saiu da sua conta com sucesso');
    }
}
