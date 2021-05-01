<?php

$root = '';
// use if specifying path from root
//$root = $_SERVER['DOCUMENT_ROOT'];

$path = 'images/';

// End of user modified section 
/////////////////////////////////////////////////////////////////////
 
function getImagesFromDir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                $images[] = $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
}

function getRandomFromArray($ar) {
    mt_srand( (double)microtime() * 1000000 ); // php 4.2+ not needed
    $num = array_rand($ar);
    return $ar[$num];
}


// Obtain list of images from directory 
$imgList = getImagesFromDir($root . $path);

$img = getRandomFromArray($imgList);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Redressed&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="about.css">
</head>

<body>
    <nav>
        <div class="logo">
            <h4>Fahmi Ali</h4>
        </div>

        <ul>
            <li><a href="http://fahmiali-330.com/">Home</a></li>
            <li><a class="active" href="http://about.fahmiali-330.com/">About</a></li>
            <li><a href="http://blog.fahmiali-330.com/">Blog</a></li>
            <li><a href="http://download.fahmiali-330.com/">Download</a></li>
        </ul>
    </nav>

    <div class="judul" style="background-color: white;">
        <h1>ABOUT ME</h1>
    </div>
    <div class="isi">
        <h1>PHP</h1>

        <p>
        <p>TOLONG YA DI RELOAD !!!</p>
        </p>

        <!-- image displays here -->
        <div style="text-align: center;"><img class="traveling" src="<?php echo $path . $img ?>" alt="" /></div>


        <p>&nbsp;</p>
    </div>
    <!-- FOOTER  -->
    <footer>
        <div class="footer-aku">
            <h3>Fahmi Ali</h3>
            <p>Selamat datang di website Fahmi Ali Husni, anda mendapatkan seputar dunia saya</p>
            <ul class="sosial">
                <li><a href="https://www.instagram.com/fahmi_ali13/"> <img src="instagram.png" width="5%"></a></li>

                </li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p><?php echo"byek_banyuwangi"?></p>
        </div>
    </footer>

</body>

</html>