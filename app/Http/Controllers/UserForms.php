<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//CADASTRAR COLADEIRAS
class UserForms extends Controller

{
    public function cadastro()
    {
        return view('cadastro');
    }
    
    //SALVAR FUNCIONARIO
    /* public function salvarFormulario(Request $requesicaoFormulario)
    {
       $salvarFormulario = new Usuarios();
       $salvarFormulario->nome = $requesicaoFormulario->nome;
       $salvarFormulario->rg = $requesicaoFormulario->rg;
       $salvarFormulario->dataExp = $requesicaoFormulario->dataExp;
       $salvarFormulario->cpf = $requesicaoFormulario->cpf;
       $salvarFormulario->endereco = $requesicaoFormulario->endereco;
       $salvarFormulario->numero  = $requesicaoFormulario->numero;
       $salvarFormulario->cep = $requesicaoFormulario->cep;
       $salvarFormulario->cidade = $requesicaoFormulario->cidade;
       $salvarFormulario->bairro = $requesicaoFormulario->bairro;
       $salvarFormulario->uf = $requesicaoFormulario->uf;
       $salvarFormulario->complemento = $requesicaoFormulario->complemento;
       $salvarFormulario->telcel = $requesicaoFormulario->telcel;
       $salvarFormulario->telrec = $requesicaoFormulario->telrec;
       $salvarFormulario->falarcom = $requesicaoFormulario->falarcom;
       $salvarFormulario->recebimento = $requesicaoFormulario->recebimento;
       $salvarFormulario->entrega = $requesicaoFormulario->entrega;

       $salvarFormulario->banco = $requesicaoFormulario->banco;
       $salvarFormulario->conta = $requesicaoFormulario->conta;
       $salvarFormulario->agencia = $requesicaoFormulario->agencia;
       $salvarFormulario->pix = $requesicaoFormulario->pix;
       







       $salvarFormulario->password = bcrypt($requesicaoFormulario->password);

       $salvarFormulario->save();

       return view('login');

    } */
}