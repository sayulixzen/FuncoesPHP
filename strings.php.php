<?php
/* --- PROCESSAMENTO BACKEND --- */
$texto = "Desenvolvimento Web com PHP"; 
$f1_strlen = strlen($texto);

$frase = "Eu adoro programar em JavaScript.";
$f2_str_replace = str_replace("JavaScript", "PHP", $frase);

$token = "auth_token_987654321_ativo";
$f3_substr_pref = substr($token, 0, 10);
$f3_substr_stat = substr($token, 21);

$email_usuario = "SUPORTE.TI@MeuDominio.COM";
$f4_strtolower = strtolower($email_usuario);

$sigla = "br-rs-sul";
$f5_strtoupper = strtoupper($sigla);

$cidade = "sapucaia do sul";
$f6_ucfirst = ucfirst($cidade);

$busca_suja = "   notebook gamer ryzen7   ";
$f7_trim = trim($busca_suja);

$linguagens = "Python,Java,C#,SQL";
$f8_explode = explode(",", $linguagens);

$cores = ["Azul", "Preto", "Cinza"];
$f9_implode = implode(" | ", $cores);

$log = "Error 404: Page not found on server.";
$f10_strpos = strpos($log, "404");

$usuario = "Kauã";
$total_repositorios = 14;
$f11_sprintf = sprintf("O desenvolvedor %s possui %d repositórios no GitHub.", $usuario, $total_repositorios);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções de Strings - PHP</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #f0f4f8; color: #2c3e50; margin: 0; padding: 40px; }
        .container { max-width: 900px; margin: 0 auto; }
        h1 { border-bottom: 3px solid #3498db; padding-bottom: 10px; color: #2980b9; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 30px; }
        @media(max-width: 768px) { .grid { grid-template-columns: 1fr; } }
        .card { background: white; border-radius: 8px; padding: 20px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); border-left: 5px solid #3498db; }
        .card h2 { margin-top: 0; font-size: 16px; color: #34495e; font-family: monospace; }
        .result { background: #ecf0f1; padding: 12px; border-radius: 4px; font-weight: bold; color: #2c3e50; font-size: 14px; margin-top: 10px; word-break: break-all; }
    </style>
</head>
<body>
<div class="container">
    <h1>Manipulação de Strings em PHP</h1>
    <div class="grid">
        <div class="card"><h2>1. strlen()</h2><div class="result">Tamanho: <?= $f1_strlen ?> caracteres</div></div>
        <div class="card"><h2>2. str_replace()</h2><div class="result"><?= $f2_str_replace ?></div></div>
        <div class="card"><h2>3. substr()</h2><div class="result">Prefixo: <?= $f3_substr_pref ?> | Status: <?= $f3_substr_stat ?></div></div>
        <div class="card"><h2>4. strtolower()</h2><div class="result"><?= $f4_strtolower ?></div></div>
        <div class="card"><h2>5. strtoupper()</h2><div class="result"><?= $f5_strtoupper ?></div></div>
        <div class="card"><h2>6. ucfirst()</h2><div class="result"><?= $f6_ucfirst ?></div></div>
        <div class="card"><h2>7. trim()</h2><div class="result">'<?= $f7_trim ?>'</div></div>
        <div class="card"><h2>8. explode()</h2><div class="result">Índice [2]: <?= $f8_explode[2] ?></div></div>
        <div class="card"><h2>9. implode()</h2><div class="result"><?= $f9_implode ?></div></div>
        <div class="card"><h2>10. strpos()</h2><div class="result"><?= $f10_strpos !== false ? "Encontrado na posição: $f10_strpos" : "Não encontrado" ?></div></div>
        <div class="card"><h2>11. sprintf()</h2><div class="result"><?= $f11_sprintf ?></div></div>
    </div>
</div>
</body>
</html>