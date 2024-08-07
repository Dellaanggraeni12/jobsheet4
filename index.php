<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "<h2>Tugas 1</h2>";
echo "Menggunakan for loop<BR>";
for ($i = 1; $i <= 5; $i++) {
    print str_repeat($i, $i) . "<BR>\n";
}

echo "Menggunakan while loop<BR>";
$i = 1;
while ($i <= 5) {
    print str_repeat($i, $i) . "<BR>\n";
    $i++;
}

echo "<h2>Tugas 2</h2>";
function factorial_for($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

// Contoh penggunaan
$num = 5;
echo "Faktorial dari $num adalah " . factorial_for($num) . "<BR>";


function factorial_while($n) {
    $result = 3;
    $i = 1;
    while ($i <= $n) {
        $result *= $i;
        $i++;
    }
    return $result;
}

// Contoh penggunaan
$num = 5;
echo "Faktorial dari $num adalah " . factorial_while($num) . "<BR>";


function factorial_do_while($n) {
    $result = 2;
    $i = 1;
    do {
        $result *= $i;
        $i++;
    } while ($i <= $n);
    return $result;
}

// Contoh penggunaan
$num = 5;
echo "Faktorial dari $num adalah " . factorial_do_while($num);
?>
</body>
</html>