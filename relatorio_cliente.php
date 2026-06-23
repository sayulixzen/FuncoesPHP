<?php
/*
 * PROJETO INTEGRADOR: Processamento e Relatório de Cliente Expandido
 *
 * Este script processa dados brutos fictícios, higieniza strings,
 * calcula idade através de objetos DateTime, gera dados analíticos de consumo
 * e categoriza o cliente em um programa de vantagens automatizado.
 */

// --- 1. DADOS BRUTOS REFORMULADOS (Simulando entrada de dados do sistema) ---
$dados_brutos = [
    'nome'     => '   marianA de ALMEIDA sANTOS   ', // Dados desalinhados
    'email'    => 'MARIANA.ALMEIDA@SUPORTE.COM.BR',
    'nasc'     => '24/09/1998',                     // Data padrão BR
    'compras'  => '310.00, 145.50, 50.00, 620.90, 85.00' // Lista de tickets em string
];

echo "=========================================\n";
echo "       INICIANDO PROCESSAMENTO           \n";
echo "=========================================\n\n";

// --- 2. TRATAMENTO E HIGIENIZAÇÃO DE STRINGS [cite: 351] ---
$nome_limpo = trim($dados_brutos['nome']); // Limpa espaçamentos [cite: 352, 353]
$nome_formatado = ucwords(strtolower($nome_limpo)); // Normaliza capitulação [cite: 355, 358]
$email_limpo = strtolower($dados_brutos['email']); // Tudo para minúsculo [cite: 356]

// Transforma a string unificada em um array manipulável baseado no delimitador vírgula [cite: 359, 360]
$compras_array = explode(',', $dados_brutos['compras']); 

// --- 3. PROCESSAMENTO TEMPORAL (DateTime) [cite: 361] ---
$hoje = new DateTime(); // Data de hoje [cite: 362, 363]
$data_nascimento = DateTime::createFromFormat('d/m/Y', $dados_brutos['nasc']); // [cite: 364, 365]
$intervalo = $hoje->diff($data_nascimento); // Diferença cronológica [cite: 366, 367]
$idade = $intervalo->y; // Extrai o ano correspondente [cite: 368, 369]

// --- 4. TRATAMENTO DOS INDICADORES MATEMÁTICOS & ARRAYS [cite: 370] ---
$total_de_compras = count($compras_array); // Total de pedidos [cite: 371, 372]
$valor_total_gasto = array_sum($compras_array); // Somatório da carteira [cite: 373, 374]
$maior_compra = max($compras_array); // [cite: 375, 376]
$menor_compra = min($compras_array); // [cite: 375, 377]

$media_gasto = 0;
if ($total_de_compras > 0) {
    // Calcula média e formata casas decimais [cite: 378, 382]
    $media_gasto = round($valor_total_gasto / $total_de_compras, 2); 
}

// --- 5. FUNCIONALIDADE EXTRA: PROGRAMA DE FIDELIDADE & GERAÇÃO DE CUPOM ---
// Classificação baseada no faturamento histórico do cliente
if ($valor_total_gasto >= 1000) {
    $categoria_fidelidade = "VIP Platinum";
    $percentual_desconto = 15;
} elseif ($valor_total_gasto >= 500) {
    $categoria_fidelidade = "Gold Premium";
    $percentual_desconto = 10;
} else {
    $categoria_fidelidade = "Standard Choice";
    $percentual_desconto = 5;
}

// Criação automática do código do cupom (Primeiro Nome + Desconto)
$primeiro_nome = explode(' ', $nome_formatado)[0];
$codigo_cupom = strtoupper($primeiro_nome) . $percentual_desconto;


// --- 6. GERAÇÃO DO RELATÓRIO FINAL [cite: 384] ---
echo "=========================================\n";
echo "         RELATÓRIO FINAL DO CLIENTE      \n";
echo "=========================================\n";
echo "Gerado em: " . $hoje->format('d/m/Y H:i:s') . "\n"; // [cite: 385]
echo "-----------------------------------------\n";

// Montagem estruturada usando coringas [cite: 386, 387]
echo sprintf(
    "Cliente: %s\nE-mail:  %s\nIdade:   %d anos\n", 
    $nome_formatado, 
    $email_limpo, 
    $idade
); // [cite: 388, 393]

echo "-----------------------------------------\n";
echo "         ESTATÍSTICAS DE COMPRAS [cite: 394]         \n";
echo "-----------------------------------------\n";
echo "Total de pedidos: " . $total_de_compras . "\n"; // [cite: 396]
echo "Valor total gasto: R$ " . number_format($valor_total_gasto, 2, ',', '.') . "\n"; // [cite: 397]
echo "Média por pedido:  R$ " . number_format($media_gasto, 2, ',', '.') . "\n";       // [cite: 398]
echo "Maior compra:      R$ " . number_format($maior_compra, 2, ',', '.') . "\n";      // [cite: 399]
echo "Menor compra:      R$ " . number_format($menor_compra, 2, ',', '.') . "\n";      // [cite: 400]

echo "-----------------------------------------\n";
echo "   RECOMPENSAS & FIDELIDADE (EXTRA)      \n";
echo "-----------------------------------------\n";
echo "Classificação de Perfil: [ " . $categoria_fidelidade . " ]\n";
echo "Desconto Liberado:        " . $percentual_desconto . "%% para a próxima compra.\n"; // Uso de %% para escapar o caractere no sprintf
echo "Cupom Promocional:        " . $codigo_cupom . "\n";
echo "=========================================\n";
?>