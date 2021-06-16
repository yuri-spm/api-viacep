<?php
require  __DIR__."/source/Support/Helpers.php";
//echo "Chegou";

$retornoEndereco = validaCep($_POST['cep']);
echo json_encode($retornoEndereco);
