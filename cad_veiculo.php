<?php include './inc/header.php'; ?>

       <form id="veiculo" method="post"> 
        <input type="hidden" name="acao" value="" />
         <div id="p1" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

              <p class="titulo-formu">Cadastrar Veículo</p>
          
              <div class="row">
                <div class="col-md-4">
                  <p class="formu-letra">Placa</p>
                  <select class="input-formu" type="text" name="placa" maxlength="8">
                  </select>
                </div>
                <div class="col-md-4">
                  <p class="formu-letra">Marca</p>
                  <input class="input-formu" type="text" name="marca" maxlength="20"/>
                </div>
                <div class="col-md-4">
                  <p class="formu-letra">Modelo</p>
                  <input class="input-formu" type="text" name="modelo" maxlength="20"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p class="formu-letra">Lotação</p>
                  <input class="input-formu" type="text" name="lotacao" maxlength="11"/>
                </div>
                <div class="col-md-6">
                  <p class="formu-letra">Ano</p>
                   <input class="input-formu" type="text" name="ano" maxlength="4" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <p class="formu-letra">CPF do Condutor</p>
                   <select class="input-formu" type="text" name="cpf_condutor" maxlength="14">
                  </select>
                </div>
                <div class="col-md-4">
                  <p class="formu-letra">CPF do Ajudante</p>
                  <input class="input-formu" type="text" name="cpf_ajudante" maxlength="14"/>
                </div>
                <div class="col-md-4">
                  <p class="formu-letra">Alvará</p>
                  <input class="input-formu" type="text" name="alvara" maxlength="11"/>
                </div>
              </div>              
          
              <div class="row">
                <div class="col-md-12">
                  <button class="btn-salvar" id="veiculo-salvar" type="submit">Salvar</button>  
                  <a href="" class="btn-cancelar" type="button">Cancelar</a>                  
                </div>
              </div>

              
            </div>         
          </div>
        </form>

<?php include './inc/footer.php'; ?>