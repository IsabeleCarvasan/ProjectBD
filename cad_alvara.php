<?php 

include './inc/header.php';
include './inc/conexao.php';

  $acao = @$_GET["acao"];
  $n_ident = @$_GET["id"]; 



?>

       <form id="alvara" method="post"> 
        <input type="hidden" name="acao" value="" />
         <div id="p1" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

              <p class="titulo-formu">Cadastrar Alvará</p>
              
              <div class="row">
                <div class="col-md-12">
                  <p class="formu-letra">Numero de identificação</p>
                  <input class="input-formu" type="text" name="n_ident" maxlength="11"/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p class="formu-letra">Validade</p>
                  <input class="input-formu" type="text" name="ano_valid" maxlength="4"/>
                </div>
              </div>
          
              <div class="row">
                <div class="col-md-12">
                  <button class="btn-salvar" id="alvara-salvar" type="submit">Salvar</button>  
                  <a href="" class="btn-cancelar" type="button">Cancelar</a>                  
                </div>
              </div>

              
            </div>         
          </div>
        </form>

<?php include './inc/footer.php'; ?>
