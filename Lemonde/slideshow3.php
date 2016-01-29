<html lang="en">
    <head>


        <title>Barroso AJ</title>

        <style>
            body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}

            .fadein3 {
                position:relative; height:200px; width:100%; margin:0 auto;
                background: url("slideshow3-bg.png") repeat-x scroll left top transparent;
                top: 30px;
                padding: 0px;
            }
            .fadein3 img { position:absolute; left:5px; top:5px; }
        </style>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>
            $(function() {
                $('.fadein3 img:gt(0)').hide();
                setInterval(function() {
                    $('.fadein3 :first-child' ).fadeOut().next('img').fadeIn().end().appendTo('.fadein3');
                }, 3000);
            });
        </script>

    </head>
    <body>
        <div class="fadein3" >
            <img src="imagens/marcas/rezende.jpg" width="120px" height="100px">
            <img src="imagens/marcas/sadia.jpg"width="120px" height="100px">
            <img src="imagens/marcas/seara.jpg" width="120px" height="100px">
            <img src="imagens/marcas/sertanorte.jpg"width="120px" height="100px">
            <img src="imagens/marcas/swift.jpg" width="120px" height="100px">
            <img src="imagens/marcas/uniaves.jpg"width="120px" height="100px">
            <img src="imagens/marcas/valesul.jpg" width="120px" height="100px">
            <img src="imagens/marcas/vitaves.jpg"width="120px" height="100px">
        </div>
    </body>
</html>

