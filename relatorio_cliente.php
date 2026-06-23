<?php
/*
 * PROJETO INTEGRADOR: Relatório de Cliente (Versão com Interface Visual)
 * Lógica de processamento de dados isolada da camada de apresentação (HTML/CSS).
 */

// --- 1. DADOS BRUTOS ---
$dados_brutos = [
    'nome'     => '   marianA de ALMEIDA sANTOS   ', 
    'email'    => 'MARIANA.ALMEIDA@SUPORTE.COM.BR',
    'nasc'     => '24/09/1998',                     
    'compras'  => '310.00, 145.50, 50.00, 620.90, 85.00' 
];

// --- 2. TRATAMENTO DE STRINGS ---
$nome_limpo = trim($dados_brutos['nome']); 
$nome_formatado = ucwords(strtolower($nome_limpo)); 
$email_limpo = strtolower($dados_brutos['email']); 
$compras_array = explode(',', $dados_brutos['compras']); 

// --- 3. PROCESSAMENTO TEMPORAL (DateTime) ---
$hoje = new DateTime(); 
$data_nascimento = DateTime::createFromFormat('d/m/Y', $dados_brutos['nasc']); 
$intervalo = $hoje->diff($data_nascimento); 
$idade = $intervalo->y; 

// --- 4. INDICADORES MATEMÁTICOS & ARRAYS ---
$total_de_compras = count($compras_array); 
$valor_total_gasto = array_sum($compras_array); 
$maior_compra = max($compras_array); 
$menor_compra = min($compras_array); 
$media_gasto = $total_de_compras > 0 ? round($valor_total_gasto / $total_de_compras, 2) : 0; 

// --- 5. PROGRAMA DE FIDELIDADE & CUPOM ---
if ($valor_total_gasto >= 1000) {
    $categoria_fidelidade = "VIP Platinum";
    $percentual_desconto = 15;
    $cor_badge = "#8e44ad"; // Roxo para VIP
} elseif ($valor_total_gasto >= 500) {
    $categoria_fidelidade = "Gold Premium";
    $percentual_desconto = 10;
    $cor_badge = "#f39c12"; // Dourado
} else {
    $categoria_fidelidade = "Standard Choice";
    $percentual_desconto = 5;
    $cor_badge = "#7f8c8d"; // Cinza
}

$primeiro_nome = explode(' ', $nome_formatado)[0];
$codigo_cupom = strtoupper($primeiro_nome) . $percentual_desconto;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Cliente - Relatório</title>
    <style>
        /* Estilos CSS para deixar a interface bonita e moderna */
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
        }
        .dashboard {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            width: 100%;
            max-width: 800px;
            overflow: hidden;
        }
        .header {
            background-color: #2c3e50;
            color: white;
            padding: 25px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .header .date {
            font-size: 14px;
            opacity: 0.8;
        }
        .content {
            padding: 30px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .card {
            background: #fdfdfd;
            border: 1px solid #eaeaea;
            border-radius: 8px;
            padding: 20px;
        }
        .card-full {
            grid-column: span 2;
        }
        h2 {
            font-size: 16px;
            color: #7f8c8d;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 0;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            font-size: 15px;
        }
        .info-row strong {
            color: #2c3e50;
        }
        .badge {
            background-color: <?= $cor_badge ?>;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            display: inline-block;
        }
        .cupom {
            background: #e8f8f5;
            color: #16a085;
            border: 2px dashed #1abc9c;
            padding: 15px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            border-radius: 8px;
            margin-top: 10px;
            letter-spacing: 2px;
        }
    </style>
</head>
<body>

<div class="dashboard">
    <div class="header">
        <div>
            <h1>Relatório de Cliente</h1>
            <div class="date">Processado em: <?= $hoje->format('d/m/Y \à\s H:i') ?></div>
        </div>
        <span class="badge"><?= $categoria_fidelidade ?></span>
    </div>

    <div class="content">
        <div class="card">
            <h2>Perfil do Cliente</h2>
            <div class="info-row">
                <span>Nome:</span>
                <strong><?= $nome_formatado ?></strong>
            </div>
            <div class="info-row">
                <span>E-mail:</span>
                <strong><?= $email_limpo ?></strong>
            </div>
            <div class="info-row">
                <span>Idade:</span>
                <strong><?= $idade ?> anos</strong>
            </div>
        </div>

        <div class="card">
            <h2>Estatísticas de Compra</h2>
            <div class="info-row">
                <span>Total de Pedidos:</span>
                <strong><?= $total_de_compras ?></strong>
            </div>
            <div class="info-row">
                <span>Faturamento:</span>
                <strong>R$ <?= number_format($valor_total_gasto, 2, ',', '.') ?></strong>
            </div>
            <div class="info-row">
                <span>Ticket Médio:</span>
                <strong>R$ <?= number_format($media_gasto, 2, ',', '.') ?></strong>
            </div>
        </div>

        <div class="card card-full">
            <h2>Vantagens e Fidelidade</h2>
            <div class="info-row">
                <span>Desconto Liberado (Próxima Compra):</span>
                <strong><?= $percentual_desconto ?>%</strong>
            </div>
            <p style="margin-bottom: 5px; color: #7f8c8d; font-size: 14px;">Código promocional gerado automaticamente:</p>
            <div class="cupom">
                <?= $codigo_cupom ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>