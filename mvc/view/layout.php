<html>
    <head>
        <title>MyApp - <?=$controller?></title>
        <style>
        .flash {
            padding:10px;
            background:yellow;
            cursor:pointer;
        }
        </style>
    </head>
    <body>
        <header>
            <h1>MyApp - <?=$controller?></h1>
            <nav><a href="/mvc/">Pessoas</a> | <a href="/mvc/?t=carro">Carros</a></nav>
            <?php if($flash): ?>
                <div class="flash"><?=$flash?></div>
            <?php endif; ?>
        </header>
        <section>
            <?php include("view/$controller.php"); ?>
        </section>
        <script>
        (function(){
            let flash=document.querySelector('.flash');
            if(flash){
                flash.addEventListener('click',function(){
                    flash.style.display='none';
                });
            }
            setTimeout(function(){flash.style.display='none';},6000);
        })();
        </script>
    </body>
</html>
