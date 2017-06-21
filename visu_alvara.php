<?php include './inc/header.php'; ?>

         <div id="p1" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

              <p class="titulo-formu">
                  Listagem de Alvará
                  <a href="cad_alvara.php?acao=CADASTRO"><button class="btn-criar" id="novo-alvara">Novo Alvará</button></a>
              </p>
              
              <div class="row">
                <div class="caixa-f">
                <div class="col-md-6">
                  <p class="formu-letra">Numero de identificação</p>
                </div>
                <div class="col-md-3">
                  <p class="formu-letra">Validade</p>
                </div>
                <div class="col-md-3">
                  <p class="formu-letra">Opções</p>
                </div>
              </div>
              </div>
              <div id="resultado" class="row">
                  <div class="caixa-fl">
                    <div class="col-md-6">
                      <p class="letra-fi ">11111</p>
                    </div>
                    <div class="col-md-3">
                      <p class="letra-fi ">2019</p>
                    </div>
                    <div class="col-md-3">
                      <p class="letra-fi">
                        <a href="cad_alvara.php?acao=ALTERAR&id=11111"><button class="btn-alterar glyphicon glyphicon-pencil" id="manu-alvara"></button></a>
                        <a href="cad_alvara.php?acao=DELETAR&id=11111"><button class="btn-deletar glyphicon glyphicon-trash" id="dele-alvara"></button></a>
                      </p>
                    </div>
                  </div>
                </div>
          

              
            </div>         
          </div>

<?php include './inc/footer.php'; ?>