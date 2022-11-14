<?php

if ($_GET){
    $chica=$_GET['modelo'];

    echo "La modelo elegida es ".$chica;



}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="deb887">

<br></br>

<div align="center">
</div>
</form>

    <form action="ProyectoX.html" method="submit">
    <p><input type="submit" value="Volver"></p>    
    </form>
     
    <ul>
    <li><a href="https://www.youtube.com/embed/T2URfrGsx2w" target=iframe_youtube>Chiccoalistar</a></li>

    <select name="Contenido" onchange="openLink(evento)" id="Video">
  <option value="Videos">Videos</Video>
     <option href="https://www.youtube.com/embed/T2URfrGsx2w" target=iframe_youtube value="Sonic">Sonic</option>
     <option value="Kirby">Kirby</option>
     <option value="AmoungUs">Amoung Us</option>
     <option value="Mario">Mario Bros</option>
     <option value="Zelda">Zelda</option>
  </optgroup>
</select>

    <li><a href="https://www.youtube.com/embed/CrKXAt3AoqU" target=iframe_youtube>Casi creativo</a></li>

    <select name="urlproductosporpagina" onChange="location=this.form.urlproductosporpagina.value">
        <option value="productos.html" class="pag">Videos</option>
        <option value="productos.html" class="pag">1</option>
        <option value="productos2.html" class="pag">2</option>
        <option value="productos3.html" class="pag">3</option>
        <option value="productos4.html" class="pag">4</option>
        <option value="productos5.html" class="pag">5</option>
        <option value="productos6.html" class="pag">6</option>
        <option value="productos7.html" class="pag">7</option>
        <option value="productos8.html" class="pag">8</option>
        <option value="productos9.html" class="pag">9</option>
        <option value="productos10.html" class="pag">10</option>
        <option value="productos11.html" class="pag">11</option>
        <option value="productos12.html" class="pag">12</option>
        <option value="productos13.html" class="pag">13</option>
    </select>
   
    <li><a href="https://www.youtube.com/embed/Sh0mGok25O8" target=iframe_youtube>Infonimados</a></li>

    </ul>

    <iframe name=iframe_youtube width="800" height="500" src="https://www.youtube.com/embed/T2URfrGsx2w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

   
        
</body>
</html>