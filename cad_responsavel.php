<?php include './inc/header.php'; ?>

       <form id="responsavel" method="post"> 
        <input type="hidden" name="acao" value="" />
         <div id="p1" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

              <p class="titulo-formu">Cadastrar Responsável</p>
       
              <div class="row">
                <div class="col-md-6">
                  <p class="formu-letra">CPF</p>
                  <input class="input-formu" type="text" name="cpf" maxlength="14"/>
                </div>
                <div class="col-md-6">
                  <p class="formu-letra">Nome</p>
                  <input class="input-formu" type="text" name="nome" maxlength="60"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p class="formu-letra">RG</p>
                  <input class="input-formu" type="text" name="rg" maxlength="10"/>
                </div>
                <div class="col-md-6">
                  <p class="formu-letra">Telefone</p>
                  <input class="input-formu" type="text" name="telefone" maxlength="10"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p class="formu-letra">Logradouro</p>
                  <input class="input-formu" type="text" name="logradouro" maxlength="60"/>
                </div>
                <div class="col-md-2">
                  <p class="formu-letra">Numero</p>
                  <input class="input-formu" type="text" name="numero" maxlength="10"/>
                </div>
                <div class="col-md-4">
                  <p class="formu-letra">Bairro</p>
                  <input class="input-formu" type="text" name="bairro" maxlength="15"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <p class="formu-letra">CEP</p>
                  <input class="input-formu" type="text" name="cep" maxlength="9"/>
                </div>
                <div class="col-md-8">
                  <p class="formu-letra">Complemento</p>
                  <input class="input-formu" type="text" name="complemento" maxlength="25"/>
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
