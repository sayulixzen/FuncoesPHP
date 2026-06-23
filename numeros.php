<?php
echo "=== DESAFIO: FUNÇÕES NUMÉRICAS ===\n\n";

// 1. number_format() - Formatação de moeda/valores [cite: 92, 93]
$salario = 5450.852;
echo "1. number_format: R$ " . number_format($salario, 2, ',', '.') . "\n"; // Padrão BR [cite: 94]

// 2. round() - Arredondamento normal [cite: 103, 104]
echo "2. round (8.4): " . round(8.4) . " | (8.6): " . round(8.6) . " | (3.14159, 2): " . round(3.14159, 2) . "\n";

// 3. ceil() - Arredonda para cima (teto) [cite: 113, 114]
echo "3. ceil (2.1): " . ceil(2.1) . "\n";

// 4. floor() - Arredonda para baixo (piso) [cite: 120, 121]
echo "4. floor (2.9): " . floor(2.9) . "\n";

// 5. abs() - Valor absoluto (módulo) [cite: 127, 128]
$balanco = 150 - 300; // -150
echo "5. abs: " . abs($balanco) . "\n";

// 6. mt_rand() - Número aleatório mais performático [cite: 133, 134]
echo "6. mt_rand (1000 a 9999): " . mt_rand(1000, 9999) . "\n";

// 7 e 8. max() e min() - Maior e menor valor [cite: 140, 141, 149, 150]
$valores = [45, 12, 89, 5, 66];
echo "7. max: " . max($valores) . " | 8. min: " . min($valores) . "\n";

// 9. pow() - Potência [cite: 157, 158]
echo "9. pow (3 elevado a 4): " . pow(3, 4) . "\n";

// 10. sqrt() - Raiz quadrada [cite: 164, 165]
echo "10. sqrt (81): " . sqrt(81) . "\n";

echo "\n--- VERIFICAÇÕES DE TIPO ---\n"; // [cite: 171, 172]
$teste_num = "45.7";

// 11. is_numeric() [cite: 173, 174]
var_dump(is_numeric($teste_num)); 
// 12. is_int() [cite: 179, 180]
var_dump(is_int(45)); 
// 13. is_float() [cite: 186, 187]
var_dump(is_float(45.7)); 
?>