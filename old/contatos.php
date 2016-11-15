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
			<div id="contato_mob" class="col-md-12 hidden-md hidden-lg">
				<div class="col-md-12" id="detalhe_cor_mob">.: CONTATO :.</div>
    			<div id="texto_mob" class="col-md-6">
    				<!-- Neste espaço você pode falar conosco, tirar dúvidas, fazer orçamentos ou 
    				deixar sua mensagem. 
					<br />
					<br /> -->
					Preencha os campos para entrar em contato conosco. Este canal é 
					para você saber mais sobre o projeto, tirar dúvidas, orçamentos, dicas e afins. 
					<br /><br />
					Fique a vontade que em breve retornaremos o seu contato.
    			</div>
    			<div id="formulario_contato_mob" class="col-md-6">
    				<form method="post" action="enviar.php">
    					<div class="form-group">
						    <label for="nome">Nome:</label>
						    <input type="text" name="nome"  class="form-control" id="nome" required> 
    					</div>
    					<div class="form-group">
						    <label for="email">Email:</label>
						    <input type="text" name="email" class="form-control" id="email" required> 
    					</div>
    					<div class="form-group">
						    <label for="telefone">Telefone:</label>
						    <input type="text" name="telefone" class="form-control" id="telefone" > 
    					</div>
    					<div class="form-group">
						    <label for="mensagem">Mensagem:</label>
						    <textarea class="form-control" name="mensagem" rows="4" id="mensagem" required></textarea>
    					</div>
    					<div class="form-group" id="enviar">
    						<button type="submit" class="btn btn-default">
								<img alt="Enviar" src="img/enviar.png">
							</button>
    					</div>
    				</form>
    			</div>
    		</div>
    		<div id="contato" class="col-md-12 visible-md visible-lg">
    			<div id="texto" class="col-md-6">
    				<!-- Neste espaço você pode falar conosco, tirar dúvidas, fazer orçamentos ou 
    				deixar sua mensagem. 
					<br />
					<br /> -->
					Preencha os campos ao lado para entrar em contato conosco. Este canal é 
					para você saber mais sobre o projeto, tirar dúvidas, orçamentos, dicas e afins. 
					<br /><br />
					Fique a vontade que em breve retornaremos o seu contato.
                </div>
    			<div id="formulario_contato" class="col-md-6">
    				<?php 
    				if(isset($_GET["enviado"]) && $_GET["enviado"] == "1"){
    				?>
    					<div class="col-md-12" id="men_contato_s"> Mensagem enviada com sucesso.</div>
    				<?php 
    				}elseif(isset($_GET["enviado"])&& $_GET["enviado"] == "0"){
    				?>
    					<div class="col-md-12" id="men_contato_e"> Não foi possível enviar a mensagem.</div>
    				<?php 
    				}
    				?>
    				<form method="post" action="enviar.php">
    					<div class="form-group">
						    <label for="nome">Nome:</label>
						    <input type="text" name="nome" class="form-control" id="nome" required> 
    					</div>
    					<div class="form-group">
						    <label for="email">Email:</label>
						    <input type="text" name="email" class="form-control" id="email" required> 
    					</div>
    					<div class="form-group">
						    <label for="telefone">Telefone:</label>
						    <input type="text" name="telefone" class="form-control" id="telefone" > 
    					</div>
    					<div class="form-group">
						    <label for="mensagem">Mensagem:</label>
						    <textarea class="form-control" name="mensagem" rows="4" id="mensagem" required></textarea>
    					</div>
    					<div class="form-group" id="enviar">
    						<button type="submit" class="btn btn-default">
								<img alt="Enviar" src="img/enviar.png">
							</button>
    					</div>
    				</form>
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