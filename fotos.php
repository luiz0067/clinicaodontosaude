<?php 
	include('./adm/conecta.php');
	
?>
<div class="conteudo">
	<div class="marcas_titulo">
					<div class="titulo_dicas_right">
								Fotos
					</div>
							
				</div>
		<div class="clear" ></div>
	<?php		
							$sql = "SELECT id,titulo,imagem,data_emissao FROM albuns order by id desc "; //altere (clientes) para o nome de sua tabela.
							$result = mysql_query($sql) or die ("N?o foi poss?vel realizar a consulta!!!");
							while ($row = mysql_fetch_assoc($result)){	
						?>				
					

			
	<div class="produto" style=":margin-top:10px;background-color:;">
		<div class="imagem_produto">
			<a href="./uploads/fotos/g_<?php echo $row['imagem']?>" rel="lightbox[roadtrip]">
				<img src="./uploads/fotos/g_<?php echo $row['imagem']?>" alt="Odonto" title="Odonto" name="Odonto" border="0" width="181" height="120" />
			</a>
		</div>
		<div class="conteudo_produto">
			<div class="titulo_produto">
				
				<?php echo $row['titulo']?>
			</div>
			<div class="subtitulo_produto">

				<?php echo $row['data_emissao']?>
			</div>
			<div class="mais">
				
			<a href="?pg=categoria_foto&id_categoria=<?php echo $row['id']?>">
				<div class="letra_mais">
				Ver mais
				</div>
				</a>
			</div>
		</div>
		
	</div>
	<?php
							}			
									
							
							?>
</div>

						<div class="clear" ></div>