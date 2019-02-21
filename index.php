<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

use Db\Persiste;
use Models\Pessoa;
use Models\Atividade;
use Models\Funcionario;

$p = new Pessoa(2,'joao','1111');

if (Persiste::Add($p)){
	echo '<b>Funcionou</b>';
} else {
	echo 'Falhou';
}

?>