<?php  
    require ('config.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Computing Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="estilos.css" rel="stylesheet" type="text/css" />

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand">
		<img src="logo.png" class="img-responsive"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active">
			<a href="quiz1.php">Test</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-left"> 
<?php
    $i=0; 
    $SiSession=0;
    $Correctas=0;
	$Incorrectas=0;
	$arraycorrect= array();
	$arrayincorrect= array();
     $arraygoodquest=array();
    $arraybadquest=array();
    
    while($i<$_SESSION['num']){
        
    if (!empty($_POST["Respuesta{$i}"]))  
        {   $SiSession=1;
            $RespU=$_POST["Respuesta{$i}"];
        
        if ($_SESSION['array'][$i]==$RespU)
            {
             $Correctas+=1;
			array_push($arraycorrect, $RespU); 
            array_push($arraygoodquest, $_SESSION['arrayquest'][$i]);
            }
		 else {
			 $Incorrectas+=1;
			 array_push($arrayincorrect, $RespU); 
             array_push($arraybadquest, $_SESSION['arrayquest'][$i]);
			 
		 }
        }   
    $i+=1;
    }
if ($SiSession==1) {
    $_SESSION['arraygoodquest'] = $arraygoodquest;
    $_SESSION['arraybadquest'] = $arraybadquest;
  echo "Correct answers: ".$Correctas;
	echo "<br>";
	echo "Wrong answers: ".$Incorrectas;
	echo "<br>";
	if (count($arraycorrect) + count($arrayincorrect)==10 ){
			echo "<a href='answer.php'>Show results</a>";
		}
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
    echo "<input type='submit' value='Evalaute'/>"."</form>";
        
}
		
$_SESSION['array'] = $array;
$_SESSION['arraycorrect'] = $arraycorrect;
$_SESSION['arrayincorrect'] = $arrayincorrect;
$_SESSION['num'] = $num;
$_SESSION['arrayquest'] = $arrayquest;
 ?>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=Hello%20world"
  data-size="large">
Tweet</a>
		  
      </div>
      <div class="well">
        <p><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>SJO</p>
</footer>

</body>
</html>
