<?php
echo "=== DESAFIO: FUNÇÕES DE STRINGS ===\n\n";

// 1. strlen() - Conta caracteres [cite: 2, 3]
$texto = "Desenvolvimento Web com PHP"; 
echo "1. strlen: O texto tem " . strlen($texto) . " caracteres.\n"; 

// 2. str_replace() - Substitui strings [cite: 8, 9]
$frase = "Eu adoro programar em JavaScript.";
$nova_frase = str_replace("JavaScript", "PHP", $frase); // Altera o alvo [cite: 10]
echo "2. str_replace: " . $nova_frase . "\n";

// 3. substr() - Corta strings [cite: 16, 17]
$token = "auth_token_987654321_ativo";
$prefixo = substr($token, 0, 10); // Pega 10 caracteres a partir do 0 [cite: 18]
$status = substr($token, 21);    // Pega tudo a partir do índice 21 [cite: 18]
echo "3. substr (prefixo): " . $prefixo . " | (status): " . $status . "\n";

// 4. strtolower() - Caixa baixa [cite: 27, 28]
$email_usuario = "SUPORTE.TI@MeuDominio.COM";
echo "4. strtolower: " . strtolower($email_usuario) . "\n";

// 5. strtoupper() - Caixa alta [cite: 33, 34]
$sigla = "br-rs-sul";
echo "5. strtoupper: " . strtoupper($sigla) . "\n";

// 6. ucfirst() - Primeira letra maiúscula [cite: 39, 40]
$cidade = "sapucaia do sul";
echo "6. ucfirst: " . ucfirst($cidade) . "\n";

// 7. trim() - Remove espaços nas pontas [cite: 45, 46]
$busca_suja = "   notebook gamer ryzen7   ";
echo "7. trim: '" . trim($busca_suja) . "'\n";

// 8. explode() - String para Array [cite: 52, 53]
$linguagens = "Python,Java,C#,SQL";
$array_linguagens = explode(",", $linguagens); // Corta na vírgula [cite: 54]
echo "8. explode (índice 2): " . $array_linguagens[2] . "\n"; 

// 9. implode() - Array para String [cite: 61, 62]
$cores = ["Azul", "Preto", "Cinza"];
$string_cores = implode(" | ", $cores); // Une usando o separador [cite: 63]
echo "9. implode: " . $string_cores . "\n";

// 10. strpos() - Localiza substring [cite: 69, 70]
$log = "Error 404: Page not found on server.";
$posicao = strpos($log, "404"); // Retorna o índice [cite: 72]
if ($posicao !== false) { // Comparação estrita recomendada [cite: 73]
    echo "10. strpos: Código 404 localizado na posição: " . $posicao . "\n";
} else {
    echo "10. strpos: Código não encontrado.\n";
}

// 11. sprintf() - String formatada [cite: 83, 84]
$usuario = "Kauã";
$total_repositorios = 14;
echo "11. sprintf: " . sprintf("O desenvolvedor %s possui %d repositórios no GitHub.", $usuario, $total_repositorios) . "\n";
?>