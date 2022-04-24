<?php

require_once './composer/vendor/autoload.php';

// A 1ª matriz é a definição de regras, a 2ª são as mensagens de erro específicas da regra de campo (opcional)
$dadosForm = ['nome' =>'Marcelo Alves Farias','email'=>'mljinformatica@gmail.com'];
$regras =[
  'nome'=>'required|max_len,100|min_len,3',
  'email'=>'required|max_len,150|valid_email'
];

$is_valid = GUMP::is_valid($dadosForm,$regras);

if ($is_valid === true) {
  // continue
  echo 'Cados validados corretamente!';
} else {
  var_dump($is_valid); // matriz de mensagens de erro
}