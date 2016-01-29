<html lang="en">
    <head>


        <title>Barroso AJ</title>

        <style>
            
            body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}

            .fadein {
                position: relative;height:10%; margin-top: 8%; margin-left: 20%;
                background: url("slideshow-bg.png") repeat-x scroll left top transparent;
                top: 10%;
                padding: 0%;
            }
            .fadein img { position:absolute; }
        </style>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>
            $(function() {
                $('.fadein img:gt(0)').hide();
                setInterval(function() {
                    $('.fadein :first-child' ).fadeOut().next('img').fadeIn().end().appendTo('.fadein');
                }, 4000);
            });
        </script>

    </head>
    <body>
        <div class="fadein"  >
         
            
            <img src="imagens/ambiente/geral.jpg" width="700px" height="250px">
            <img src="imagens/ambiente/geral.jpg" width="700px" height="250px">
            <img src="imagens/ambiente/geral.jpg" width="700px" height="250px">
        
        </div>
    </body>
</html>

