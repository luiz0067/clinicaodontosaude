
<?php 
	include('./adm/conecta.php');
	
?>
<div class="conteudo">


		<div class="imagem_produto_pequena" style="margin-left:7px; margin-top:10px;float:left;width:auto;">
	
		<?php		
		if (($_GET["id_categoria"]!=null)){
			$sql	= "SELECT id,titulo,imagem,id_categoria FROM cadastro_foto where (id_categoria=0".$_GET["id_categoria"].")";
		}
				$result = mysql_query($sql) or die ("N?o foi poss?vel realizar a consulta!!!");
				while ($row = mysql_fetch_assoc($result)){	
				?>		



		<a href="./uploads/fotos/g_<?php echo $row ['imagem'];?>" rel="lightbox[roadtrip]">
				<img src="./uploads/fotos/g_<?php echo $row ['imagem'];?>" alt="odonto" title="odonto" name="odonto" border="0" style="margin-top:10px;margin-left:10px;" width="187" height="137"  />
			</a>
		
		<?php 
		}

	
	?>	
	
	</div>

	</div>
		
<div class="clear" ></div>