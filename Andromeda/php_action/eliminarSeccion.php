<?php
// Usamos el comando "unlink" para borrar el fichero
//rmdir($_GET["name"]);

$directory = "../".$_GET["name"];
echo $directory;

function removeDirectory($directory)
{
    //$files=scandir($directory.'/*');
    $files=scandir($directory);

    //foreach ($files as $file)
    for ($j=2; $j<count($files) ; $j++)
    {
      echo $files[$j];
        if(is_dir($files[$j]))
        {
            removeDirectory($files[$j]);
            continue;
        }
        unlink($directory."/".$files[$j]);
    }
    rmdir($directory);
}

removeDirectory($directory);
// Redirigiendo hacia atrás
//header("Location: " . $_SERVER["HTTP_REFERER"])
header("Location: ../mantenedor.php" )
?>
