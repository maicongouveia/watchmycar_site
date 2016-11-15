<?php header('Content-Type: text/html; charset=iso-8859-1');?>
<!DOCTYPE html>
<html lang="pt-br">

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WatchMyCar</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- My Style -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<link rel="shortcut icon" href="icon.ico" >

</head>

<body>
<!-- NAV -->
<nav id="navbar_mob" class="navbar navbar-default visible-xs visible-sm"  role='navigation' style='margin-bottom: -6px;'>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-side" id="navbar-collapse">
      <ul class="nav navbar-nav visible-xs visible-sm text-center"  role="navigation">
        <li><a href="index.php">Home</a></li>
        <li><a href="quem_somos.php">Quem Somos</a></li>
      	<li><a href="noticias.php">Notícias</a></li>
      	<li><a href="contatos.php">Contato</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  
</nav>

<!-- FINAL NAV -->
	<div class="col-md-12" id="pagina">
	    <div class="col-md-8 col-md-offset-2" id="conteudo" >
			<?php include 'topo.php';?>
			
			<div id="noticias_mob" class="col-md-12 hidden-md hidden-lg">
    			<div class="col-md-12" id="detalhe_cor_mob">ÚLTIMAS <span id="titulos_mob">ATUALIZAÇÕES</span></div>
    			
    			<div id="alinha_noti_mob" class="col-md-12">
    				<!-- Começo da noticia -->
    				<div id="titulo_noti" class="col-md-12">
    					Reportagem para a Exame.com
    				</div>
    				<div id="noti_div" class="col-md-12"></div>
	    			<div id="texto_mob" class="col-md-8">
	    				O WatchMyCar participou de uma reportagem com a Exame sobre inovações tecnológicas.
	    				<br />
	    				<br />
	    				<a href="http://exame.abril.com.br/videos/arena-tech/alarme-inteligente-manda-foto-de-ladrao-de-carro-para-app/" target="_blank">
	    				Confira a reportagem da Exame.com
	    				</a>
	    				<br />
	    				<br />
	    				
	    			</div>
	    			<div id="imagem" class="col-md-4">
	    				<img id="align_noti_img_mob" alt="Imagem" src="img/img_noticias/exame.jpg">
	    				<br />
	    				<br />
	    				<br />
	    				
	    			</div>
	    			<div id="noti_div_fim" class="col-md-12"></div>
	    			<!-- Fim da noticia -->
	    			
	    			<!-- Começo da noticia -->
    				<div id="titulo_noti" class="col-md-12">
    					Reportagem para o AutoEsporte
    				</div>
    				<div id="noti_div" class="col-md-12"></div>
	    			<div id="texto_mob" class="col-md-8">
	    				O WatchMyCar foi apresentado em uma reportagem do AutoEsporte sobre os projetos
	    				da Campus Party.
	    				<br />
	    				<br />
	    				<a href="http://globoplay.globo.com/v/4776724/" target="_blank">
	    				Confira a reportagem do AutoEsporte
	    				</a>
	    				<br />
	    				<br />
	    				
	    			</div>
	    			<div id="imagem" class="col-md-4">
	    				<img id="align_noti_img_mob" alt="Imagem" src="img/img_noticias/autoesporte.jpg">
	    				<br />
	    				<br />
	    				<br />
	    				
	    			</div>
	    			<div id="noti_div_fim" class="col-md-12"></div>
	    			<!-- Fim da noticia -->
	    			
	    			<!-- Começo da noticia -->
    				<div id="titulo_noti" class="col-md-12">
    					Campus Future
    				</div>
    				<div id="noti_div" class="col-md-12"></div>
	    			<div id="texto_mob" class="col-md-8">
	    				Projeto apresentado na Campus Future, foi muito produtivo e com um grande 
	    				retorno, com várias idéias a serem acrescentadas ao projeto e também para 
	    				chegarmos mais perto de nossos objetivos. Obrigado a todos que foram nos ver
	    				e que colaboraram para que essa apresentação ocorresse.
	    				
	    			</div>
	    			<div id="imagem" class="col-md-4">
	    				<img id="align_noti_img_mob" alt="Imagem" src="img/img_noticias/campusfuture.jpg">
	    				<br />
	    				<br />
	    				<br />
	    				
	    			</div>
	    			<div id="noti_div_fim" class="col-md-12"></div>
	    			<!-- Fim da noticia -->
	    			
	    			<!-- Começo da noticia -->
    				<div id="titulo_noti" class="col-md-12">
    					Estamos na Campus Party
    				</div>
    				<div id="noti_div" class="col-md-12"></div>
	    			<div id="texto_mob" class="col-md-8">
	    				Estamos na Campus Party Brasil 9, trouxemos nosso projeto para apresentar na Campus 
	    				Future. Atualmente o projeto está na fase de prototipagem, com um ótimo desempenho 
	    				em ambiente real e com todas as funcionalidades em pleno funcionamento. Em breve 
	    				mais novidades, continue nos acompanhando. 
	    				
	    			</div>
	    			<div id="imagem" class="col-md-4">
	    				<img id="align_noti_img_mob" alt="Imagem" src="img/img_noticias/campus.jpg">
	    				<br />
	    				<br />
	    				<br />
	    				
	    			</div>
	    			<div id="noti_div_fim" class="col-md-12"></div>
	    			<!-- Fim da noticia -->
    			</div>
    		</div>
    		<div id="noticias" class="col-md-12 visible-md visible-lg">
    			<div id="alinha_noti" class="col-md-12">
    				<!-- Começo da noticia -->
    				<div id="titulo_noti" class="col-md-12">
    					Reportagem para a Exame.com
    				</div>
    				<div id="noti_div" class="col-md-12"></div>
	    			<div id="texto" class="col-md-8">
	    				O WatchMyCar participou de uma reportagem com a Exame sobre inovações tecnológicas.
	    				<br />
	    				<br />
	    				<a href="http://exame.abril.com.br/videos/arena-tech/alarme-inteligente-manda-foto-de-ladrao-de-carro-para-app/" target="_blank">
	    				Confira a reportagem da Exame.com
	    				</a>
	    				<br />
	    				<br />
	    			</div>
	    			<div id="imagem" class="col-md-4">
	    				<img id="align_noti_img" alt="Imagem" src="img/img_noticias/exame.jpg">
	    			</div>
	    			<div id="noti_div_fim" class="col-md-12"></div>
	    			<!-- Fim da noticia -->
	    			
	    			<!-- Começo da noticia -->
    				<div id="titulo_noti" class="col-md-12">
    					Reportagem para o AutoEsporte
    				</div>
    				<div id="noti_div" class="col-md-12"></div>
	    			<div id="texto" class="col-md-8">
	    				O WatchMyCar foi mostrado em uma reportagem do AutoEsporte sobre os projetos
	    				da Campus Party.
	    				<br />
	    				<br />
	    				<a href="http://globoplay.globo.com/v/4776724/" target="_blank">
	    				Confira a reportagem do AutoEsporte
	    				</a>
	    				<br />
	    				<br />
	    			</div>
	    			<div id="imagem" class="col-md-4">
	    				<img id="align_noti_img" alt="Imagem" src="img/img_noticias/autoesporte.jpg">
	    			</div>
	    			<div id="noti_div_fim" class="col-md-12"></div>
	    			<!-- Fim da noticia -->
	    			
	    			<!-- Começo da noticia -->
    				<div id="titulo_noti" class="col-md-12">
    					Campus Future
    				</div>
    				<div id="noti_div" class="col-md-12"></div>
	    			<div id="texto" class="col-md-8">
	    				Projeto apresentado na Campus Future, foi muito produtivo e com um grande 
	    				retorno, com várias idéias a serem acrescentadas ao projeto e também para 
	    				chegarmos mais perto de nossos objetivos. Obrigado a todos que foram nos ver
	    				e que colaboraram para que essa apresentação ocorresse. 
	    				<br />
	    				<br />
	    			</div>
	    			<div id="imagem" class="col-md-4">
	    				<img id="align_noti_img" alt="Imagem" src="img/img_noticias/campusfuture.jpg">
	    			</div>
	    			<div id="noti_div_fim" class="col-md-12"></div>
	    			<!-- Fim da noticia -->
	    			
	    			<!-- Começo da noticia -->
    				<div id="titulo_noti" class="col-md-12">
    					Estamos na Campus Party
    				</div>
    				<div id="noti_div" class="col-md-12"></div>
	    			<div id="texto" class="col-md-8">
	    				Estamos na Campus Party Brasil 9, trouxemos nosso projeto para apresentar na Campus 
	    				Future. Atualmente o projeto está na fase de prototipagem, com um ótimo desempenho 
	    				em ambiente real e com todas as funcionalidades em pleno funcionamento. Em breve 
	    				mais novidades, continue nos acompanhando. 
	    				<br />
	    				<br />
	    			</div>
	    			<div id="imagem" class="col-md-4">
	    				<img id="align_noti_img" alt="Imagem" src="img/img_noticias/campus.jpg">
	    			</div>
	    			<div id="noti_div_fim" class="col-md-12"></div>
	    			<!-- Fim da noticia -->
    			</div>
    		</div>
    		
	    </div>
	    
    </div>
    <?php include 'rodape.php';?>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
    
</body>

</html>