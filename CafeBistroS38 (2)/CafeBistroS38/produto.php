<?php
// Dados de exemplo. Em um sistema real, você obteria esses dados do banco de dados.
$produtos = array(
    array("ID", "Nome do Produto", "Preço"),
    array(1, "Produto 1", 19.99),
    array(2, "Produto 2", 29.99),
    array(3, "Produto 3", 39.99),
);

// Imprime a tabela
echo "<table>";
foreach ($produtos as $linha) {
    echo "<tr>";
    foreach ($linha as $celula) {
        echo "<td>$celula</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>