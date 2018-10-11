
<html>
<head>
	<title>.:: Konversi Type Data ::.</title>
</head>
<body>
<font face=tahoma size=2>

<?php
	$bayar="500.77 Rupiah";
	echo "Tipe Data String : $bayar <br> ";
	settype ($bayar,"double");
	echo "Tipe Data Double : $bayar <br> ";
	settype ($bayar,"integer");
	echo "Tipe Data Integer : $bayar <br> ";

?>
</body>
</html>

