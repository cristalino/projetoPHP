<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  
   
    <?php 
        session_start();//Inicia uma nova sessão ou resume uma sessão existente

        if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();    //remove todas as variáveis de sessão
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = '../index.html';
                </script>";

        }
        $logado = $_SESSION['email'];
        
        
    ?>
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PAPNE</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">PAPNE</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Projetos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Sobre nós</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Deixe seu comentário</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
   <div id="carouselSite" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		   <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
		   <li data-target="#carouselSite" data-slide-to="1" ></li>
		   <li data-target="#carouselSite" data-slide-to="2" ></li>
		   <li data-target="#carouselSite" data-slide-to="3" ></li>
		   <li data-target="#carouselSite" data-slide-to="4" ></li>
		   <li data-target="#carouselSite" data-slide-to="5" ></li>
		</ol>
		<div class="carousel-inner">
		   <div class="carousel-item active">
		        <img src="img/portfolio/01-full.jpg" class="img-fluid d-block">
	</div>
	      <div class="carousel-item">
		        <img src="img/portfolio/02-full.jpg" class="img-fluid d-block">
	</div>
	      <div class="carousel-item">
		        <img src="img/portfolio/03-full.jpg" class="img-fluid d-block">
	</div>
	      <div class="carousel-item">
		        <img src="img/portfolio/04-full.jpg" class="img-fluid d-block">
	</div>
	      <div class="carousel-item">
		        <img src="img/portfolio/05-full.jpg" class="img-fluid d-block">
	</div>
	      <div class="carousel-item">
		        <img src="img/portfolio/06-full.jpg" class="img-fluid d-block">
	</div>
	<a class ="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
	    <spam class="carousel-control-prev-icon"></spam>
		<spam class="sr-only">Anterior</spam>
	</a>	
	<a class ="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
	    <spam class="carousel-control-next-icon"></spam>
		<spam class="sr-only">Avançar</spam>
	</a>
	</div>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Seja bem vindo!</div>
        <div class="intro-heading text-uppercase">O site onde quem precisa encontra ajuda! </div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Saiba Mais</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Projetos</h2>
          <h3 class="section-subheading text-muted">Conheça os nossos principais projetos!</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Para o que você precisar!</h4>
          <p class="text-muted">O PAPNE prepara diversas opções de pesquisas, onde se é selecionado equipamentos de alta qualidade com o objetivo de melhor solucionar os seus problemas. Os clientes têm também como opção o auxilio de pesquisa sobre o que desejam encontrar!</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Agora na Web</h4>
          <p class="text-muted">Através desse site , defina o melhor para solucionar as suas necessidades!</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Ampla Segurança </h4>
          <p class="text-muted">Investimos mais para que você , nosso cliente , se sinta confortável e seguro com as suas compras web!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->

  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Galeria</h2>
          <h3 class="section-subheading text-muted">Aqui, a modernidade e qualidade se misturam.</h3>
        </div>
   
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Origem do Projeto</h4>
            <p class="text-muted">Veja como tudo começou...</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>O que significa PAPNE ? </h4>
            <p class="text-muted">Conheça o significado da sigla e muito mais...</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Projeto dos Alunos do Colégio La Salle Sobradinho</h4>
            <p class="text-muted">Alunos desenvolvem projeto a fim de auxiliar invisuais em seu cotidiano</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>8 projetos do SENAI que promovem a acessibilidade e a inclusão de pessoas com deficiência</h4>
            <p class="text-muted">A instituição, reconhecida por promover a inclusão de pessoas com deficiência na educação profissional, também usa desafios da realidade social para formar cidadãos melhor preparados para o mundo do trabalho</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Programas de Estágio para pessoas com deficiência.</h4>
            <p class="text-muted">Vagas de estágios destinadas para portadores de necessidades especiais surgem com maior frequência no mercado de trabalho.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Conheça Ricardinho, o melhor jogador do mundo no futebol de cegos</h4>
            <p class="text-muted">Jogador gaúcho foi destaque na quarta conquista brasileira no Mundial da modalidade</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Sobre Nós</h2>
          <h3 class="section-subheading text-muted">Servimos bem para servirmos sempre</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Março 2020</h4>
                  <h4 class="subheading">O começo de tudo!</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">No inicio do ano de 2020, começamos a nossa história sem muito glamour, mas com muita dedicação. Com o passar do tempo, sentimos a necessidade de promover mudanças.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Abril 2020</h4>
                  <h4 class="subheading">Evolução e crescimento</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Anunciamos a nossa nova mascote, a Dorinha, da Turma da Mônica, que é uma personagem ícone, que representa todas as pessoas portadoras de necessidades especiais, e que mesmo com as suas diferenças, continua sendo querida e amada por todos.</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Maio 2020</h4>
                  <h4 class="subheading">Novos Investidores</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Investimos ainda mais na excelência no atendimento e na qualidade dos nossos projetos divulgados e, ainda, agregamos a eles um ambiente muito mais sofisticado, culminando na reformulação da marca.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Junho 2020</h4>
                  <h4 class="subheading">Nosso Atendimento</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Preocupados com a pandemia do Corona Vírus, o cuidado com nossos clientes têm se tornado cada vez mais prioridade. Desta forma, temos promovido campanhas de conscientização e alertado a todos sobre cuidados que devem ser tomados, por meio de nossas redes sociais.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Cuide-se!Você faz parte
                  <br>Da nossa história!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Fale conosco</h2>
          <h3 class="section-subheading text-muted">Deixe sua crítica ou sugestão.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Digite o seu nome aqui" required="required" data-validation-required-message="Digite o seu nome.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Digite o seu email aqui" required="required" data-validation-required-message="Digite o seu endereço de email.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Digite o seu número de telefone aqui" required="required" data-validation-required-message="Digite o seu número de telefone aqui.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Digite aqui a sua mensagem" required="required" data-validation-required-message="Digite aqui a sua mensagem."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar Mensagem</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Lucas Cristalino 2020</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://twitter.com/">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://pt-br.facebook.com/">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://br.linkedin.com/">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Política de Privacidade</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Termos de Uso</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Origem do Projeto</h2>
                <p class="item-intro text-muted">Veja como tudo começou...</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                <p>Este projeto consiste no auxilio e na resolução de problemas relacionados a dificuldade de locomoção de portadores de necessidades especiais. </p>

                <p>No estudo, foram utilizadas inúmeras situações onde essas pessoas precisaram do suporte público e não foram atendidas. Pôde ser observado que projetos poderiam ter sido criados a fim de que se solucionasse tais problemas , que seriam classificados como simples , relacionados a mazelas presenciadas pela população brasileira atualmente.</p>

                <p> Com a criação do Programa de Auxílio à Portadores de Necessidades Especiais (PAPNE) , projetos simples poderão receber a devida atenção e , desta forma , ajudar pessoas que se apresentarem em situações de dificuldade e não puderem custear pelo auxílio. </p>
                <ul class="list-inline">
                  <li>Data:13/04/2020</li>
                  <li>Escritor: Lucas Ferreira da Silva Cristalino </li>
                  <li>Categoria: Curiosidades</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Fechar Projeto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">O que significa PAPNE? </h2>
                <p class="item-intro text-muted">Conheça o significado da sigla e muito mais...</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                <p>O PAPNE, Programa de Auxílio à Portadores de Necessidades Especiais, é um website criado para divulgar pequenos projetos que possam auxiliar pessoas portadoras de necessidades especiais com a exibição dos mesmos através da descrição do site e através da aba de procura.</p> 
             
                <p>Atualmente, a tecnologia vem se mostrando indispensável para a rotina das pessoas em todos os sentidos. É quase impossível pensar em qualidade de vida, por exemplo, sem levar em consideração a grande contribuição da tecnologia na saúde.</p> 

                <p>Todas as áreas têm recebido suporte tecnológico, o que permite maior eficácia nos tratamentos e, principalmente, diagnósticos mais rápidos e efetivos (Optivision Brasil).</p>
      
                <ul class="list-inline">
                  <li>Data: 25/3/2020</li>
                  <li>Escritor: Lucas Ferreira da Silva Cristalino</li>
                  <li>Categoria: Curiosidades </li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Fechar Projeto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Projeto dos Alunos do Colégio La Salle Sobradinho </h2>
                <p class="item-intro text-muted">Alunos desenvolvem projeto a fim de auxiliar invisuais em seu cotidiano</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-thumbnail.jpg" alt="">
                <p>O PRAILE, Programa de Acessibilidade do Invisual na Locomoção Especializada, busca fazer um jogo de palavras quando tem o nome citado, buscando ser comparada com uma peça em Braile</p>

                <p>O principal objetivo do projeto é auxiliar o invisual na sua locomoção com maior independência.</p>

                <p>O equipamento começa a ser executado quando recebe emissões de ondas sonoras, que serão captadas. Desta forma, o equipamento emitirá um sinal de alerta ao usuário, assim que o mesmo estiver prestes a esbarrar em algum obstáculo, e assim evitará acidentes futuros.</p>

                <p>Para mais informações, acesse o link e assista a apresentação do projeto:</p>

                <p>https://youtu.be/6FAm2oQPZv8</p>
                <ul class="list-inline">
                  <li>Data:05/10/2019</li>
                  <li>Escritor: Lucas Ferreira da Silva Cristalino </li>
                  <li>Categoria : Inovações</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Fechar Projeto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">8 projetos do SENAI que promovem a acessibilidade e a inclusão de pessoas com deficiência</h2>
                <p class="item-intro text-muted">A instituição, reconhecida por promover a inclusão de pessoas com deficiência na educação profissional, também usa desafios da realidade social para formar cidadãos melhor preparados para o mundo do trabalho</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                <p>O Serviço Nacional de Aprendizagem Industrial (SENAI) foi responsável por 57% das matrículas de pessoas com deficiência na educação profissional em 2016, segundo dados do Instituto Nacional de Estudos e Pesquisas Educacionais Anísio Teixeira (Inep). No ano passado, foram realizadas quase 22 mil matrículas de estudantes com deficiência na instituição. Essa competência do SENAI foi construída ao longo de dez anos com o Programa SENAI de Ações Inclusivas (PSAI), que já beneficiou mais de 180 mil pessoas com deficiência. Para promover a inclusão, as unidades espalhadas por todo o Brasil contam com tecnologias assistivas, como aplicativo de realidade aumentada, que permite que alunos utilizem a câmera do celular ou do tablet para reconhecer imagens em 3D.</p>

                <p>Além das conquistas dentro do sistema educacional, o SENAI também desenvolve projetos de acessibilidade e tecnologias assistivas para auxiliar pessoas com deficiência a terem maior autonomia e melhor qualidade de vida. Essas iniciativas são desenvolvidas por professores e estudantes dentro de sala de aula. “O processo educacional promovido pelo SENAI, além de  estimular a busca por soluções para os desafios da indústria, também busca desenvolver valores como solidariedade e respeito às diferenças”, destaca o gerente-executivo de Educação Profissional e Tecnológica do SENAI, Felipe Morgado. Confira alguns desses projetos:</p>

<p>Prótese de mão para devolver movimentos a crianças</p>
<p>Uma mão mecânica feita em impressora 3D por cinco alunos do curso técnico em eletromecânica do SENAI Sudoeste, em Vitória da Conquista (BA), poderá dar mais qualidade de vida a crianças que perderam a maior parte do membro em função de acidentes ou malformações. Bem mais barato que uma prótese convencional, o equipamento, que custou R$ 45 para ser produzido, levou nove horas para ficar pronto e pode ser uma alternativa às próteses disponíveis no mercado, que custam entre R$ 4 mil e R$ 10 mil. De manutenção fácil e rápida, a mão mecânica foi produzida com filamentos ABS (polietileno), elástico, nylon e velcro. Com a mão mecânica pronta, o SENAI Sudoeste busca, agora, uma criança com o perfil adequado para fazer uma doação.</p>

<p>Adaptação de residência de pessoa com Tetraplegia</p>
<p>Um sistema de automação residencial por comando de voz, desenvolvido por alunos dos cursos técnicos de eletromecânica, eletroeletrônica e eletrotécnica do SENAI Sul, em Ilhéus (BA), está fazendo a diferença no cotidiano do psicólogo Jorge Lindotti, tetraplégico há cerca de 30 anos. Com ajuda da tecnologia, ele acende e apaga a luz, liga, desliga e controla o volume da TV, e faz o aparelho de ar condicionado funcionar num dos quartos com a voz. A inovação, que utiliza micro controladores e funciona por meio de um software de assistência virtual por comando de voz, deve ser expandida a outras áreas do imóvel.</p>

<p>Qualificação profissional de pessoas com deficiência</p>
<p>O Projeto Construir, desenvolvido pelo SENAI em Alagoas, oferece qualificação profissional e inclusão de pessoas com deficiência e reabilitandos do Instituto Nacional do Seguro Social (INSS) no mercado de trabalho e, às empresas da construção civil, a adequação à legislação de aprendizagem industrial. Atualmente, são atendidos 70 aprendizes de 20 construtoras alagoanas.</p>

<p>Profissionais dos setores de Recursos Humanos das empresas receberam ainda o curso de aperfeiçoamento profissional Gestão da Diversidade no Mundo do Trabalho, com o objetivo de aprimorar os conhecimentos técnicos dos funcionários para receber e acompanhar pessoas com deficiências no ambiente de trabalho. A iniciativa é desenvolvida com a Associação das Empresas do Mercado Imobiliário de Alagoas  e o Sindicato da Indústria e da Construção Civil, com o apoio da Superintendência Regional do Trabalho em Alagoas.</p>

<p>Garra Mecânica</p>
<p>Quatro estudantes da Educação Básica Articulada com Educação Profissional do SENAI e do Serviço Social da Indústria (SESI) em Duque de Caxias (RJ) realizaram o sonho de João Lucas Tayrone, de 8 anos, que sonhava em tocar violão, mas achava que nunca seria possível já que nasceu sem o antebraço. Allan, Davi, Arthur e Guilherme criaram a Garra Mecânica, uma prótese que pode ser usada com paleta, para que ele toque o violão, ou com a garra, para que ele pegue objetos. João também não vai precisar de uma nova prótese quando crescer porque ela é ajustável.</p>

<p>Máquina de costura adaptada</p>

<p>Os alunos do SENAI Nova Friburgo (RJ) criaram uma máquina de costura adaptada para pessoas com deficiência. A tecnologia conta com dispositivo eletromecânico que pode ser instalado em equipamentos que tenham o motor elétrico convencional com embreagem mecânica ou Direct Drive, que é um tipo de motor com acionamento direto. O dispositivo é um pequeno controle analógico, similar aos utilizados em joysticks (controles) para jogos eletrônicos, ligado a uma placa receptora de sinais que converterá o movimento feito pelo operador em micromovimentos a serem realizados por um motor de passo, sendo este acoplado ao motor da máquina de costura.</p>

<p>Suporte telescópico, Mesa adaptável e Aplicativo para facilitar comunicação</p>

<p>Alunos do SENAI Campos (RJ) criaram três projetos de inclusão de pessoas com deficiência. Um deles é o suporte telescópico para trocar lâmpadas, que permite que um cadeirante, por exemplo, faça a substituição sozinho. Outro grupo confeccionou uma mesa adaptável à cadeira de rodas para atividades cotidianas que necessitem de um apoio, como por exemplo escrever, comer, entre outras. O terceiro projeto foi a criação de um aplicativo para possibilitar a comunicação entre surdos e ouvintes nos mais diversos ambientes de trabalho, facilitando a transmissão de mensagens em ambiente corporativo.</p>

                <ul class="list-inline">
                  <li>Data: 19/09/2019</li>
                  <li>Autor: Maria José Rodrigues, com informações da FIEA, FIEB, FIRJAN e FIBRA.Da Agência CNI de Notícias</li>
                  <li>Categoria : Notícias</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Fechar Projeto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Programas de Estágio para pessoas com deficiência.</h2>
                <p class="item-intro text-muted">Vagas de estágios destinadas para portadores de necessidades especiais surgem com maior frequência no mercado de trabalho.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-thumbnail.jpg" alt="">
                <p>Se você é portador de necessidades especiais ou tem alguém com esse característica na família, saiba que existem programas de estágio para portadores de necessidades especiais. A Lei de Cotas (nº 8.213/91) é o principal instrumento para inclusão das pessoas com deficiência no mercado de trabalho. Já que determina que empresas com cem ou mais funcionários destinem de 2% a 5% dos cargos a esse segmento.
                O Centro de Integração Empresa-Escola (CIEE) dispõe do Programa CIEE para Pessoas com Deficiência. O CIEE promove a contratação de estudantes com deficiência intelectual, física, auditiva e visual para estágio ou emprego efetivo em empresas parceiras. Esse serviço foi criado em 1999.</p>
                
                <p>Para a pessoa portadora de deficiência é uma oportunidade de mostrar competência para desenvolver atividades como qualquer outro profissional dentro da empresa. Isso acontece, desde que sejam respeitadas suas limitações e lhe sejam oferecidas condições de acessibilidade ou recursos para esse fim.</p>

                <p>Para a empresa, é mais do que uma oportunidade de cumprir uma obrigação legal. Constitui também um estratégico exercício de responsabilidade social, pois muitos profissionais compensam deficiências como uma alta aptidão para a execução de determinadas tarefas, desde que adequadamente capacitados.</p>
              
                <p>Jovens e empresas interessados em participar do Programa CIEE para Pessoas com Deficiência devem entrar em contato:</p>

                <p>Pelo telefone (11) 3040-4515 ou 4516,
                Pelo e-mail programapcd@ciee.org.br
                Ou procurar a unidade ou posto de atendimento do CIEE mais próximo.</p>
                
                
                <ul class="list-inline">
                  <li>Date: 10 de Outubro de 2019</li>
                  <li>Blog: Humber Corretora de Seguros</li>
                  <li>Categoria: Mercado de Trabalho</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Fechar Projeto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Conheça Ricardinho, o melhor jogador do mundo no futebol de cegos</h2>
                <p class="item-intro text-muted">Jogador gaúcho foi destaque na quarta conquista brasileira no Mundial da modalidade</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>Aos oito anos de idade, após dois lutando contra um problema na visão, Ricardo Steinmetz Alves ficou cego. Na época, acreditava que era o fim do sonho de ser jogador. Hoje, aos 25, o melhor do mundo do futebol para cegos, recém sagrado campeão mundial pela segunda vez na carreira, utiliza-se da memória visual da infância para fazer os movimentos que o transformam em craque.</p>

<p>- Fora do esporte eu lembro de muita coisa: cores, formato das coisas...Para o futebol, acho que isso me ajudou muito, porque as pessoas sempre me dizem: "parece que tu tá enxergando.." - afirma Ricardinho, atleta da Associação Gaúcha de Futsal para Cegos (Agafuc) e da seleção brasileira, em entrevista a ZH. Ele completa:</p>

<p>- Quando eu comecei a treinar, tinha aquilo bem vivo na minha memória. Mesmo sem enxergar, eu aplicava o mesmo movimento. O jeito de chutar a bola, dar um passe, um drible. Aquilo ficou em mim. Tenho certeza de que todo o atleta cego que já enxergou tem muita vantagem sobre os outros.</p>


<p>Para que Ricardinho chegasse ao patamar de hoje, seu pai teve participação decisiva. Por conta da deficiência do filho, trouxe toda a família de Osório para Porto Alegre. Queria inscrevê-lo no Instituto Santa Luzia, referência no ensino em braile.</p>

<p>Foi lá que o craque reencontrou o futebol. Nas escolinhas do Santa Luzia, logo ficou evidente que Ricardinho estava acima da média. Aos 12, já atuava contra meninos de 15, 16, 17 anos. Com 15, foi convocado pela primeira vez para a seleção brasileira. Um ano depois, em 2006, foi eleito revelação e melhor jogador do Mundial, vencido pela Argentina.</p>

<p>Daí em diante, a carreira decolou. Em 2010, foi campeão mundial pela primeira vez. A essa altura, sua rotina era totalmente dedicada ao futebol. Atualmente, treina em dois turnos, com forte ênfase na preparação física e no aprimoramento técnico:</p>

<p>- Eu me dedico só para o futebol. O negócio está totalmente profissionalizado, com preparação física muito forte, o pessoal está priorizando muito isso. Todo o acompanhamento é bem profissional.</p>

<p>A dedicação de Ricardinho e seus companheiros resultou em mais uma conquista, o Mundial encerrado nesta segunda-feira, em Tóquio, no Japão, com direito a vitória sobre a rival Argentina na final.</p>

<p>- Foi um jogo muito duro. Tem muita rivalidade, sem dúvida. Não teve deslealdade, mas foi muito pegado nas divididas. E aquela catimba do lado deles. Eles procuram sempre um fator adicional, gostam de alguma coisa além do "jogo jogado" - relembra.</p>

<p>Um gol de Jefinho na prorrogação foi suficiente para despachar os hermanos e assegurar a quarta conquista brasileira na competição. Tudo com a participação decisiva de Ricardinho, algo que ele não poderia imaginar quando ficou cego.</p>

<p>- Eu tinha esse sonho de ser jogador quando tinha cinco, seis anos. Na época, eram duas coisas difíceis para mim: perder a visão e pensar que eu não poderia mais jogar futebol. Aconteceu tudo muito rápido na minha vida - surpreende-se.</p>

                <ul class="list-inline">
                  <li>Date:27/11/2019</li>
                  <li>Fonte: Gaúcha Zh</li>
                  <li>Categoria: Conquistas</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Fechar Projeto</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
