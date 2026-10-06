<?php
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

echo "Nome: " . $nome . "<br>";
echo "Cidade: " . $cidade . "<br><br>";

if ($cidade == "Curitiba") {
    echo "Curitibano!";
}
?>