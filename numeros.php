<?php

$salario = 5450.852;
$f1_number_format = number_format($salario, 2, ',', '.');

$f2_round_a = round(8.4);
$f2_round_b = round(8.6);
$f2_round_c = round(3.14159, 2);

$f3_ceil = ceil(2.1);
$f4_floor = floor(2.9);

$balanco = 150 - 300;
$f5_abs = abs($balanco);

$f6_rand = mt_rand(1000, 9999);

$valores = [45, 12, 89, 5, 66];
$f7_max = max($valores);
$f8_min = min($valores);

$f9_pow = pow(3, 4);
$f10_sqrt = sqrt(81);

$teste_num = "45.7";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Numéricas - PHP</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #f4f9f6; color: #2c3e50; margin: 0; padding: 40px; }
        .container { max-width: 900px; margin: 0 auto; }
        h1 { border-bottom: 3px solid #2ecc71; padding-bottom: 10px; color: #27ae60; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px; }
        @media(max-width: 768px) { .grid { grid-template-columns: 1fr; } }
        .card { background: white; border-radius: 8px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.03); border-left: 5px solid #2ecc71; }
        .card h2 { margin-top: 0; font-size: 16px; color: #34495e; font-family: monospace; }
        .result { background: #edf7f2; padding: 12px; border-radius: 4px; font-weight: bold; color: #1e7e34; font-size: 14px; margin-top: 10px; }
        .type-table { width: 100%; border-collapse: collapse; margin-top: 15px; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.03); }
        .type-table th, .type-table td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #e2e8f0; }
        .type-table th { background-color: #27ae60; color: white; }
    </style>
</head>
<body>
<div class="container">
    <h1>Funções Numéricas e Matemáticas</h1>
    <div class="grid">
        <div class="card"><h2>1. number_format()</h2><div class="result">R$ <?= $f1_number_format ?></div></div>
        <div class="card"><h2>2. round()</h2><div class="result">8.4 -> <?= $f2_round_a ?> | 8.6 -> <?= $f2_round_b ?> | Decimal -> <?= $f2_round_c ?></div></div>
        <div class="card"><h2>3. ceil()</h2><div class="result">ceil(2.1) = <?= $f3_ceil ?></div></div>
        <div class="card"><h2>4. floor()</h2><div class="result">floor(2.9) = <?= $f4_floor ?></div></div>
        <div class="card"><h2>5. abs()</h2><div class="result">Diferença Absoluta: <?= $f5_abs ?></div></div>
        <div class="card"><h2>6. mt_rand()</h2><div class="result">Código Gerado: <?= $f6_rand ?></div></div>
        <div class="card"><h2>7 & 8. max() / min()</h2><div class="result">Maior: <?= $f7_max ?> | Menor: <?= $f8_min ?></div></div>
        <div class="card"><h2>9. pow()</h2><div class="result">3⁴ = <?= $f9_pow ?></div></div>
        <div class="card"><h2>10. sqrt()</h2><div class="result">√81 = <?= $f10_sqrt ?></div></div>
    </div>

    <h2 style="margin-top: 40px; color: #27ae60;">Verificações de Tipo</h2>
    <table class="type-table">
        <thead>
            <tr><th>Função</th><th>Dado de Teste</th><th>Resultado</th></tr>
        </thead>
        <tbody>
            <tr><td>is_numeric()</td><td>"<?= $teste_num ?>"</td><td><strong><?= is_numeric($teste_num) ? 'true (É numérico)' : 'false' ?></strong></td></tr>
            <tr><td>is_int()</td><td>45</td><td><strong><?= is_int(45) ? 'true (É inteiro)' : 'false' ?></strong></td></tr>
            <tr><td>is_float()</td><td>45.7</td><td><strong><?= is_float(45.7) ? 'true (É float)' : 'false' ?></strong></td></tr>
        </tbody>
    </table>
</div>
</body>
</html>