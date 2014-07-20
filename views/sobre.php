<?php
    $conteudo = new Model();

    $dataPage = $conteudo->selectPage('paginas',"nome_pagina = 'sobre'");
?>

<div class="col-lg-12" style="margin-top: 10px;">
    <?php
        for($i=0; $i<count($dataPage); $i++):
            echo $dataPage[$i]['conteudo_pagina'];
        endfor;
    ?>
</div>
