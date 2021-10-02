<?php

helper('form');

echo form_open('automovel/inserir');
echo '<pre>';
echo form_label('Digite o nome ', 'nome');
echo form_input('TB_AUTOMOVEL_NOME', '');

echo form_label('Digite o ano fabricado ', 'ano');
echo form_input('TB_AUTOMOVEL_ANO_FB', '');

echo form_label('Digite a cor ', 'cor');
echo form_input('TB_AUTOMOVEL_COR', '');

echo form_label('Digite os KM ', 'km');
echo form_input('TB_AUTOMOVEL_KM', '');

echo form_label('Digite o valor ', 'valor');
echo form_input('TB_AUTOMOVEL_VALOR_D', '');

echo form_label('Digite o status ', 'status');
echo form_input('TB_AUTOMOVEL_STATUS', '');

//'TB_MARCA_ID', 'TB_MODELO_ID'

echo form_submit('mysubmit', 'Salvar');
echo form_label('<br><br><br>--------------------------------- <br>', '');
echo form_label('--------------------------------- <br>', '');
echo form_label('LISTA', '');
echo form_close(); 






?>