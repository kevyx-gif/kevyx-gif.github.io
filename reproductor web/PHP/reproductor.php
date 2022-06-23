<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/reproductor_style.css">
    <link rel="stylesheet" href="../CSS/swiper.css" />
    <title>Document</title>
</head>
<body>
    <a href ="http://localhost:3000/PHP/Principal.php" class="salir"><img src="../FOTOS/salir.png" width="60" height="60"></a>
        <div class="testimonials">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card" >
                            <div class="layer" ></div>
                            <div class="content">
                                <div class="imgBx" >
                                    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/22145440&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/the-best-world-music" title="THE BEST WORLD MUSIC" target="_blank" style="color: #cccccc; text-decoration: none;">THE BEST WORLD MUSIC</a> · <a href="https://soundcloud.com/the-best-world-music/lou-bega-sweet-like-cola" title="Lou Bega - Sweet Like Cola" target="_blank" style="color: #cccccc; text-decoration: none;">Lou Bega - Sweet Like Cola</a></div>
                                </div>
                                <div class="details">
                                    <h2><br><span>Sweet Like Cola</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 1,
        slideShadows: true,
        },
        loop:true,
    });
    </script>

</body>
</html>