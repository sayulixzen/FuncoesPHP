<?php
/* --- PROCESSAMENTO BACKEND --- */
$agora = new DateTime(); 
$evento_futuro = new DateTime('2026-12-31');

$prazo_entrega = new DateTime();
$prazo_entrega->modify('+20 days');
$f3_mod_add = $prazo_entrega->format('d/m/Y');

$prazo_entrega->modify('-2 months');
$f3_mod_sub = $prazo_entrega->format('d/m/Y');

$inicio = new DateTime('2026-02-01');
$fim = new DateTime('2026-07-15');
$intervalo = $inicio->diff($fim);

$string_nacional = "05/11/2026";
$objeto_convertido = DateTime::createFromFormat('d/m/Y', $string_nacional);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Datas (DateTime) - PHP</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #fbf9f7; color: #2c3e50; margin: 0; padding: 40px; }
        .container { max-width: 750px; margin: 0 auto; }
        h1 { border-bottom: 3px solid #e67e22; padding-bottom: 10px; color: #d35400; }
        .timeline { margin-top: 30px; position: relative; padding-left: 20px; border-left: 3px solid #e67e22; }
        .timeline-item { margin-bottom: 30px; position: relative; }
        .timeline-item::before { content: ''; position: absolute; width: 12px; height: 12px; background: #e67e22; border-radius: 50%; left: -28px; top: 5px; }
        .timeline-content { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.02); }
        .timeline-content h2 { margin-top: 0; font-size: 15px; color: #7f8c8d; font-family: monospace; text-transform: uppercase; }
        .result { font-size: 16px; font-weight: bold; color: #c0392b; margin-top: 5px; }
    </style>
</head>
<body>
<div class="container">
    <h1>Processamento Temporal com Classe DateTime</h1>
    <div class="timeline">
        <div class="timeline-item">
            <div class="timeline-content">
                <h2>1 & 2. new DateTime() & format()</h2>
                <div class="result">Data/Hora Atual: <?= $agora->format('d/m/Y H:i:s') ?></div>
                <div style="font-size: 13px; color: #7f8c8d; margin-top:5px;">Formato Banco de Dados: <?= $evento_futuro->format('Y-m-d') ?></div>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-content">
                <h2>3. modify()</h2>
                <div class="result">Soma (+20 dias): <?= $f3_mod_add ?></div>
                <div class="result" style="color: #d35400;">Subtração (-2 meses do prazo): <?= $f3_mod_sub ?></div>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-content">
                <h2>4. diff()</h2>
                <div class="result" style="color: #2980b9;">Diferença do Projeto: <?= $intervalo->m ?> meses e <?= $intervalo->d ?> dias.</div>
                <div style="font-size: 13px; color: #7f8c8d; margin-top:5px;">Contagem corrida total: <?= $intervalo->days ?> dias absolutos.</div>
            </div>
        </div>
        <div class="timeline-item">
            <div class="timeline-content">
                <h2>5. DateTime::createFromFormat()</h2>
                <div class="result" style="color: #27ae60;">String BR "<?= $string_nacional ?>" -> Objeto: <?= $objeto_convertido->format('Y-m-d') ?></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>