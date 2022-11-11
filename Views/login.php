<!--Hey! This is the original version
of Simple CSS Waves-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('public/css/anima.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/card.css')?>">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="header">

<!--Content before waves-->
<div class="inner-header flex">
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-4">
            <div class="card" id="carta">
                <div class="card-header" style="color:black; font-weight:700;">
                    Ingreso
                </div>
                <div class="card-content">
                    <form action="" method="post">
                    <img src="https://www.legislaturasconectadas.gob.ar/static/web/images/logos/LC_logo.png" class="d-inline-block align-top mt-3" alt="">
                        <div class="container">
                            <div class="form-group mt-3">
                                <input type="text" placeholder="Nombre"class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" class="form-control" placeholder="Contraseña">
                            </div>
                            
                        </div>
                        <button type="submit" class="btn mt-3" id="boton">Ingresar</button>
                    </form>
                    <p>¿Todavía no tenes cuenta? <a href="" s>Registrate</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<!--Waves Container-->
<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
</g>
</svg>
</div>
<!--Waves end-->

</div>
<!--Header ends-->

<!--Content starts-->

<!--Content ends-->
</body>
</html>


