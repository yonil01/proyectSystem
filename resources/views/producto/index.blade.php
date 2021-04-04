
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/products.css">

    <link rel="stylesheet" href="css/navbar/styles.css">
    <title>Hello, world!</title>
  </head>
  <body>
  
  <header class="header">
            <a href="#" class="header__logo">Jhon Doe</a>

            <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

            <nav class="nav" id="nav-menu">
                
                <div class="nav__content bd-grid">

                    <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>
    
                    <div class="nav__perfil">
                        <div class="nav__img">
                            <img src="assets/img/perfil.png" alt="">
                        </div>
                        
                        <div>
                            <a href="#" class="nav__name">Jhon Doe</a>
                            <span class="nav__profesion">Web designer</span>
                        </div>
                    </div>
    
                    <div class="nav__menu ">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="#" class="nav__link active">Home</a></li>
                            <li class="nav__item"><a href="#" class="nav__link">Nostros</a></li>
                            <li class="nav__item"><a href="#" class="nav__link">Contactanos</a></li>
                            <li class="nav__item"><a href="#" class="nav__link">Portfolio</a></li>
                            <li class="nav__item"><a href="#" class="nav__link">Login</a></li>
                        </ul>
                    </div>   
                        
                </div>
            </nav>
        </header>

        <!-- ===== IONICONS ===== -->

    
    
   <div class="espacio"></div>

   @foreach ($categories as $category)
    <div class="title">
        <h2>Categoria</h2>
        <p>{{$category->name}}</p>
    </div>

    
    <div class="head">
        @foreach ($productos as $producto)
        
            @if ($category->name == $producto->type_category)
            <div class="producto">
            <img src="img/logo1.png" alt="Auriculares xiami">
            <div class="informacion">
                <span class="tipo-envio">{{$producto->type_delivery}}</span>
                <span class="precio">$ {{$producto->cost}}</span>
                <span class="precio-envio">{{$producto->cost_delivery}}</span>
                <span class="descripcion">{{$producto->description}}</span>
                <div class="calificacion">
                    <span>
                        <i class="fi-xnsuxl-star-solid"></i>
                        <i class="fi-xnsuxl-star-solid"></i>
                        <i class="fi-xnsuxl-star-solid"></i>
                        <i class="fi-xnsuxl-star-solid"></i>
                        <i class="fi-xnsuxl-star-solid"></i>
                    </span>
                <span>1999</span>
            </div>
                <div class="agregar">
                    <span class="ubicacion">{{$producto->city_company}}</span>
                    <span class="ubicacion"><a class="btn-agregar" href="">Agregar</a></span>
                </div>
            </div>
        </div>
        @endif
        @endforeach
   
    <a href="" class="btn btn-agregar">Ver mas</a>
    </div>
    @endforeach


<!-- navbar -->
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

        <!--===== MAIN JS =====-->
        <script src="js/navbar/main.js"></script>

<!--  -->

<script src="js/friconix.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  
  </body>
</html>






