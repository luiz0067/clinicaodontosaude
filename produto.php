<?php 
	include('./adm/conecta.php');
	
?>
<div class="conteudo">
<?php
	if (($_GET["id"]!=null)){
	$sql = "SELECT imagem.titulo,imagem.id, imagem.obs, imagem.valor, imagem.imagem,imagem.marca,imagem.modelo,imagem.combustivel,imagem.cor,imagem.opcionais,imagem.id_sub_categoria, sub_categoria.titulo AS titulo_sub_categoria
			FROM imagem
			LEFT JOIN sub_categoria ON ( imagem.id_sub_categoria = sub_categoria.id ) 
			where (imagem.id=0".$_GET["id"].") ";
			//echo $sql;
			}
	$result_sub_categoria = mysql_query($sql,$link);
	if (($result_sub_categoria!=null)&&(true)){
		while ($row_sub_categoria = mysql_fetch_assoc($result_sub_categoria)){
		
			$imagem_id_produto=$row_sub_categoria ['id'];
			$imagem_titulo=$row_sub_categoria ['titulo'];
			$imagem_imagem=$row_sub_categoria ['imagem'];
			$imagem_valor=$row_sub_categoria ['valor'];
			$imagem_obs=$row_sub_categoria ['obs'];

	?>
	<div class="letra30MyriadPro" style="margin-left:10px; padding-top:10px; color:#75a5b1;margin-bottom:30px;">
	<?php echo $imagem_titulo;?>
	</div>
	
	<div class="produto_grande">
		<div class="imagem_produto_grande">
			<img src="./uploads/fotos/g_<?php echo $imagem_imagem;?>" alt="odonto"  
			title="odonto" name="odonto" 
			border="0" width="315" height="279"/>
		</div>
		<div class="grande_conteudo_produto">
			<div class="valor">
				<div class="letra_mais" style="margin-left: 15px;">
				A partir de:
				</div>
				<div class="clear" ></div>
				<div class="letra_valor" style="margin-left: 15px;">
				<?php echo $imagem_valor;?>
				</div>
			</div>
			
			<div class="clear" ></div>
						<div class="conteudo_contato1" style="margin-left:23px;color:#ffffff;  text-align: justify;font-size:16px;">
								<?php echo $imagem_obs;?>
						</div>
					

				</div>
	</div>
	<?php
	}}
	
	?>

		</div>