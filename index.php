<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Restaurante - Insecta</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" type="text/css" href="css/styles.css?ts=<?=time()?>" />
    </head>
    <body>
        <!-- Navigation-->
        <a id="inicio" href="#inicio"></a>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-primary text-uppercase"  data-bs-toggle="dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sobre Nós
                            </button>
                            <div class="dropdown-menu text-uppercase" aria-labelledby="dropdownMenuButton"> 
                                 <a class="dropdown-item" href="#quemSomos">Quem somos</a>
                                 <a class="dropdown-item" href="#chefbio">O nosso chefe</a>
                             </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-primary text-uppercase"  data-bs-toggle="dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Menu
                            </button>
                            <div class="dropdown-menu text-uppercase" aria-labelledby="dropdownMenuButton"> 
                                 <a class="dropdown-item" href="#menu_fixo">Menu Fixo</a>
                                 <a class="dropdown-item" href="#especialidades">Especialidades</a>
                             </div>
                        </div>
                        <li class="nav-item"><a class="nav-link" href="#reservas">Reservas</a></li>
                    </ul>
                </div>
                    <a class="d-none d-lg-block d-md-none" href="#inicio"><img src="imagens/logotipo_dark.png" width="65px"></a>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item"><a class="nav-link" href="#avaliaçoes">Avaliações</a></li>
                                <div class="dropdown">
                                    <button class="btn btn-primary text-uppercase"  data-bs-toggle="dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Login
                                </button>
                                <div class="dropdown-menu text-uppercase" aria-labelledby="dropdownMenuButton"> 
                                    <a class="dropdown-item" href="#registo">Registo Cliente</a>
                                    <a class="dropdown-item" href="admin.html">Administrador</a>
                                </div>
                            </div>
                                <li class="nav-item"><a class="nav-link" href="#contactos">Contactos</a></li>
                            </ul>
                        </div>           
        </nav>

            <!-- Header  -->
                <section id="section1">
                    <div class="container-fluid px-0">
                        <div class="row">
                        <img class="img-fluid w-100" src="imagens/img_header.jpg" alt="img_header">  
                        </div>   
                </section>

            <!-- Section sobre nos-->
            <section id="quemSomos">
                <div class="container px-0 text-justify">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-2">
                           <div class="py-5"><img class="img-fluid rounded-circle mx-auto d-block" src="imagens/logotipo_light.png" width="30%" alt="..."></div>
                           <div class="p-5"> <img class="img-fluid mx-auto d-block" src="imagens/combo.png" width="500px" alt="..."></div>
                        </div>
    
                        <div class="col-lg-6 order-lg-1">
                            <div class="sobre_nos lgreen-box">
                                <h2 class="display-4">O Insecta...</h2>
                                <p> ...nasceu da paixão de João Wang pela cozinha e pela descoberta do mundo da entomofagia nas suas viagens pela Ásia. Os insetos fazem parte da dieta de cerca de 2 bilhões de pessoas, os nossos ancestrais já os comiam e muitas culturas ao redor do mundo ainda o fazem. Mas apenas recentemente a ingestão de insetos começou a ser notícia. 
    
                                    Os insetos são um superalimento, têm um alto teor de proteínas, fornecem nutrientes de alta qualidade e para além disso têm baixo teor de gordura.
                                    Na Insecta, não cozinhamos qualquer inseto, as nossas minhocas, grilos, besouros, etc. vêm da fazenda Micronutris em França, onde todos os insetos são alimentados com produtos orgânicos. E se os insetos são de alta qualidade, o mesmo acontece para todos os outros produtos utilizados nas nossas confeções.
                                    
                                    Ame o conceito, ou estando ainda reticente com o mesmo, não há como negar que a ideia de comer insetos é simplesmente elegante. A grande questão é: Conseguem os insetos tornar uma refeição agradável e deliciosa de lamber os dedos? Na Insecta, acreditamos que sim!
                                    
                                    Bem-vindo à primeira experiência gastronómica de insetos comestíveis em Portugal!
                                </p>
                        </div>
                    </div>
                </div><br><br><br><br>
            </div>
        </section>
        <!-- section bio chef-->
        <section id="chefbio">
            <div class="container-fluid text-justify" id="fundo1" >
                <div class="row align-items-center">
                    <div class="col-lg-6">
                      <div class="py-5">  <img class="mx-auto d-block" src="imagens/chef.jpg" width="300" alt="..." /><p id="chef">João Wang</p></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="dgreen-box">
                            <h2 class="display-4">BIO</h2>
                            <p>O chef executivo João Wang, nasceu em Portugal, mas tem raízes asiáticas. Iniciou a sua carreira aos 20 anos no restaurante com estrela Michelin “Alma”, de Henrique Sá Pessoa. Aos 25 anos, mudou-se para França para integrar a equipa do restaurante “Le Coquillage”, também ele com estrelas Michelin. Em 2017, venceu o chef cozinheiro do ano e posteriormente em 2020 foi vice-campeão do global chef challenge, campeonato do mundo da cozinha.
                                Nas suas viagens pelo continente asiático, descobriu os benefícios que os insetos podem trazer à nossa alimentação e ao nosso planeta, tendo aprofundado os seus conhecimentos nesta área. O chef João é apaixonado pela comida e é também apaixonado por insetos como alimento. De regresso a Portugal,  dedica-se a espalhar o amor pelos insetos comestíveis, nascendo assim o Insecta, o primeiro restaurante do género, em Portugal.
                            </p>
                        </div>
                    </div>
                </div>
                <br><br>
            </div>
        </section>
        <!-- section Menu fixo-->
        <section id="menu_fixo">
            <div class="container text-justify menu">
                <div class="row align-items-center ">
                    <div class="col-lg-6 order-lg-1">
                        <table class="table">
                            <thead>
                                <tr>
                                <th class="titulos">Almoço</th>
                                </tr>
                            </thead>
                            <tbody class="container-fluid ementa">
                                <?php

                                include("php/connect.php");

                                $sql = "SELECT * FROM menu_almoco";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {

                                while($row = $result->fetch_assoc()) {
                                        echo "<tr><td style='text-align:left'>".$row["ementa"]."</td><td>".$row["preço"] . "</td></tr>";
                                      }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6 order-lg-2">
                        <table class="table">
                            <thead>
                                <tr>
                                <th class="titulos text-center">Jantar</th>
                                </tr>
                            </thead>
                            <tbody class="container-fluid ementa">
                            <?php

                            include("php/connect.php");

                            $sql = "SELECT * FROM menu_jantar";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {

                            while($row = $result->fetch_assoc()) {
                                    echo "<tr><td style='text-align:left'>".$row["ementa"]."</td><td>".$row["preço"] . "</td></tr>";
                                }
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </section>
    <!-- section especialidades carrossel-->
    <section id="especialidades">
        <div class="container-fluid px-0">
            <div class="row" id="fundoslide1">
                <div class="col-lg-2 p-5 mx-auto"> </div>
                <div class="col-lg-6 p-5 mx-auto">      
                    <h1 class="text-center text-decoration-underline">Especialidades</h1>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner mx-auto">
                          <div class="carousel-item active">
                            <img class="mx-auto d-block w-100 imgcar" src="imagens/slide1.jpg" alt="Primeiro slide">
                            <p class="text-center text-uppercase p-2 fw-bold">Tiramissu de Bichos-da-seda<br><br></p> <!-- As quebras de linha servem para que os butões do slide não mudem de posição.-->
                          </div>
                          <div class="carousel-item">
                            <img class="mx-auto d-block w-100 imgcar" src="imagens/slide2.jpg" alt="Segundo slide">
                            <p class="text-center text-uppercase p-2 fw-bold">Risotto do Mar com Gafanhotos Crocantes<br><br></p>
                          </div>
                          <div class="carousel-item">
                            <img class="mx-auto d-block w-100 imgcar" src="imagens/slide3.jpg" alt="Terceiro slide">
                            <p class="text-center text-uppercase p-2 fw-bold">Nachos Com Bichos-da-seda e Molho de Iogurte e Salsa</p>
                          </div>
                          <div class="carousel-item">
                            <img class="mx-auto d-block w-100 imgcar" src="imagens/slide4.jpg" alt="Quarto slide">
                            <p class="text-center text-uppercase p-2 fw-bold">Vieiras com Alcachofra e Lagartas Crocantes<br><br></p>
                          </div>
                          <div class="carousel-item">
                            <img class="mx-auto d-block w-100 imgcar" src="imagens/slide5.jpg" alt="Quinto slide">
                            <p class="text-center text-uppercase p-2 fw-bold">Tortellini com Molho de Tomate Cremoso e Grilos Brancos</p>
                          </div>
                          <div class="carousel-item">
                            <img class="mx-auto d-block w-100 imgcar" src="imagens/slide6.jpg" alt="Sexto slide">
                            <p class="text-center text-uppercase p-2 fw-bold">Salada de Verduras Selvagens com Grilos e Gafanhotos Fritos</p>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
                <div class="col-lg-2 mx-auto d-none d-lg-block d-md-none"> <img id="slidecombo" src="imagens/slide_combo.png" alt="slide_combo"></div>
            </div>
        </div>
    </section>

        <!-- section reservas-->
        <section id="reservas">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <img class="img-fluid rounded-circle mx-auto d-block" src="imagens/logotipo_light.png" width=40% alt="..." />
                        <div id="politica"><a  href="PDF/PP.pdf" target="_blank">Política de Privacidade</a></div>
                        
                       
                    </div>
                    <div class="col-lg-6 order-lg-1 p-5" id="fundo2">
                        <div class="sobre_nos lgreen-box2">
                            <form id="reservas" action="php/create_reservas.php" method="POST">                               
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Email</label>
                                  <input type="email" class="form-control" placeholder="exemplo@gmail.com" name="email" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputpassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="" name="pass" aria-describedby="pass">
                                  </div>
                                <div class="mb-3">
                                  <label for="exampleInputnumber" class="form-label">Numero de Pessoas</label>
                                  <input type="number" class="form-control" name="pessoas" placeholder="1 - 20" min="1" max="20" size="2">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputnumber" class="form-label">Contactos</label>
                                    <input type="tel" name="contacto" placeholder="962819398" pattern="[0-9]{9}" size="9">
                                </div>
                                <p>Horario:</p>
                                  <input type="radio" id="almoco" name="horario" value="almoco">
                                  <label for="almoco">Almoço</label><br>
                                  <input type="radio" id="jantar" name="horario" value="jantar">
                                  <label for="jantar">Jantar</label><br>
                                  <input type="radio" id="takeaway" name="horario" value="takeaway">
                                  <label for="takeaway">Takeaway</label><br><br>
                                <div class="mb-3">
                                    <label for="exampleInputdata" class="form-label">Data</label>
                                    <input type="date"  name="data">
                                </div>
                                <button type="submit" class="btn btn-secondary">Confirmar</button>
                                <button type="reset" class="btn btn-secondary">Limpar</button>
                              </form>    
                        </div>
                    </div>
                </div>
            </section>
              <!-- section reviews carrossel-->
              <section id="avaliaçoes">
                <div class="slideshow-container">
                    <br><br>
                        <div class="mySlides fade">
                            <div class="numbertext"><br><br>1 / 6</div>
                            <img class="img-fluid rounded-circle mx-auto d-block" src="imagens/cliente1.jpg" style="width:300px">
                            <div class="text_av">Saori Sato <br> "Muito boa comida, um conceito inovador e espaço 5 estrelas"</div>
                        </div>
                        
                        <div class="mySlides fade">
                            <div class="numbertext"><br><br>2 / 6</div>
                            <img class="img-fluid rounded-circle mx-auto d-block" src="imagens/cliente2.jpg" style="width:300px">
                            <div class="text_av">Rita Abrantes <br> "Adorei o espaço, a comida era óptima e o chef super acessivel"</div>
                        </div>
                          
                        <div class="mySlides fade">
                            <div class="numbertext"><br><br>3 / 6</div>
                            <img  class="img-fluid rounded-circle mx-auto d-block" src="imagens/cliente3.jpg" style="width:300px">
                            <div class="text_av">João Mendes <br> "Os pratos tinham uma apresentação fantástica, nunca pensei que os insectos soubessem tão bem"</div>
                        </div>
                    
                        <div class="mySlides fade">
                            <div class="numbertext"><br><br>4 / 6</div>
                            <img class="img-fluid rounded-circle mx-auto d-block" src="imagens/cliente4.jpg" style="width:300px">
                            <div class="text_av">Maria Santos <br> "Comida óptima e deu umas fotografias fantásticas"</div>
                        </div>
                    
                        <div class="mySlides fade">
                            <div class="numbertext"><br><br>5 / 6</div>
                            <img class="img-fluid rounded-circle mx-auto d-block" src="imagens/cliente5.jpg" style="width:300px">
                            <div class="text_av">Luís Castanheira <br> "Adorei o conceito, irei voltar brevemente"</div>
                        </div>
                    
                        <div class="mySlides fade">
                            <div class="numbertext"><br><br>6 / 6</div>
                            <img class="img-fluid rounded-circle mx-auto d-block" src="imagens/cliente6.jpg" style="width:300px">
                            <div class="text_av">Óscar Martinez <br> "Os insectos estavam estaladiços e saborosos"</div>
                        </div>
                    
                    <a class="prev" onclick="plusSlidesav(-1)">&#10094;</a> <!-- &#... é o código da seta-->
                    <a class="next" onclick="plusSlidesav(1)">&#10095;</a>
                </div>    
                <br> 
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlideav(1)"></span> 
                    <span class="dot" onclick="currentSlideav(2)"></span> 
                    <span class="dot" onclick="currentSlideav(3)"></span> 
                    <span class="dot" onclick="currentSlideav(4)"></span> 
                    <span class="dot" onclick="currentSlideav(5)"></span> 
                    <span class="dot" onclick="currentSlideav(6)"></span> 
                </div>
                <br><br>
            </div>
            </section>
            <!-- section registo-->
            <section id="registo">
                <form class="mx-auto d-block" form action="php/create.php" target="_blank" method="POST">
                <div class="container p-5 text-justify">
                  <div class="row align-items-center lgreen-box2">
                        <h2>Registo Cliente</h2>
                        <div class="col-lg-6">
                             <div class="row">
                                 <div class="mb-3">
                                    <label for="nome" class="form-label">Nome</label><br>
                                    <input type="text" placeholder="João Miguel" class="form-bg" name="nome">
                                </div>
                             </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">Password</label><br>
                                    <input type="password" id="password" placeholder="Password" class="form-bg" name="password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="inputPasswordconfirm" class="form-label">Confirme a password</label><br>
                                    <input type="password" id="password_confirm" placeholder="Password" class="form-bg" name="password_confirm">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="row">
                          <div class="mb-3">
                              <label for="inputEmail" class="form-label">Email</label><br>
                              <input type="email" placeholder="exemplo@gmail.com" class="form-bg" name="email" aria-describedby="emailHelp">
                          </div>
                        </div>
                          <div class="row">
                          <div class="mb-3">
                                <label for="inputnumber" class="form-label">Contactos</label><br>
                                <input type="tel" id="phone" name="telemovel" placeholder="962819398" class="form-bg" pattern="[0-9]{9}" size="9">
                          </div>
                        </div>
                          <div class="row">
                          <div class="mb-3">
                            <label for="inputmorada" class="form-label ">Morada</label><br>
                            <input type="morada" id="morada" class="form-control" name="morada" class="form-bg" placeholder="rua">
                          </div>
                        </div>
                        </div>
                          <div>
                            <p>Os seus dados pessoais serão utilizados para melhorar a sua experiência no site e para os propósitos descritos na nossa politica de privacidade</p>
                            <input type="hidden" name="newsletter" value="Não" />
                            <input type="radio" id="newsletter" name="newsletter" value="Sim">
                            <label for="newsletter">Quero subscrever a newsletter</label><br>
                          </div><br><br>
                        <div class="col-lg-3 pt-3">
                            
                        <button type="submit" class="btn btn-secondary">Registar</button>
                        <button type="reset" class="btn btn-secondary">Limpar</button>   
                    </div>
                  </div>
                </div>
            </form>
              </section>

            <!-- section contactos-->
            <section id="contactos">
                <div class="container-fluid text-justify">
                    <div class="row align-items-center">
                        <div class="col-lg-5 p-5 text-center">
                            <h2>Onde Estamos</h2>
                            <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d12460.791769376852!2d-9.165809059911581!3d38.66731872763363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xd19351cd178b407%3A0x533f540fcd5ad6d9!2sBarrocas%2C%202805-169%20Almada!3m2!1d38.6673028!2d-9.1570543!5e0!3m2!1sen!2spt!4v1628674004734!5m2!1sen!2spt" width="300" height="300" style="border-radius: 20px;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-lg-3 p-5 text-start">
                            <div id="morada" >
                                <h2>Morada</h2><p>Rua da Bela Vista n7, 1950-135 Lisboa</p>
                                <h2>Email</h2><p>Insecta@gmail.com</p>
                                <h2>Contacto</h2><p>912340523</p>
                            </div>
                        </div>
                        <div id="logocontacto" class="col-lg-4 p-5 text-center">
                            <img src="imagens/logotipo_light.png" alt="logotipo_contactos">
                            <div class="row align-items-center p-2 fsmall">
                                <div class="col-lg-12">
                                <a href="PDF/PP.pdf" target="_blank">Política de Privacidade</a>&nbsp&nbsp <!-- &nbsp faz o espaço entre os lniks-->
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Script Carrosel-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
    </body>
</html>
