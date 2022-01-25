<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Google fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;1,200;1,600&family=Roboto:ital,wght@0,500;1,400&family=Share+Tech+Mono&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style/style.css">
    <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!--Página CSS-->
   
    <title>Innovation Web</title>
</head>
<body>
    
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid ">
    
    <a class="navbar-brand space" href="#"><img src="./imagens/Logo.png" alt=""></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end space" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quem somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Soluções</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Fale conosco</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </header>
        <!--Aqui o slide-->

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-indicators">
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
	  </div>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="imagens/img-01.jpeg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="imagens/img-02.jpeg" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Anterior</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Próximo</span>
	  </button>
	</div>

        <section>
            <h1>QUEM SOMOS</h1>
            <div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic"><img src="imagens/foto1.jpg" alt=""></div>
                <h3 class="title">Williamson</h3>
                <span class="post">Web Developer</span>
                <ul class="icon">
                    <li><a href="#" class="fab fa-facebook"></a></li>
                    <li><a href="#" class="fab fa-skype"></a></li>
                    <li><a href="#" class="fab fa-twitter"></a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic"><img src="imagens/foto3.jpg" alt=""></div>
                <h3 class="title">Williamson</h3>
                <span class="post">Web Developer</span>
                <ul class="icon">
                    <li><a href="#" class="fab fa-facebook"></a></li>
                    <li><a href="#" class="fab fa-skype"></a></li>
                    <li><a href="#" class="fab fa-twitter"></a></li>
                </ul>
            </div>
        </div>
        
        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic"><img src="imagens/foto2.jpg" alt=""></div>
                <h3 class="title">Williamson</h3>
                <span class="post">Web Developer</span>
                <ul class="icon">
                    <li><a href="#" class="fab fa-facebook"></a></li>
                    <li><a href="#" class="fab fa-skype"></a></li>
                    <li><a href="#" class="fab fa-twitter"></a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic"><img src="imagens/foto4.jpg" alt=""></div>
                <h3 class="title">Kristiana</h3>
                <span class="post">Web Designer</span>
                <ul class="icon">
                    <li><a href="#" class="fab fa-facebook"></a></li>
                    <li><a href="#" class="fab fa-skype"></a></li>
                    <li><a href="#" class="fab fa-twitter"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
            
        </section>

        <section>
          <h1>SOLUÇÕES</h1>

          <h4>Agência de desenvolvimento de sites </h4>
            <h2>Soluções em desenvolvimento para atrair o público alvo correto para sua empresa.</h2>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>