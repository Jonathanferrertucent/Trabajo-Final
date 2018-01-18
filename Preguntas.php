
<?php  
    require ('config.php');
    session_start();
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
    
body {
    background-color: aliceblue;
}  
    
.radio .cr {
    
   
    border: 1px solid #a9a9a9;
    width: 1.3em;
    height: 1.3em;
    margin-right: .5em;
}
.radio .cr {
    border-radius: 50%;
}
.radio label input[type="radio"] {
    display: none;
}
.radio label input[type="radio"] + .cr > .cr-icon {
    transform: scale(3) rotateZ(-20deg);
    opacity: 0;
    transition: all .3s ease-in;
}
.radio label input[type="radio"]:checked + .cr > .cr-icon {
    transform: scale(1) rotateZ(0deg);
    opacity: 1;
}
    
    p {
        font-size: 19px;
        font-family: 'Raleway', sans-serif;
    }
</style>


<?php
    $i=0; 
    $SiSession=0;
    $Correctas=0;
	$Incorrectas=0;
	$arraycorrect= array();
	$arrayincorrect= array();
    
    while($i<$_SESSION['num']){
        
    if (!empty($_POST["Respuesta{$i}"]))  
        {   $SiSession=1;
            $RespU=$_POST["Respuesta{$i}"];
        
        if ($_SESSION['array'][$i]==$RespU)
            {
             $Correctas+=1;
			array_push($arraycorrect, $RespU); 
				
            }
		 else {
			 $Incorrectas+=1;
			 array_push($arrayincorrect, $RespU); 

			 
		 }
        }   
    $i+=1;
    }
if ($SiSession==1) {
  echo "Respuestas correctas: ".$Correctas;
	echo "Respuestas incorrectas: ".$Incorrectas;
}
  
    $q = "SELECT Question, Answer1, Answer2, Answer3, Answer4, CorrectAnsw FROM quiz ORDER BY RAND()";	
    $r = @mysqli_query ($dbc, $q);
    $num = mysqli_num_rows($r);
    $i=0;
	$cont=0;
   
    $array = array();
	$arrayquest= array();
if ($num > 0){
    echo "<form  method='post'>";
    
    while (($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) && ($cont<10))
    {
        $val1=$row['Answer1'];
        $val2=$row['Answer2'];
        $val3=$row['Answer3'];
        $val4=$row['Answer4'];
		$quest=$row['Question'];
     
        
        echo    "<h1><strong>".$row['Question']."</strong></h1>". 
            "<div class='radio'><label><p><strong><input type='radio' name='Respuesta{$i}' value='$val1'>
            <span class='cr'><i class='cr-icon glyphicon glyphicon-ok-sign'></i></span>"
            .$row['Answer1'].
            "</strong></p><label></div>".
            "<div class='radio'><label><p><strong><strong><input type='radio' name='Respuesta{$i}' value='$val2'>
            <span class='cr'><i class='cr-icon glyphicon glyphicon-ok-sign'></i></span>".$row['Answer2'].
            "</strong></p><label></div>".
            "<div class='radio'><label><p><strong><input type='radio' name='Respuesta{$i}' value='$val3'>
            <span class='cr'><i class='cr-icon glyphicon glyphicon-ok-sign'></i></span>".$row['Answer3'].
            "</strong></p><label></div>".
            "<div class='radio'><label><p><strong><input type='radio' name='Respuesta{$i}' value='$val4'>
            <span class='cr'><i class='cr-icon glyphicon glyphicon-ok-sign'></i></span>".$row['Answer4'].
            "</strong></p><label></div>";
        
        array_push($array, $row['CorrectAnsw']);
		array_push($arrayquest, $row['Question']);
		
        $i+=1;
		$cont++;
   
        
    }
    echo "<input type='submit' value='Corregir'/>"."</form>";
        
}
		if (count($arraycorrect) + count($arrayincorrect)==10 ){
			echo "<a href='answer.php'>Mostrar resultados</a>";
		}
$_SESSION['array'] = $array;
$_SESSION['arraycorrect'] = $arraycorrect;
$_SESSION['arrayincorrect'] = $arrayincorrect;
$_SESSION['num'] = $num;
$_SESSION['arrayquest'] = $arrayquest;
 ?>
   
