
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
    
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
    $Resp="A";
    $Correctas=0;
    echo "<form method='post'>";
    
    while ($i<2)
    {
    echo    "<h1><strong>".'Pregunta'."</strong></h1>". 
            "<div class='radio'><label><p><input type='radio' name='Respuesta${i}' value='A'>
            <span class='cr'><i class='cr-icon glyphicon glyphicon-ok-sign'></i></span>".
            'Repuesta1'.
            "</p><label></div>".
            "<div class='radio'><label><p><input type='radio' name='Respuesta${i}' value='B'>
            <span class='cr'><i class='cr-icon glyphicon glyphicon-ok-sign'></i></span>".
            'Repuesta2'.
            "</p><label></div>".
            "<div class='radio'><label><p><input type='radio' name='Respuesta${i}' value='C'>
            <span class='cr'><i class='cr-icon glyphicon glyphicon-ok-sign'></i></span>".
            'Repuesta3'.
            "</p><label></div>".
            "<div class='radio'><label><p><input type='radio' name='Respuesta${i}' value='C'>
            <span class='cr'><i class='cr-icon glyphicon glyphicon-ok-sign'></i></span>".
            'Repuesta4'.
            "</p><label></div>";
        $i+=1;
    }

    echo "<input type='submit' value='Enviar'/>"."</form>";
    $i=0;
    while ($i<2){
        
    
    $RespU=$_POST["Respuesta{$i}"];
    
    
    if ($Resp==$RespU)
    {
        $Correctas+=1;
        
       
    }
    $i+=1;
    }
    echo "Respuestas correctas: ".$Correctas;

 ?>