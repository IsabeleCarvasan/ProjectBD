<?php include './inc/header.php'; ?>

       <form id="ajudante" method="post"> 
        <input type="hidden" name="acao" value="" />
         <div id="p1" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

              <p class="titulo-formu">Cadastrar Ajudante</p>
        
              <div class="row">
                <div class="col-md-6">
                  <p class="formu-letra">CPF</p>
                  <input class="input-formu" type="text" name="cpf" maxlength="14"/>
                </div>
                <div class="col-md-6">
                  <p class="formu-letra">RG</p>
                  <input class="input-formu" type="text" name="rg" maxlength="10"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p class="formu-letra">Nome</p>
                  <input class="input-formu" type="text" name="nome" maxlength="60"/>
                </div>
                <div class="col-md-6">
                  <p class="formu-letra">Salario</p>
                  <input class="input-formu" type="text" name="salario" />
                </div>
              </div>
              
          
              <div class="row">
                <div class="col-md-12">
                  <button class="btn-salvar" id="ajudante-salvar" type="submit">Salvar</button>  
                  <a href="" class="btn-cancelar" type="button">Cancelar</a>                  
                </div>
              </div>

              
            </div>         
          </div>
        </form>

<?php include './inc/footer.php'; ?>
