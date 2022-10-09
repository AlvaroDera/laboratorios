<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title> Laboratorio 11.1 </title>
</head>
<body> 
    <h1> Consulta de noticias </h1>

    <?php
    require_once("class/noticias.php");

    $obj_noticia = new noticia();
    $noticias = $obj_noticia->consultar_noticias();
    $limite = 0;
    $a = 1;
    $b = 5;
    $cinco = 5;

    if(isset($_REQUEST['a'])&&isset($_REQUEST['b'])&&isset($_REQUEST['limite'])) {

	    $a = $_REQUEST['a'];
	    $b = $_REQUEST['b'];
	    $limite = $_REQUEST['limite'];
    }

    $obj_noticia = new noticia();
    $noticias = $obj_noticia->consultar_noticias($limite);
    $nfilas=count($noticias);

    if ($b>$nfilas) {
        $tempo = $b;
        $b = $nfilas;
    }

    if ($nfilas==0) {
        $a=$nfilas;
    }

    if($nfilas<=5) {
        print("Mostrando noticias " . $a . " a " . $b . " de un total de " 
        . $nfilas . ". [ Anterior | Siguente ]\n");
    }

    if($a>1&&$b<$nfilas) {
        print("Mostrando noticias " . $a . " a " . $b . " de un total de " 
        . $nfilas . ". [ <A HREF=lab111.php?a=".$a=$a-$cinco."&b=".$b=$b-$cinco
        ."&limite=".$limite=$limite-$cinco.">Anterior | <A HREF=lab111.php?a="
        .$a=$a+$cinco."&b=".$b=$b+$cinco."&limite=".$limite=$limite+$cinco.">Siguente</A> ]  \n");
    }
        else {
            if($a==1) {
            print("Mostrando noticias " . $a . " a " . $b . " de un total de " 
            . $nfilas . ". [ Anterior | <A HREF=lab111.php?a=".$a=$a+$cinco."&b="
            .$b=$b+$cinco."&limite=".$limite=$limite+$cinco.">Siguente</A> ]  \n");
        }
    }

if($b==$nfilas)
{
	print("Mostrando noticias " . $a . " a " . $b . " de un total de " . $nfilas 
    . ". [ <A HREF=lab111.php?a=".$a=$a-$cinco."&b=".$tempo=$tempo-$cinco."&limite="
    .$limite=$limite-$cinco.">Anterior</A> | Siguente ]\n");

}
    if ($nfilas > 0) {
        print ("<table>\n");
        print ("<tr>\n");
        print ("<th> Titulo </th>\n");
        print ("<th> Texto </th>\n");
        print ("<th> Categoria </th>\n");
        print ("<th> Fecha </th>\n");
        print ("<th> Imagen </th>\n");
        print ("</tr>\n");

        foreach ($noticias as $resultado) {
            print ("<tr>\n");
            print ("<td>" . $resultado['titulo'] . "</td>\n");
            print ("<td>" . $resultado['texto'] . "</td>\n");
            print ("<td>" . $resultado['categoria'] . "</td>\n");
            print ("<td>" . date("j/n/Y"
            ,strtotime($resultado['fecha'])) . "</td>\n");

                if ($resultado['imagen'] != "") {
                    print ("<td><a target='_blank' href='img/" . $resultado['imagen'] . 
                    "'><img border='0' src='img/iconotexto.gif'></a></td>\n");
                }
                else {
                    print ("<td>&nbsp;</td>\n");
                }
                print ("</tr>\n");
        }
        print ("</table>\n");
    }
    else {
        print ("No hay noticias disponibles");
    }
    
    ?>

</body>
</html>