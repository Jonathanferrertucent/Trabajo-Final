
<?php
session_start();
$s =0;
?>
<!DOCTYPE html>
<html>
<body>
<div style="overflow-x:auto;">
  <table>
    <tr>
      <th><?php
for($j=0;$j<count($_SESSION['arraycorrect']);$j++)
   {
	echo "<b>".$_SESSION['arrayquest'][$s]."</b>";
    echo $_SESSION['arraycorrect'][$j];
	echo "<br>";
	$s++;
	
   }
	?>
	</th>
	<th><?php
		for($t=0;$t<count($_SESSION['arrayincorrect']);$t++)
   {
	echo "<b>".$_SESSION['arrayquest'][$s]."</b>";
    echo $_SESSION['arrayincorrect'][$t];
	echo "<br>";
	$s++;
   }
		?>		
</th>
     
    </tr>
	</table>

</body>
</html>