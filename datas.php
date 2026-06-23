<?php
echo "=== DESAFIO: CLASSE DATETIME ===\n\n";

// 1. new DateTime() - Instanciação [cite: 272, 273]
$agora = new DateTime(); 
$evento_futuro = new DateTime('2026-12-31'); // Data fixa customizada [cite: 278]

// 2. format() - Exibição tratada [cite: 279, 280]
echo "2. Formato BR: " . $agora->format('d/m/Y H:i:s') . "\n"; // [cite: 291]
echo "2. Formato ISO Banco: " . $evento_futuro->format('Y-m-d') . "\n"; // [cite: 294]

// 3. modify() - Manipulação de períodos [cite: 296, 297]
$prazo_entrega = new DateTime();
$prazo_entrega->modify('+20 days'); // Adiciona dias [cite: 302]
echo "3. modify (+20 dias): " . $prazo_entrega->format('d/m/Y') . "\n";
$prazo_entrega->modify('-2 months'); // Remove meses [cite: 306]
echo "3. modify (subtraindo 2 meses): " . $prazo_entrega->format('d/m/Y') . "\n";

// 4. diff() - Intervalo entre objetos [cite: 307, 308]
$inicio = new DateTime('2026-02-01');
$fim = new DateTime('2026-07-15');
$intervalo = $inicio->diff($fim); // [cite: 312]
echo "4. Diferença: " . $intervalo->m . " meses e " . $intervalo->d . " dias. (Total: " . $intervalo->days . " dias)\n"; // [cite: 317]

// 5. DateTime::createFromFormat() - Lê formato customizado não padrão [cite: 318, 319]
$string_nacional = "05/11/2026";
$objeto_convertido = DateTime::createFromFormat('d/m/Y', $string_nacional); // [cite: 323]
echo "5. createFromFormat: " . $objeto_convertido->format('Y-m-d') . "\n";
?>