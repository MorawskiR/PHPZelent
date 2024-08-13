<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="utf-8">
</head>
<body>

<h1> 
   podsumowanie zamowienia 
</h1>

<?php

   $paczkow = $_POST['paczkow'];
   $grzebieni = $_POST['grezbieni'];

 $suma = $grzebieni * 1.29 + $paczkow * 0.99;

   echo <<<END
   <h2> test </h2>
    <table border="1" cellpadding="10" cellspacing="0" 
	<tr> 
		<td> Pączek  </td> 
		<td> $paczkow</td> 
	</tr>
	<tr> 
		<td> grzebien </td> 
		<td> $grzebieni</td> 
	</tr>
	<tr> 
		<td> suma  </td> 
		<td> $suma  </td> 
	</tr>
   </table>

END;

?>

</body>

</html>