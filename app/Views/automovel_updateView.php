<!DOCTYPE html>
<html>
<head>
    <title>Título da página</title>
    <meta charset="utf-8"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<?php


helper('form');

echo form_open('automovel/salvar');
echo '<pre>';
echo form_label('<br><br><br>--------------------------------- <br>', '');
echo form_label('--------------------------------- <br>', '');
echo form_label('MODIFICAR <br>', '');
echo form_label('Digite o ID a modificar ', 'id');
echo form_input('TB_AUTOMOVEL_ID', $olhar['TB_AUTOMOVEL_ID']);

echo form_label('Digite o nome ', 'nome');
echo form_input('TB_AUTOMOVEL_NOME', $olhar['TB_AUTOMOVEL_NOME']);

echo form_label('Digite o ano fabricado ', 'ano');
echo form_input('TB_AUTOMOVEL_ANO_FAB', $olhar['TB_AUTOMOVEL_ANO_FAB']);

echo form_label('Digite a cor ', 'cor');
echo form_input('TB_AUTOMOVEL_COR', $olhar['TB_AUTOMOVEL_COR']);

echo form_label('Digite os KM ', 'km');
echo form_input('TB_AUTOMOVEL_KM', $olhar['TB_AUTOMOVEL_KM']);

echo form_label('Digite o valor ', 'valor');
echo form_input('TB_AUTOMOVEL_VALOR_D', $olhar['TB_AUTOMOVEL_VALOR_D']);

echo form_label('Digite o status ', 'status');
echo form_input('TB_AUTOMOVEL_STATUS', $olhar['TB_AUTOMOVEL_STATUS']);

echo form_label('Selecione a marca ', 'marca');
echo form_input('TB_MARCA_ID', $olhar['TB_MARCA_ID']);

echo form_label('Selecione o modelo ', 'modelo');
echo form_input('TB_MODELO_ID', $olhar['TB_MODELO_ID']);

echo form_submit('mysubmit', 'Alterar');

echo form_close();

?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>