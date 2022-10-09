<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title> Laboratorio 9.1 </title>
</head>
<body>
    <h1> Consulta de noticias </h1>

    <?php
    require_once("../class/noticias.php");

    $obj_noticia = new noticia();
    $noticias = $obj_noticia->consultar_noticias();

    $nfilas=count($noticias);

    if ($nfilas > 0) {
        print ("<table border=1 bgcolor=#bdc3d6>\n");
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