<html lang="en">
    <head>


        <title>Barroso AJ</title>

        <style>
            body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}

            .fadein2 {
                position:relative; height:200px; width:100%; margin:0 auto;
                background: url("slideshow-bg.png") repeat-x scroll left top transparent;
                top: 30px;
                padding: 0px;
            }
            .fadein2 img { position:absolute; left:5px; top:5px; }
        </style>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>
            $(function() {
                $('.fadein2 img:gt(0)').hide();
                setInterval(function() {
                    $('.fadein2 :first-child' ).fadeOut().next('img').fadeIn().end().appendTo('.fadein2');
                }, 3000);
            });
        </script>

    </head>
    <body>
        <div class="fadein2" >
            <img src="imagens/marcas/realsabor.jpg" width="120px" height="100px">
            <img src="imagens/marcas/frimesa.jpg"width="120px" height="100px">
            <img src="imagens/marcas/globoaves.jpg" width="120px" height="100px">
            <img src="imagens/marcas/guibon.jpg"width="120px" height="100px">
            <img src="imagens/marcas/nituano.gif" width="120px" height="100px">
            <img src="imagens/marcas/Perdigao.jpg"width="120px" height="100px">
            <img src="imagens/marcas/pifpaf.jpg" width="120px" height="100px">
        </div>
    </body>
</html>

