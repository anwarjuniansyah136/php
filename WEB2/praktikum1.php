<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="grade">input nilai : </label>
        <input type="text" name="grade" id="grade">
    </form>
</body>
</html>
<?php
	$grade = $_GET['grade'];
	switch ($grade)
	{
		case "A" : $bobot = 4; break;
		case "B" : $bobot = 3; break;
		case "C" : $bobot = 2; break;
		case "D" : $bobot = 1; break;
		default  : $bobot = 0; break;
	}
	echo "Nilai Grade anda = $grade, Bobot Nilai Menjadi = $bobot";
?>
