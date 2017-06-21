<?php include './inc/header.php'; ?>

       <form id="trecho" method="post"> 
        <input type="hidden" name="acao" value="" />
         <div id="p1" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

              <p class="titulo-formu">Cadastrar Transporte</p>

              <div class="row">
                <div class="col-md-8">
                  <p class="formu-letra">Numéro Identificação</p>
                  <input class="input-formu" type="text" name="n_indent" maxlength="11" />
                </div>
                <div class="col-md-4">
                  <p class="formu-letra">Valor</p>
                  <input class="input-formu" type="text" name="preco" maxlength="11"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p class="formu-letra">CPF do Responsável</p>
                   <select class="input-formu" type="text" name="cpf_responsável" maxlength="14">
                  </select>
                </div>
                <div class="col-md-6">
                  <p class="formu-letra">Nome da Criança</p>
                   <select class="input-formu" type="text" name="nome" maxlength="60">
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p class="formu-letra">Veículo</p>
                   <select class="input-formu" type="text" name="placa" maxlength="8">
                  </select>
                </div>
              </div>              
          
              <div class="row">
                <div class="col-md-12">
                  <button class="btn-salvar" id="trecho-salvar" type="submit">Salvar</button>  
                  <a href="" class="btn-cancelar" type="button">Cancelar</a>                  
                </div>
              </div>

              
            </div>         
          </div>
        </form>

<?php include './inc/footer.php'; ?>
