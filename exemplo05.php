<?php
// detalhando a superglobal $_get
var_dump($_GET);

echo '<br>';

//efetuando o castig em tempo de exeecução
var_dump ((int)$_GET);

echo '<br>';

// imprimindo o valor pela chave
echo($_GET['a']);

?>