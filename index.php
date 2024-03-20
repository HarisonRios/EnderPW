<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
          <link rel="icon" href="img/icon.png">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">
          <link href="assets/css/styles.css" rel="stylesheet">

          <title>Ender Industry</title>

     </head>



     
     <body>


     <?php include('assets/php/navbar.php'); ?>




          

          <header>
               <div class="wrapper astonish animated fadeInDown">
                    <h1><strong>ENDER</strong>Industry</h1>
                    
                         <a href="#" class="btn btn-outline-purple">Cadastrar-se</a>
               </div>
          </header>

          <main>
               <div class="content-wrapper" id="about">

                    <img class="img-absolute" src="assets/img/hello.png" alt="Ender">
                    <div class="grid">
                         <div class="grid-col-sm-12 grid-col-md-6 astonish" data-animation="fadeInLeft">
                              <h2 class="section-title">Sobre ENDER</h2>
                              <p> Somos uma empresa com o principal objetivo de expandir a nossa franquia, fundada em 2023 por Guilherme Pereira e Harison Rios com o principal objetivo de expandir a contrução de empresas.</p>
                              <p> Contamos com diversos dos nossos investidores e companheiros que nos apoiam e através de uma comunicação dada entre a nossa compania e outras empresas estabelecemos a sua empresa.</p>
                         
                         </div>
                    </div>
               </div> 

               <div id="reserve" class="content-wrapper-lg text-center astonish" data-animation="zoomIn">
                    <h2 class="section-title">EIndustry</h2>
                    <p>Baixe aqui o nosso aplicativo, um app que consiste em uma rede que conecta todos envolvidos em um projeto dentro de um servidor de comunicação com diversas ferramentas de administração de projetos acompanhada de uma metodologia para assim desenvolver o projeto.</p>
                    <a href="#" class="btn btn-outline-purple">Download</a>
               </div>

               <div class="content-wrapper" id="contact">
                    <img class="img-absolute" src="assets/img/fale.png" alt="Ender">


                    <form class="contact-form astonish" action="#" method="post" data-animation="fadeInRight">
                         <h2 class="section-title">Login</h2>
                         <div class="grid">
                              <div class="grid-col-sm-12 grid-col-md-6">
                                   <div class="form-group">
                                        <input type="text" name="firstName" required>
                                        <label for="firstName">Nome:</label>
                                   </div>
                              </div>
                              <div class="grid-col-sm-12 grid-col-md-6">
                                   <div class="form-group">
                                        <input type="text" name="lastName" required>
                                        <label for="lasttName">Sobrenome</label>
                                   </div>
                              </div>
                              <div class="grid-col-sm-12">
                                   <div class="form-group">
                                        <input type="text" name="email" required>
                                        <label for="email">Email: </label>
                                   </div>
                              </div>
                              <div class="grid-col-sm-12">
                                   <div class="form-group">
                                        <input type="password" name="senha" required>
                                        <label for="message">Telefone</label>
                                   </div>
                              </div>
                         </div>
                         <input class="btn btn-outline-teal" type="submit" value="Entrar">
                    </form>
               </div>

          
               
               <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117043.06517441467!2d-46.578829983593764!3d-23.547036499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce6427fe3f5b23%3A0x54b863d343c81f8f!2sEtec%20Itaquera!5e0!3m2!1spt-BR!2sbr!4v1678667626375!5m2!1spt-BR!2sbr" frameborder="0" style="border:0" allowfullscreen></iframe>
          </main>


          <footer>
               <div class="content-wrapper-sm display-flex-between">
 
                    <h5>Ender Industry - Ender Softwares - 2023 </h5>

            
                    <div class="social-links">
                         <ul>
                              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-snapchat-square" aria-hidden="true"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                         </ul>
                    </div>
               </div>
          </footer>


          <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
          <script src="assets/js/menu.js" charset="utf-8"></script>

          <script src="assets/js/astonish.js" charset="utf-8"></script>
          <script src="assets/js/nav.js" charset="utf-8"></script>
          <script src="assets/js/scroll.js" charset="utf-8"></script>
          
          <style>
               .astonish {
                    visibility: visible;
               }

               @media (min-width: 768px) {
                    .astonish {
                         visibility: hidden;
                    }
                    .animated {
                         visibility: visible;
                    }
               }
          </style>
     </body>
</html>
