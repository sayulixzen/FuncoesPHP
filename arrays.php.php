<?php
/* --- PROCESSAMENTO BACKEND --- */
$frameworks = ["Laravel", "Symfony", "Slim"];
$f1_count = count($frameworks);

array_push($frameworks, "Phalcon", "Laminas");
$f2_array = $frameworks; // Salva estado pós push

$f3_pop = array_pop($frameworks);
$f3_array = $frameworks;

$f4_shift = array_shift($frameworks);
$f4_array = $frameworks;

$conexao = ['host' => 'localhost', 'port' => 3306];
$f5_exists = array_key_exists('port', $conexao);
$f6_in_array = in_array('Symfony', $frameworks);

$vetor1 = [10, 20]; $vetor2 = [30, 40];
$f7_merge = array_merge($vetor1, $vetor2);

$usuario_sistema = ['uid' => 1024, 'role' => 'editor'];
$f8_keys = array_keys($usuario_sistema);
$f9_values = array_values($usuario_sistema);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de Array - PHP</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #f5f4f9; color: #2c3e50; margin: 0; padding: 40px; }
        .container { max-width: 900px; margin: 0 auto; }
        h1 { border-bottom: 3px solid #9b59b6; padding-bottom: 10px; color: #8e44ad; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px; }
        @media(max-width: 768px) { .grid { grid-template-columns: 1fr; } }
        .card { background: white; border-radius: 8px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.03); border-left: 5px solid #9b59b6; display: flex; flex-direction: column; }
        .card h2 { margin-top: 0; font-size: 15px; color: #34495e; font-family: monospace; }
        .result { background: #f8f1fb; padding: 8px 12px; border-radius: 4px; font-weight: bold; color: #8e44ad; font-size: 14px; margin-bottom: 10px; }
        pre { background: #2d3748; color: #f7fafc; padding: 12px; border-radius: 6px; font-size: 12px; margin: 0; overflow-x: auto; flex-grow: 1; }
    </style>
</head>
<body>
<div class="container">
    <h1>Manipulação de Arrays</h1>
    <div class="grid">
        <div class="card"><h2>1. count()</h2><div class="result">Total inicial: <?= $f1_count ?> itens</div></div>
        <div class="card"><h2>2. array_push()</h2><div class="result">Inseridos 2 elementos</div><pre><?= print_r($f2_array, true) ?></pre></div>
        <div class="card"><h2>3. array_pop()</h2><div class="result">Removido fim: '<?= $f3_pop ?>'</div><pre><?= print_r($f3_array, true) ?></pre></div>
        <div class="card"><h2>4. array_shift()</h2><div class="result">Removido início: '<?= $f4_shift ?>'</div><pre><?= print_r($f4_array, true) ?></pre></div>
        <div class="card"><h2>5. array_key_exists()</h2><div class="result">Chave 'port' existe? <?= $f5_exists ? 'Sim' : 'Não' ?></div></div>
        <div class="card"><h2>6. in_array()</h2><div class="result">'Symfony' na lista? <?= $f6_in_array ? 'Sim' : 'Não' ?></div></div>
        <div class="card"><h2>7. array_merge()</h2><div class="result">Arrays combinados</div><pre><?= print_r($f7_merge, true) ?></pre></div>
        <div class="card"><h2>8 & 9. array_keys() / values()</h2><div class="result">Chaves e Valores Separados</div><pre>Chaves: <?= print_r($f8_keys, true) ?>Valores: <?= print_r($f9_values, true) ?></pre></div>
    </div>
</div>
</body>
</html>