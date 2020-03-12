<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Encontre Rápido</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Alberto Couto" />
    <meta name="description" content="Contato" />
    <meta name="keywords" content="html5, tecnologia" />
      
      <!-- Font Awwsome / Icones -->
    <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
      integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous"
    />

      
      <!-- Fonts -->
    <link
      href="http://fonts.googleapis.com/css?family=Sintony:400,700"
      rel="stylesheet" type="text/css"/>
    <link
      href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700"
      rel="stylesheet" type="text/css"/>
      
      
    
    <!-- Icone da barra de endereço -->      
    <link rel="shortcurt icon" type="imagem/x-icon" href="img/menu/logo2.png" >  
          
      <!-- CSS -->
    <link rel="stylesheet" href="style/normalize.css" />
    <link rel="stylesheet" href="style/main.css" />
    <link rel="stylesheet" href="automain.css">
    <link rel="stylesheet" href="style/carrosel.css">  
    <link rel="stylesheet" href="style/menu.css"> 
    <link rel="stylesheet" href="style/conteudo.css"> 
    <link rel="stylesheet" href="style/rodape.css"> 
    <link rel="stylesheet" href="style/contato.css"> 
      <!-- CSS -->
      
      <!-- JavaScript Ticker -->
    <script src="automain.js" defer></script> 
      
  </head>
    
  <body class="no-js">
    <header class="header">
      <!-- Logo do Menu -->  
      <a href="index.html" class="logo-text">
        <img class="enr" src="img/menu/logoc.png" />
      </a>

      <button style="display: none;" class="header__btnMenu">
        <i class="fas fa-bars fa-2x"></i> <span class="sr-only">Menu</span>
      </button>
        
      <nav class="header__nav">
        <ul>
          <li><a href="index.html">Início</a></li>
          <li><a href="empresa.html">Agência</a></li>
          <li><a href="contato.php">Contato</a></li>
           
        </ul>
      </nav>
        
    </header>
  <section class="formu">
      <h1 class="logo">Converse com a gente</h1>
      <div class="contact-wrapper">
          <div class="contact-info">
              <h3>Fale agora</h3>
              <ul class="fale-agora">
                  <li><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5528999887760" target="_blank"><i class="fab fa-whatsapp"></i><span class="fala- span">Whatsapp</span></a></li>
                  
                  <li><a href="https://www.facebook.com/EncontreRapido/" target="_blank"><i class="fab fa-facebook"></i><span class="fala- span">@encontrerapido</span></a></li>
                                  
                  <li><a href="https://www.instagram.com/encontrerapido/" target="_blank"><i class="fab fa-instagram"></i><span class="fala-    span">@encontrerapido</span></a></li>
                                  
                  <li><a href="tel:+55028999192500"><i class="fas fa-mobile"></i><span class="fala-   span">28 99919-2500</span></a></li>

              </ul>
          </div>
          <div class="contact-form">
              <h3>Contato</h3>
              <form action="php/envia-contato.php" method="POST" target="_blank">
                  <p>
                      <label>Nome Completo</label>
                      <input type="text" name="fullname" required="required">
                  </p>
                  <p>
                      <label>Email</label>
                      <input type="email" name="email" required="required">
                  </p>
                  <p>
                      <label>Telefone</label>
                      <input type="tel" name="phone" required="required">
                  </p>
                  <p>
                      <label>Assunto</label>
                      <input type="text" name="affair" required="required">
                  </p>
                  <p class="block">
                      <label>Messagem</label> 
                      <textarea name="message" rows="3"></textarea>
                  </p>
                  <p class="block">
                      <button>
                          Enviar
                      </button>
                  </p>
              </form>
                            
          </div>
          
      </div>
    </section>   
        

    <div class="marquee">
        <ul class="marquee-content">
            <li><img src="img/ticker/parceiros%201.png"></li>
            <li><img src="img/ticker/parceiros%202.png"></li>
            <li><img src="img/ticker/parceiros%203.png"></li>
            <li><img src="img/ticker/parceiros%204.png"></li>
            <li><img src="img/ticker/parceiros%205.png"></li>
            <li><img src="img/ticker/parceiros%206.png"></li>
            <li><img src="img/ticker/parceiros%207.png"></li>  
            <li><img src="img/ticker/parceiros%208.png"></li>
            <li><img src="img/ticker/parceiros%209.png"></li>
        </ul>
      </div>


      <footer>
        <div class="footer-0">
            <div class="footer-1">
                <div class="ag">  
                <a href="empresa.html">Empresa</a>
                </div>
                <p>Agência de Publicidade Online</p>
                <p>Telefone: (28) 99919-2500</p>
                <p>FGR Portal Virtual de Propaganda Ltda

</p>
                <p>CNPJ: 21.441.680/0001-59</p>
            </div>
            
              <div class="middle">
                <div class="sc">  
                <a href="contato.php">Contato</a>
                </div>
                 <a class="btn" href="https://www.facebook.com/EncontreRapido/" target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a class="btn" href="https://www.instagram.com/encontrerapido/" target="_blank">
        <i class="fab fa-instagram"></i>
      </a>
      <a class="btn" href="tel:+55028999192500"><i class="fas fa-mobile"></i>
      </a>
      <a class="btn" href="https://api.whatsapp.com/send?1=pt_BR&phone=5528999887760" target="_blank">
        <i class="fab fa-whatsapp"></i>
      </a>
            </div>
        </div>
      </footer>
      
      
      
      
      
      <?php if($_GET["m"]=="1"){ ?>
      <script>alert("Enviado");</script>
      <? } elseif ($_GET["m"]=="0") { ?>
      <script>alert("Não Enviado");</script>
      <? } ?> 
      

    <script src="js/menu.js"></script>
    <script src="js/carousel.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>
