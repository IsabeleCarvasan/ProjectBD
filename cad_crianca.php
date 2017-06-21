<?php include './inc/header.php'; ?>

       <form id="crianca" method="post"> 
        <input type="hidden" name="acao" value="" />
         <div id="p1" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

              <p class="titulo-formu">Cadastrar Criança</p>
             
              <div class="row">
                <div class="col-md-6">
                  <p class="formu-letra">CPF Responsável</p>
                  <select class="input-formu" type="text" name="cpf_responsavel" maxlength="14">
                  </select>
                </div>
                <div class="col-md-6">
                  <p class="formu-letra">Nome</p>
                  <input class="input-formu" type="text" name="nome" maxlength="60"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p class="formu-letra">Telefone</p>
                  <input class="input-formu" type="text" name="telefone" maxlength="10"/>
                </div>
                <div class="col-md-6">
                  <p class="formu-letra">Escola</p>
                   <select class="input-formu" type="text" name="n_ident_escola" maxlength="11">
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p class="formu-letra">Periodo</p>
                  <select class="input-formu" type="text" name="periodo" >
                    <option id="i">Integral</option>
                    <option id="m">Matutino</option>
                    <option id="v">Vespertino</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <p class="formu-letra">Dia Pagamento</p>
                  <input class="input-formu" type="text" name="dia_pagto" maxlength="2"/>
                </div>
                <div class="col-md-4">
                  <p class="formu-letra">Mensalidade</p>
                  <input class="input-formu" type="text" name="mensalidade" maxlength="11"/>
                </div>
              </div>              
          
              <div class="row">
                <div class="col-md-12">
                  <button class="btn-salvar" id="responsavel-salvar" type="submit">Salvar</button>  
                  <a href="" class="btn-cancelar" type="button">Cancelar</a>                  
                </div>
              </div>

              
            </div>         
          </div>
        </form>

<?php include './inc/footer.php'; ?>
