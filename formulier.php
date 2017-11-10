<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" type="image/png" href="images/Nintendo_64_(logo).png" />
    <title>VRDI</title>
</head>

<body>
    
        <form class="kleuren" method="post" id="form">
            
            <h2>Alleen engelse kleur namen</h2>
            
            Naam:
            <input type="text" name="Naam" id="naam" placeholder="Naam"/><br />  
            
            Kleur: 
            <input type="text" name="Kleur" id="kleur" placeholder="kleur"/><br /> 
            
            <input type="submit" name="sub" id="sub" class="btn btn-info" value="Inloggen" />   
        </form>
    
    
    <?php
    $naam = $_POST['Naam'];
    $kleur = $_POST['Kleur'];
    
    echo "<b><font color=$kleur>$naam $kleur</b>";
//    if($kleur == "geel"){
//        echo "<b><font color='yellow'>$naam  $kleur</b>";
//    }
//    
//      if($kleur == "oranje"){
//        echo "<b><font color='orange'>$naam  $kleur</b>";
//    }
//    
//      if($kleur == "zwart"){
//        echo "<b><font color='Black'>$naam  $kleur</b>";
//    }
//    
//      if($kleur == "blauw"){
//        echo "<b><font color='blue>$naam  $kleur</b>";
//    }
//    
//      if($kleur == "paars"){
//        echo "<b><font color='purple>$naam  $kleur</b>";
//    }
    
//    else{
//    echo $naam . " " . $kleur;
//    }
    ?>
</body>

</html>
