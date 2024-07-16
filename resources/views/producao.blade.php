@extends('layout.master')

@section('main')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Formulário de Cadastro</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Blank</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="col-lg-10">

          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Produção de Funcionário</h5>

                  <form class="row g-3">
                    <div class="col-md-12">
                        <label for="inputName5" class="form-label">Nome do Funcionário</label>
                        <input type="text" class="form-control" id="inputName5">
                    </div>

                      <div class="col-md-12">
                          <label for="inputName5" class="form-label">Nome da Sacola:</label>
                          <input type="text" class="form-control" id="inputName5">
                      </div>
                      <div class="col-md-4">
                          <label for="inputEmail5" class="form-label">Quantidade:</label>
                          <input type="text" class="form-control" id="inputEmail5">
                      </div>
                      <div class="col-md-4">
                          <label for="inputPassword5" class="form-label">Gráfica</label>
                          <input type="text" class="form-control" id="inputPassword5">
                      </div>
                      <div class="col-md-4">
                        <label for="inputState" class="form-label">Tamanho:</label>
                        <select id="inputState" class="form-select">
                            <option selected="">Selecione:.</option>
                            <option>PP</option>
                            <option>P</option>
                            <option>M</option>
                            <option>G</option>
                            <option>GG</option>
                        </select>
                    </div>
                    

                    <div class="col-md-4">
                      <label for="inputState" class="form-label">Tipo:</label>
                      <select id="inputState" class="form-select">
                          <option selected="">Selecione:.</option>
                          <option>Alça Colada</option>
                          <option>Gorgurão</option>
                          <option>Cordão</option>
                          <option>Cordão Torcido</option>                        
                      </select>
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">Tipo:</label>
                    <select id="inputState" class="form-select">
                        <option selected="">Selecione:.</option>
                        <option>1 Folha</option>
                        <option>2 Folhas Lado A e B</option>
                        
                        <option>2 Folhas</option>
                        
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="inputPassword5" class="form-label">Recebimento:</label>
                    <input type="date" class="form-control" id="inputPassword5">
                </div>
                <div class="col-md-2">
                    <label for="inputPassword5" class="form-label">Entrega:</label>
                    <input type="date" class="form-control" id="inputPassword5">
                </div>
                  
                     </div>

                  <div class="col-md-10">
                    <label for="testo" class="form-label">Texto:</label>
                    <textarea class="form-control" style="height: 100px"></textarea>
                    
                </div>







                   
                          <div class="text-center">
                              <button type="submit" class="btn btn-primary">Enviar</button>
                              <button type="reset" class="btn btn-secondary">Reset</button>
                          </div>
                  </form>

              </div>
          </div>                             
              </form><!-- End Custom Styled Validation with Tooltips -->


    </main><!-- End #main -->
    
@endsection