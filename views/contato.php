
<div class="col-lg-12" style="margin-top: 10px;">

    <form role="form" method="post" action="#">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe seu nome">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Informe seu email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="assunto">Assunto</label>
                    <input type="text" class="form-control" name="assunto" placeholder="Informe o assunto">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea class="form-control" rows="3" name="mensagem" placeholder="Em que podemos lhe ajudar ?"></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <button type="submit" class="btn btn-default">Salvar</button>
            </div>
        </div>
    </form>
</div>

<?php

    if(isset($_POST['nome'])):
        $bd = new Model();
        if( $_POST['nome'] != "" and $_POST['email'] != "" and $_POST['assunto'] and $_POST['mensagem']):

            if($bd->gravar($_POST['nome'],$_POST['email'],$_POST['assunto'],$_POST['mensagem']) == "ok"):
                echo '
                    <div class="col-lg-12" style="margin-top: 10px;">
                     <div class="row">
                        <div class="col-lg-8" style="margin-top:20px; font-size:12px;">
                            O Sistema Gravou Com Sucesso os Seguintes Dados:
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4" style="margin-top:20px; font-size:11px;">
                            Nome: '.$_POST['nome'].'
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4" style="margin-top:5px; font-size:11px;">
                            Email: '.$_POST['email'].'
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4" style="margin-top:5px; font-size:11px;">
                            Assunto: '.$_POST['assunto'].'
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4" style="margin-top:5px; font-size:11px;">
                            Mensagem: '.$_POST['mensagem'].'
                        </div>
                      </div>
                    </div>
                     ';
            endif;

        endif;
    endif;