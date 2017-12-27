<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    if (!extension_loaded('zip')) {
        echo( "Nao esta habilitado php_zip.dll, edite seu php.ini" );
        //no php.ini descomente essa linha, se nao existir basta cria-la: extension=php_zip.dll
        exit;
    }
    //diretorio
    $dir = dirname(__FILE__)."/";
    //iniciando a função ZipArchive
    $zip = new ZipArchive();
    //abrindo o arquivo
    $zip->open($dir . "criador.zip", ZipArchive::CREATE);
    //criando pasta
    $zip->addfile($dir . "nome_do_arquivo.extensao", "nome_do_arquivo.extensao");
    $zip->close();
    ?>

    Descompactando

    <?php
    $nome_do_arquivo = "/criador.zip";
    $nome_da_pasta = "template";
    $zip = new ZipArchive();
    $zip->open(getcwd(). $nome_do_arquivo);
    $zip->extractTo($nome_da_pasta);
    $zip->close();
    ?>
  </body>
</html>
