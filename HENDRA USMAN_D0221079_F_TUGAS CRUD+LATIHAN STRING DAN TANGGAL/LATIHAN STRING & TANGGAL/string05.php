<?php
$number = 5678.91;

#englis notation (default)
$english_format_number= number_format($number);
echo"<br>".$english_format_number; //5,679

// french notation
$nombre_format_francais = number_format($number, 2, ',', ' ');
echo"<br>".$nombre_format_francais; //5 678,91

// indonesia notation
$format_indonesia = number_format($number, 2, ',', '.');
echo"<br>".$format_indonesia; //5.678,91

// english notation without thousand separator
$english_format_number = number_format($number, 2, '.', '');
echo"<br>".$english_format_number; //5678.91

?>