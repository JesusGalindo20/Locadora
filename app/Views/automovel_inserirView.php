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

// opcional    ->  echo form_open('automovel/salvar', 'class="form-control"');
echo form_open('automovel/salvar');

$label= [
    'class' => 'form-label fs-5',
    'style' => 'color: #000;',
];

$input= [
    'class' => 'form-control',
    'style' => 'width:30%',
];

    
echo '<pre>';
echo form_label('Digite o nome ', 'nome', $label);
echo form_input('TB_AUTOMOVEL_NOME', '', $input);

echo form_label('Digite o ano fabricado ', 'ano', $label);
echo form_input('TB_AUTOMOVEL_ANO_FAB', '', $input);

echo form_label('Digite a cor ', 'cor', $label);
echo form_input('TB_AUTOMOVEL_COR', '', $input);

echo form_label('Digite os KM ', 'km', $label);
echo form_input('TB_AUTOMOVEL_KM', '', $input);

echo form_label('Digite o valor ', 'valor', $label);
echo form_input('TB_AUTOMOVEL_VALOR_D', '', $input);

echo form_label('Digite o status ', 'status', $label);
echo form_input('TB_AUTOMOVEL_STATUS', '', $input);

echo form_label('Selecione a marca ', 'marca', $label);
echo '<br>';
echo form_dropdown('TB_MARCA_ID', $options, '', 'class = "btn btn-secondary btn-sm"');

echo '<br>';

echo form_label('Selecione o modelo ', 'modelo', $label);
echo '<br>';
echo form_dropdown('TB_MODELO_ID', $modelo, '', 'class = "btn btn-secondary btn-sm"');

echo '<br><br>';
echo form_submit('mysubmit', 'Salvar', 'class = "btn btn-primary"');
echo form_close(); 

?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>