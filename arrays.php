<?php
echo "=== DESAFIO: FUNÇÕES DE ARRAYS ===\n\n";

// 1. count() - Tamanho do array [cite: 193, 194]
$frameworks = ["Laravel", "Symfony", "Slim"];
echo "1. count: " . count($frameworks) . " elementos.\n";

// 2. array_push() - Adiciona no final [cite: 199, 200]
array_push($frameworks, "Phalcon", "Laminas");
echo "2. array_push: ";
print_r($frameworks);

// 3. array_pop() - Remove o último [cite: 207, 208]
$removido_fim = array_pop($frameworks);
echo "3. array_pop: Extraído '" . $removido_fim . "'.\n";

// 4. array_shift() - Remove o primeiro [cite: 215, 216]
$removido_inicio = array_shift($frameworks);
echo "4. array_shift: Extraído '" . $removido_inicio . "'.\n";

// 5. array_key_exists() - Checa chaves associativas [cite: 223, 224]
$conexao = [
    'host' => 'localhost',
    'port' => 3306
];
echo "5. array_key_exists ('port'): " . (array_key_exists('port', $conexao) ? "Sim" : "Não") . "\n";

// 6. in_array() - Checa valores [cite: 234, 235]
echo "6. in_array ('Symfony'): " . (in_array('Symfony', $frameworks) ? "Existe" : "Não existe") . "\n";

// 7. array_merge() - Junta arrays [cite: 242, 243]
$vetor1 = [10, 20];
$vetor2 = [30, 40];
$unificado = array_merge($vetor1, $vetor2);
echo "7. array_merge: ";
print_r($unificado);

// 8 e 9. array_keys() e array_values() - Separa índices de valores [cite: 250, 251, 260, 261]
$usuario_sistema = [
    'uid' => 1024,
    'role' => 'editor'
];
echo "8. array_keys: ";
print_r(array_keys($usuario_sistema));
echo "9. array_values: ";
print_r(array_values($usuario_sistema));
?>