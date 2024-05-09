@extends('layout.master')

@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Formulário de cadastro</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Blank</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
        

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Dados do Funcionário:</h5>

                            <form class="row g-3" method="POST" action="{{ url('cadastro') }}"novalidate>
                                @csrf

                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Nome:</label>
                                    <input type="text" class="form-control" id="inputName5">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputEmail5" class="form-label">RG:</label>
                                    <input type="text" class="form-control" id="inputEmail5">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Data de Exp:</label>
                                    <input type="text" class="form-control" id="inputPassword5">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">CPF:</label>
                                    <input type="text" class="form-control" id="inputPassword5">
                                </div>

                                <div class="col-md-8">
                                    <label for="inputEmail5" class="form-label">Endereço:</label>
                                    <input type="text" class="form-control" id="inputEmail5">
                                </div>
                                <div class="col-md-2">
                                    <label for="inputPassword5" class="form-label">Nº:</label>
                                    <input type="text" class="form-control" id="inputPassword5">
                                </div>
                                <div class="col-md-2">
                                    <label for="inputPassword5" class="form-label">Cep:</label>
                                    <input type="text" class="form-control" id="inputPassword5">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Bairro</label>
                                    <input type="text" class="form-control" id="inputEmail5">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Cidade:</label>
                                    <input type="text" class="form-control" id="inputPassword5">
                                </div>
                                <div class="col-md-2">
                                    <label for="inputPassword5" class="form-label">UF:</label>
                                    <input type="text" class="form-control" id="inputPassword5">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword5" class="form-label">Complemento:</label>
                                    <input type="text" class="form-control" id="inputPassword5">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword5" class="form-label">Tel/Cel:</label>
                                    <input type="text" class="form-control" id="inputPassword5">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputPassword5" class="form-label">Telefone de Recado:</label>
                                    <input type="text" class="form-control" id="inputPassword5">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword5" class="form-label">Falar com:</label>
                                    <input type="text" class="form-control" id="inputPassword5">
                                </div>
                                
                                <h5 class="card-title">Dados do Bancários</h5>
                                 <div class="col-md-6">
                                    <label for="inputPassword5" class="form-label">Banco:</label>
                                    <input type="text" class="form-control" id="inputPassword5">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword5" class="form-label">Conta:</label>
                                    <input type="text" class="form-control" id="inputPassword5">
                                </div>
                                <div class="col-md-8">
                                  <label for="inputEmail5" class="form-label">Agência:</label>
                                  <input type="text" class="form-control" id="inputEmail5">
                              </div>
                              <div class="col-md-4">
                                  <label for="inputPassword5" class="form-label">Pix:</label>
                                  <input type="text" class="form-control" id="inputPassword5">
                              </div>
                            
                              







                                <!--<div class="col-12">
                                        <label for="inputAddress5" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="inputAddres5s"
                                            placeholder="1234 Main St">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2"
                                            placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">State</label>
                                        <select id="inputState" class="form-select">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>-->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                        <button type="reset" class="btn btn-secondary">Limpar</button>
                                    </div>
                            </form>

                        </div>
                    </div>

                </div>


            </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
