<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paintings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="detyra.css">
    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="foter.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script
src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
crossorigin="anonymous"></script>
    
    <script>
        $(function() {
        $(".toggle").on("click", function() {
            if ($(".item").hasClass("active")) {
                $(".item").removeClass("active");
            } else {
                $(".item").addClass("active");
            }
        });
    });
        </script>
      
</head>
<body>

  <?php include "Header.php"  ?>
    <body>

        <h1>Muse Fairytale</h1>
        <div class="kryesori">

<!--
        <div class="picture">
            
            <img src="https://arthive.net/res/media/img/orig/article/8ff/7567073@2x.jpg" alt="">
            <div class="autori">
                <p>The Last Supper</p>
                <p>By Leonardo da Vinci</p>
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>
        </div>
        </div>
        <div class="picture">
            
            <img src="https://i.ebayimg.com/images/g/r8AAAOSwqOJiVtjl/s-l1600.jpg"  alt="">
            <div class="autori">
                <p>Girl Playing Violin </p>
                <p>By Unknown</p>
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

        </div>
        </div>
        <div class="picture">
          
            <img src="https://e0.pxfuel.com/wallpapers/208/907/desktop-wallpaper-famous-art-background-famous-painting.jpg" alt="">
            
            <div class="autori">
                <p>Colorful night</p>
                <p>By Frida Kahlo</p>
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

        
        </div>
    </div>
        <div class="picture">
            
            <img src="https://e0.pxfuel.com/wallpapers/304/334/desktop-wallpaper-retro-vintage-surf-mural-hovia-retro-painting-art-surf-retro-surf-art.jpg" alt="">
            
            <div class="autori">
                <p>Retro painting</p>
                <p>By Van Gogh</p>
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

        </div>
    </div>
    
        <div class="picture">
           
            <img src="https://wahooart.com/A55A04/w.nsf/O/BRUE-5ZKFWJ/$File/Victor+Borisov+Musatov+-+Still+Life+with+Flowers+.JPG"   alt="">
           
            <div class="autori">
                <p>Life with Flowers</p>
                <p>By Victor Borisov </p>
         
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

    </div>
    </div>
        <div class="picture">
            
            <img src="https://e0.pxfuel.com/wallpapers/519/116/desktop-wallpaper-flower-four-bicycle-seasons-beautiful-paintings-bike-lovely-flowers-vintage-bike.jpg" alt="">
            
            <div class="autori">
                <p>Summer with its benefits </p>
                <p>By Unknown</p>
                <a class=" btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

        </div>
    </div>
        <div class="picture">
           
            <img src="https://render.fineartamerica.com/images/rendered/default/print/8/8/break/images-medium-5/abstract-woman-011-corporate-art-task-force.jpg" alt="">
            
            <div class="autori">
                <p>Abstract Woman </p>
                <p>By  Corporate Art Task Force</p>
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

            </div>
        </div>

        
        <div class="picture">
            
            <img src="http://www.museumartpaintings.com/pic/Peacock-Paintings-DMP05-8937-10434.jpg" alt="">
            
            <div class="autori">
                <p>Peacock Paintings </p>
                <p>By anonymous</p>
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

        </div>
    </div>
        <div class="picture">
         
            <img src="https://images.fineartamerica.com/images-medium-large/daily-life-amit-thombare.jpg" alt="">
            
            <div class="autori">
                <p>Daily Life </p>
                <p>By Amit Thombare</p>
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

            </div>
          
        </div>
        <div class="picture">
           
            <img src="https://paintbynumbersforsale.com/wp-content/uploads/2021/04/butterfly-green-girl-paint-by-numbers.jpg" alt="">
            
            <div class="autori">
                <p>Butterfly Girl </p>
                <p>By Numbers</p>
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

        </div>
        </div>
        <div class="picture">
           
            <img src="https://i.pinimg.com/474x/73/57/fd/7357fd8ca5b7a07d434920210936da99.jpg" alt="">
            
            <div class="autori">
                <p>Inner Child </p>
                <p>By Judith Zalm</p>
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

        </div>
    </div>
        <div class="picture">
            
            <img src="https://d3rf6j5nx5r04a.cloudfront.net/C3f5qvHk3gxxIktxvdt6rkIp3W8=/1120x0/product/7/c/ce06f7d731494c4c9e08b3dbaa569786.jpg" alt="">
            
            <div class="autori">
                <p>White horse</p>
                <p>By Anastasiia Valiulina</p>
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

        </div>
    </div>
        <div class="picture">
            <img src="https://images.saatchiart.com/saatchi/1020626/art/3988151/3058005-HSC00002-7.jpg" alt="">
            
            <div class="autori">
                <p>Life filled with joy </p>
                <p>By Anna Tink</p>
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

        </div>
    </div>
    
        <div class="picture">
            <img src="https://images1.novica.net/pictures/5/p225249_2a_400.jpg" alt="">
            
            <div class="autori">
                <p>Everything is Temporary </p>
                <p>By Luran Ander</p>
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

        </div>
    </div>
        <div class="picture">
            <img src="https://i.pinimg.com/736x/cd/c2/14/cdc21400c16d76efba6dfa73eec7ff78.jpg" alt="">
            
            <div class="autori">
                <p>Good olt times </p>
                <p>By Gabor Toth</p>
                <a class="btn btn-primary" href="ShopingCart.php" role="button" >Add to Cart</a>

        </div>
    </div>
   
   
</div>
</div> 
    </div>    -->
    </body>  

<?php include "Footer.php" ?>

</html>
       