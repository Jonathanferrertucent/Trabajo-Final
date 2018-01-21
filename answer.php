		<?php
session_start();
$s =0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <li class="active"><a href="quiz1.php">Quiz</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-left"> 
<div style="overflow-x:auto;">
  <table border="1">
    <tr>
      <th><?php
        echo "<h1>Correct answers</h1>";
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
        echo "<h1>Wrong answers</h1>";
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
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>      <a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=Hello%20world"
  data-size="large">
Tweet</a></p>
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
