<?php include('./adm/conecta.php')


?>

				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				<script src="js/jquery-1.7.2.min.js"></script>
				<script src="js/swfobject_modified.js" type="text/javascript"></script>
				<script src="js/jquery.cycle.all.2.72.js" type="text/javascript"></script>
				<script src="js/jquery-1.7.2.min.js"></script>
				<script src="js/lightbox.js"></script>
				<link href="css/lightbox.css" rel="stylesheet" />
				<link href="css/lightbox.css" rel="stylesheet" />
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<title>Home</title>
				<link rel="stylesheet" type="text/css" href="./css/estilo.css" />
				<style type="text/css"></style>
				<script language="javascript" type="">function fechar(){
				document.getElementById('popup').style.display = 'none';
				}
				function abrir(){
				document.getElementById('popup').style.display = 'block';
				setTimeout ("fechar()", 3);
				}</script>
<script>
 function trocardecor (elemento,cor){
 elemento.style.color=cor;}
</script>
<script> 
	
	var $j = jQuery.noConflict();
	$j('#lightbox').css("background","red");
	
	var jQuery = $;
	$(function(){
			$('#banner').cycle({
					fx: 'zoom', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
					pager:  '#paginador',
					speed: 300,
					timeout: 5000,
					cleartype: false,
					pause: true
			});
	});

</script>
		</head>
		<body ="abrir();">
			
		
				<div id="logo_img">
							<div class="cont">
									<nav id="menu-principal">
										<ul id="menucima">
										  <li class="menucima"><a href="?pg=home" class="text-menu">Home</a></li>
										  <li class="menucima"><a href="?pg=Odonto" class="text-menu">A Clínica</a></li>
										  <li class="menucima"><a href="?pg=fotos" class="text-menu">Fotos</a></li>
										  <li class="menucima"><a href="?pg=Equipe" class="text-menu">Equipe</a></li>
										  <li class="menucima"><a href="?pg=contato" class="text-menu">Contato</a></li>
										</ul>
									  </nav>
									 <div class="redessociais"> 
									 <a href="#">
											<div id="facebook"> 
							
												</div>
												</div>
										</a>
							
							</div>
					
						<div class="top_meio">
						<a href="?pg=home">
							<div class="logo">
						
							</div>
						</a>	
							<div id="banner">
											<?php		
						$sql = "SELECT id,imagem,titulo FROM slide order by id desc"; //altere (clientes) para o nome de sua tabela.
						$result = mysql_query($sql) or die ("N�o foi poss�vel realizar a consulta!!!");
						while ($row = mysql_fetch_assoc($result)){	
					?>
					
				  
							<a href="<?php echo $row['titulo']?>" target="_self"> 
								<img src="./uploads/banner/g_<?php echo $row['imagem']?>" width="576px" height="244px" alt="1" alt="odonto"  
								title="odonto" name="odonto" 
								border="0" /> 
							</a>
		
						<?php
							}
						?>
						
					
							</div>
						</div>
						
				  </div>
				 
					<div class="fundo_categorias">
					<div class="categoria">
						
						<div class="serviços">
						    <div class="titulo_serviços">
							 Serviços
								
						
							</div>
								  <div class="clear" ></div>
							    <div class="conteiner_itens">
									<?php
								
										
										$sql    = 'SELECT id,titulo FROM categoria;';
										$result = mysql_query($sql, $link);
										while ($row = mysql_fetch_assoc($result)){
								
									?>
									<a href="?pg=categoria_produto&id_categoria=<?php echo $row['id'];?>">
									<div class="titulo_itens">
										
										<?php echo $row['titulo'];?>
										</div>
										</a>
										<?php
										}
									
									?>
												</div>
						</div>	
							
							
								<div class="img_categoria">
							
							
								<a href="?pg=dicas">	 
								<div class="img_saiba">
									Saiba mais
								</div>
								</a>
							</div>
						
		
					</div>	
					</div>
				  <div class="clear" ></div>
				  <div id="meio">
					
			 <?php 
			
			$pg=$_GET["pg"];
				if($pg=="home")
					include('home.php');
				else if($pg=="contato")
					include('contato.php');
				else if($pg=="categoria_produto")
					include('categoria_produto.php');
				else if($pg=="categoria_foto")
					include('categoria_foto.php');
				else if($pg=="produto")
					include('produto.php');
				else if($pg=="Equipe")
					include('Equipe.php');	
				else if($pg=="fotos")
					include('fotos.php');
				else if($pg=="Odonto")
					include('Odonto.php');
				else if($pg=="dicas")
					include('dicas.php');
				else
					include('home.php');
				?>
				 
				 
					  </div>
				<div id="rodape">
					<div class="fundo">
						<div class="conteiner_esquerdo_fundo" style="float:left;width:500px;height:102px;">	
							<div class="inf_fundo">	
						Odonto Saúde clínica odontológica Ltda.<br />
						Rua Bonfim, 2077    -    Sl. 02    -    Jd. La Salle   |   Toledo Pr<br />
						 
							<div>
							<div class="telf_fundo">	
							45. 3252-7343	
							</div>
							
							</div>
							
						
						</div>
							</div>
					
						<div class="fundo_direito">
					<a href="http://www.studiomidiamix.com.br/" target="_blank">
							<img src="./imagens/layout/midia.png" style="float:right;margin-right:40px;margin-top:40px; "
							>
						</a>
					
					</div>
								
					</div>
				</div>
				</div>

				</body>
