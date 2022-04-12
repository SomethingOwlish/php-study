<?php
function gallery(){
    $d = 'img/';
    $imgGallery = scandir($d);
    unset( $imgGallery[0]);
    unset( $imgGallery[1]);
    foreach ($imgGallery as $i => $img){
        $tempDir = $d . $img;
        echo "<a href=\"" . $tempDir . "\"target=\"\_blank\"><img width=300px src=" . $tempDir. "></a>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Php16</title>
</head>
<body>
<div>
<p>

<?php
gallery();
?></p>

    <form method="POST" action="php16download.php" enctype="multipart/form-data">
        <div>
            <span>Upload a File:</span>
            <input type="file" name="uploadedFile"  id="userfile"/>
            <input type="submit" value="Upload Image" name="submit"> </div>
    </form>
</div>
</body>
</html>