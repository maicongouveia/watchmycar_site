<?php header('Content-Type: text/html; charset=iso-8859-1');?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
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
			<div id="bem_vindo_mob" class="col-md-12 hidden-md hidden-lg">
				<div class="col-md-12" id="titulos_mob">SEJA <span id="detalhe_cor_mob">BEM VINDO!</span></div>
    			<div id="texto_mob" class="col-md-8">
    				WatchMyCar tem como objetivo, conectar o veículo ao seu proprietário de maneira 
    				rápida e simples. Graças a tecnologia presente no mercado é possível fazer tudo 
    				isso através do seu smartphone. Podendo obter localização, rotas e até mesmo uma 
    				foto do atual condutor do veículo, tudo isso de forma simples e sem complicações. 
    				Tudo através do smartphone.
    			</div>
    			<div id="mascote" class="col-md-4">
    				<img alt="Mascote" src="img/mascote.png">
    			</div>
    		</div>
    		<div id="bem_vindo" class="col-md-12 visible-md visible-lg">
    			<div id="texto" class="col-md-8">
    				WatchMyCar tem como objetivo, conectar o veículo ao seu proprietário de maneira 
    				rápida e simples. Graças a tecnologia presente no mercado é possível fazer tudo 
    				isso através do seu smartphone. Podendo obter localização, rotas e até mesmo uma 
    				foto do atual condutor do veículo, tudo isso de forma simples e sem complicações. 
    				Tudo através do smartphone.
                </div>
    			<div id="mascote" class="col-md-4">
    				<img alt="Mascote" src="img/mascote.png">
    			</div>
    		</div>
    		<div id="ultimas_atuali_mob" class="col-md-12 hidden-md hidden-lg">
    			<div class="col-md-12" id="detalhe_cor_mob">ÚLTIMAS <span id="titulos_mob">ATUALIZAÇÕES</span></div>
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
    				<img id="align_img_mob" alt="Imagem" src="img/img_noticias/exame.jpg">
    				<br />
    				<br />
    				<br />
    				<a href="noticias.php"><img alt="Veja mais" src="img/veja_mais.png"></a>
    			</div>
    		</div>
    		<div id="ultimas_atuali" class="col-md-12 visible-md visible-lg">
    			<div id="texto" class="col-md-8">
    				O WatchMyCar participou de uma reportagem com a Exame sobre inovações tecnológicas.
    				<br />
    				<br />
    				<a href="http://exame.abril.com.br/videos/arena-tech/alarme-inteligente-manda-foto-de-ladrao-de-carro-para-app/" target="_blank">
    				Confira a reportagem da Exame.com
    				</a>
    				<br />
    				<br />
    				<a href="noticias.php"><img alt="Veja mais" src="img/veja_mais.png"></a>
    			</div>
    			<div id="imagem" class="col-md-4">
    				<img id="align_img" alt="Imagem" src="img/img_noticias/exame.jpg">
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