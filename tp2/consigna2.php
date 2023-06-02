<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabajo Práctico 2</title>
</head>
<body>


    <?php 
        //echo "Hola mundo desde PHP";
        //echo "<p><i>«No necesito saberlo todo, tan sólo necesito saber donde encontrar aquello que me hace falta, cuando lo necesite». Albert Einstein, físico teórico y filósofo de la ciencia. (1879- 1955)</i></p>";

        echo "<h1>“ESTRUCTURA DE DATOS - OPERACIONES CON VECTORES” </h1>";
        echo "<h3>Consigna 2</h3>";
        echo "<p>Crear una estructura HTML, que contenga 4 imágenes (almacenadas en el vector) que al volver a cargar el archivo (o actualizarlo) cambien la ubicación en forma aleatoria</p>";
        echo "<h2>Tabla de elementos</h2>";

        $heroes = array(
            "invoker" => '<img width="290" height="160" src="https://e1.pxfuel.com/desktop-wallpaper/335/291/desktop-wallpaper-invoker-dota-2-animated-backgrounds-gif-gfycat-1280x720-for-your-mobile-tablet-invoker-dota-2.jpg" alt="">',

            "kotl" => '<img width="290" height="160" src="https://img3.goodfon.com/wallpaper/nbig/7/26/dota-2-keeper-of-the-light-1257.jpg" alt="">',

            "rubick" => '<img width="290" height="160" src="https://e0.pxfuel.com/wallpapers/91/643/desktop-wallpaper-rubick-dota-2-background.jpg" alt="">',

            "puck" => '<img width="290" height="160" src="https://w0.peakpx.com/wallpaper/671/387/HD-wallpaper-puck-characters-faerie-dragon-dota-2.jpg" alt="">',

            "sven" => '<img width="290" height="160" src="https://images7.alphacoders.com/770/770880.jpg" alt="">',

            "omni" => '<img width="290" height="160" src="https://www.wallpapers13.com/wp-content/uploads/2017/07/Omniknight-Dota-2-Games-Fantasy-Art-HD-Wallpapers-1920x1080-840x525.jpg" alt="">',

            "templar" => '<img width="290" height="160" src="https://images4.alphacoders.com/742/742351.jpg" alt="">',

            "wind" => '<img width="290" height="160" src="https://i.pinimg.com/originals/e4/50/17/e4501751f78f2eaf434635e099e1191c.jpg" alt="">',

        );

        arsort($heroes);
        shuffle($heroes);

        echo "<h2>" . "vector ordenado de forma aleatoria en una tabla " . "</h2>";
        
        foreach ($heroes as $k => $v){
            echo $v;
        }
        


        

//        echo "<h2>" . "vector ordenado de forma lista aleatoria " . "</h2>";
//        foreach ($heroes as $k => $v) {
//            echo "posición: " . $k . " ‐ ";
//            echo "contenido: " . $v;
//            echo "<br/>";
//        }



    ?>

    <!--
    <table>
        <tr>
            <th>
                <img width="290" height="160" src="https://e1.pxfuel.com/desktop-wallpaper/335/291/desktop-wallpaper-invoker-dota-2-animated-backgrounds-gif-gfycat-1280x720-for-your-mobile-tablet-invoker-dota-2.jpg" alt="">
            </th>
            <th>
                <img width="290" height="160" src="https://img3.goodfon.com/wallpaper/nbig/7/26/dota-2-keeper-of-the-light-1257.jpg" alt="">
            </th>
            <th>
                <img width="290" height="160" src="https://e0.pxfuel.com/wallpapers/91/643/desktop-wallpaper-rubick-dota-2-background.jpg" alt="">
            </th>
            <th>
                <img width="290" height="160" src="https://w0.peakpx.com/wallpaper/671/387/HD-wallpaper-puck-characters-faerie-dragon-dota-2.jpg" alt="">
            </th>
        </tr>
    </table>
    -->



<!--
    <table>
        <tr>
            <th>
                <img width="290" height="160" src="../tp2/img/rubick.jpg" alt="">
            </th>
            <th>
                <img width="290" height="160" src="../tp2/img/kotl.jpg" alt="">
            </th>
            <th>
                <img width="290" height="160" src="../tp2/img/invoker.jpg" alt="">
            </th>
            <th>
                <img width="290" height="160" src="../tp2/img/elder.jpg" alt="">
            </th>
        </tr>
    </table>

-->

</body>
</html>