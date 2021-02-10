<?php
$images = [
    ['src' => "https://www.cpomagazine.com/wp-content/uploads/2020/03/years-old-fox-kitten-cyber-espionage-campaign-targeting-vpn-vulnerabilities-has-given-iran-a-global-foothold_1500.jpg.webp",
        'alt' => "Little fox", 'height' => "860", 'width' => "1500"],
    ['src' => "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/close-up-of-cat-wearing-sunglasses-while-sitting-royalty-free-image-1571755145.jpg",
        'alt' => "Cool cat", 'height' => "1415", 'width' => "2120"],
    ['src' => "https://www.gannett-cdn.com/-mm-/c4ae401c2b7ed80b8554b62a9e62f24d16ef831f/c=0-161-1830-1195/local/-/media/2017/09/15/Springfield/Springfield/636410677676484970-Bobcat0446FCMYK.jpg",
        'alt' => "Beautiful bobcat", 'height' => "1034", 'width' => "1830"],
    ['src' => "https://wallpaperaccess.com/full/480950.jpg",
        'alt' => "Cute bunny", 'height' => "768", 'width' => "1366"],
];
$rand = rand(0, 3);
$image = $images[$rand];
?>
<!DOCTYPE html>
<html lang="fi">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <meta charset="utf-8">
        <title>Random picture</title>
        <style>
            body{
                background-color: lightskyblue;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .content{
                position: relative;
                height: 80vh;
                width: 90vh;
            }
            img{
                object-fit: contain;
                max-width: 100%;
                max-height: 100%;
            }
            .name{
                font-size: 30px;
                text-align: center;
                margin-bottom: 6px;
            }
            .size{
                font-size: 20px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <img src="<?= $image['src'] ?>" alt="<?= $image['alt'] ?>" height="<?= $image['height'] ?>" width="<?= $image['width'] ?>" class="img-thumbnail">
            <p class="name"><?= $image['alt']?></p>
            <p class="size">Source size is <?= $image['width']?>x<?= $image['height']?>px</p>
        </div>
    </body>
</html>
