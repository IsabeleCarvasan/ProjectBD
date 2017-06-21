<?php include './inc/header.php'; ?>

       <form id="condutor" method="post"> 
        <input type="hidden" name="acao" value="" />
         <div id="p1" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

              <p class="titulo-formu">Cadastrar Condutor</p>
             
              <div class="row">
                <div class="col-md-6">
                  <p class="formu-letra">CPF</p>
                  <input class="input-formu" type="text" name="cpf" maxlength="14"/>
                </div>
                <div class="col-md-6">
                  <p class="formu-letra">PGU</p>
                  <input class="input-formu" type="text" name="pgu" maxlength="14"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p class="formu-letra">Nome</p>
                  <input class="input-formu" type="text" name="nome" maxlength="60"/>
                </div>
                <div class="col-md-6">
                  <p class="formu-letra">RG</p>
                  <input class="input-formu" type="text" name="rg" maxlength="10"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p class="formu-letra">Salario</p>
                  <input class="input-formu" type="text" name="salario" />
                </div>
                <div class="col-md-6">
                  <p class="formu-letra">Alvara</p>
                  <select class="input-formu" name="alvara"></select>
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12">
                  <button class="btn-salvar" id="condutor-salvar" type="submit">Salvar</button>  
                  <a href="" class="btn-cancelar" type="button">Cancelar</a>                  
                </div>
              </div>

              
            </div>         
          </div>
        </form>

<?php include './inc/footer.php'; ?>
