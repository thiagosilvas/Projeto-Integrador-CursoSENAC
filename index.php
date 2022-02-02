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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
                <h3 class="title">Samira </h3>
                <span class="post">Web Developer Backend</span>
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
                <h3 class="title">Thiago</h3>
                <span class="post">Web Developer Front-end</span>
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
                <h3 class="title">Davi</h3>
                <span class="post">Web Developer Front-end</span>
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
                <h3 class="title">Vinicius</h3>
                <span class="post">Developer Backend</span>
                <ul class="icon">
                    <li><a href="#" class="fab fa-facebook"></a></li>
                    <li><a href="#" class="fab fa-skype"></a></li>
                    <li><a href="#" class="fab fa-twitter"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
            <div class="our-team">
                <div class="pic"><img src="imagens/foto5.jpg" alt=""></div>
                <h3 class="title">Erick</h3>
                <span class="post">Developer Backend</span>
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

           <div class="cards">
            <div class="card mr-2" style="width: 18rem;">
  <img src="./imagens/card1.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="./imagens/card2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="./imagens/card3.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

            
</div>
            <section>
              <h1>FALE CONOSOCO</h1>
              <div class="form"> 
                
                   
                  <div class="content">
                  <h3>Otimize seus resultados!</h3><br>
                  <p>Nossa equipe acompanha as últimas tendências do setor, <br>garantindo a conformidade e alta performance em<br> campanhas marketing digital utilizando plataformas como Google, Facebook e Instagram.</p>
                  </div>
                  <div class="form"> 
                  
  <form id="contact" action="" method="post">
    <h3>Ligamos para você</h3>
    <h4>Envie seus dados e nossa equipe entrará em contato</h4>
    <fieldset>
      <input placeholder="Digite seu nome" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Digite seu email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Digite seu telefone" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Escreva sua mensagem" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
  
</div>

                  
          </section>


            <footer>
              
                <div class="container pt-5">
                
                <div>
                   <i class="bi bi-house-door-fill"></i> 
                      <span>Qs 01 Lotes 34/36, Torre 2<br>
                             Ed. LED Office, Sala 1811<br>
                             Águas Claras - Brasília-DF<br>
                              CEP: 71.950-770<span>
            </div>
              
              <div><i class="bi bi-whatsapp"></i> <span>71 99999-9999</span></div>
              <div><i class="bi bi-instagram"></i> <span>@innovationweb</span></div>
              <div><i class="bi bi-envelope-check"></i> <span>innovationweb@innovationweb.com</span></div>
             
              
              </div>

              <div class="container pt-5"><p>Todo os direitos reservados<p></div>
            </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>