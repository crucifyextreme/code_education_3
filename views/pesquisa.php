
<div class="col-lg-12" style="margin-top: 10px;">
    <form role="form" method="post" action="#">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label for="pesquisa">Informe Sua Pesquisa</label>
                    <input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="Informe sua pesquisa">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <button type="submit" class="btn btn-default">Pesquisar Dados</button>
            </div>
        </div>
    </form>

    <?php
        if( isset($_POST['pesquisa'])):
            echo '
                <div class="row">
                    <div class="col-lg-8"> O sistema encontrou as seguintes paginas de acordo sua pesquisa:</div>
                </div>
            ';
            $model      = new Model();
            $dataPage   =  $model->selectPage('paginas',"conteudo_pagina LIKE '%".$_POST['pesquisa']."%'");

            for( $i=0; $i<count($dataPage); $i++):
                echo '
                        <div class="row">
                            <div class="col-lg-3"> Pagina: <a href='.$dataPage[$i]['nome_pagina'].'> '.ucwords($dataPage[$i]['nome_pagina']).'</a> </div>
                        </div>
                    ';
            endfor;

        endif;
    ?>

</div>
