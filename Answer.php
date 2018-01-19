
<?php
session_start();
$s =0;
?>
<!DOCTYPE html>
<html>
<body>
<div style="overflow-x:auto;">
  <table border="1">
    <tr>
      <th><?php
        echo "<h1>Respuestas correctas</h1>";
for($j=0;$j<count($_SESSION['arraycorrect']);$j++)
   {
	echo "<h3>".$_SESSION['arraygoodquest'][$s]."</h3></br>";
    echo "<font color='#006699'>".$_SESSION['arraycorrect'][$j]."</font>";
	echo "<br>";
	$s++;
	
   }
	?>
	</th>
	<th><?php
        echo "<h1>Respuestas Incorrectas</h1>";
		for($t=0;$t<count($_SESSION['arrayincorrect']);$t++)
   {
	echo "<h3>".$_SESSION['arraybadquest'][$t]."</h3></br>";
    echo "<font color='#006699'>".$_SESSION['arrayincorrect'][$t]."</font>";
	echo "<br>";
	$t++;
   }
		?>		
</th>
     
    </tr>
	</table>
    </div>
</body>
</html>