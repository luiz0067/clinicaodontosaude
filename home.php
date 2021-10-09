
	<div class="conteudo" >
				<div class="conteiner_text_home" >
						<div class="text_home_titulo" >	
							<div class="titulo_dicas_right">
							Bem vindo
							</div>
						</div>
	
						<div class="text_home" >	
						Lorem Ipsum é simplesmente uma simulação de texto da
						indústria tipográfica e de impressos, e vem sendo utilizado 
						desde o século XVI, quando um impressor desconhecido pegou 
						uma bandeja de tipos e os embaralhou para fazer um livro de
						modelos de tipos. Lorem Ipsum sobreviveu não só a cinco 
						séculos.
						 <br />
						  <br />
						Utilizado desde o século XVI, quando um impressor
						desconhecido pegou uma bandeja de tipos e os embaralhou 
						para fazer um livro de modelos de tipos. Lorem Ipsum
						sobreviveu não só a cinco séculos.
						</div>
				
				</div>
				<div class="conteiner_novidade_home" >
				
							<div class="rescente_titulo" >	
								<div class="titulo_dicas_right">
								Fotos recentes
								</div>
						
							</div>
								<div class="clear" ></div>
									<?php		
								$sql = "SELECT id,titulo,imagem,data_emissao FROM albuns order by id desc limit 0,01 "; //altere (clientes) para o nome de sua tabela.
								$result = mysql_query($sql) or die ("N?o foi poss?vel realizar a consulta!!!");
								while ($row = mysql_fetch_assoc($result)){	
							?>		
										<div class="Conteiner_produto">
											<div class="imagem_produto">
												<a href="./uploads/fotos/g_<?php echo $row['imagem'];?>" rel="lightbox[roadtrip]">
										<img src="./uploads/fotos/g_<?php echo $row['imagem'];?>" alt="odonto" title="odonto" name="odonto" border="0" width="181px" height="120px
										" />
									</a>	
											</div>
											
											<div class="clear" ></div>
											<div class="conteudo_produto">
												<div class="titulo_produto">
												<?php echo $row['titulo'];?>
												</div>
												<div class="subtitulo_produto">
												<?php echo $row['data_emissao'];?>
												</div>
												<div class="mais">
													
										
													<a href="?pg=fotos">
													<div class="letra_mais">
													ver mais
													</div>
													</a>
												</div>
											</div>
										</div>
								<div class="bem" style="margin-left:20px;"> 
								
								<img src="./imagens/layout/Cuida.png">
								
								</div>
								
								
								
				
													
					<?php
							
													}
														
														
														
											
											
								?>
					
				
				
				
				





	
				</div>
				<div class="conteiner_marcas" >
						<div class="marcas_titulo" >
							<div class="titulo_dicas_right">
								Convênios
								</div>
							
						</div>
						<div class="clear" ></div>
						<div class="marcas" >
							<div class="imgmarcas" style="float:left;">
							<img src="./imagens/layout/Vicentina.png" width="65px"height="61px" style="margin-top:5px;margin-left:40px;" />
							</div>
							<div class="imgmarcas"  >
							<img src="./imagens/layout/Lasalle.png" width="155px"height="35px" style="margin-top:5px;margin-left:20px;padding-right:20px;">
							</div>
							
							<div class="imgmarcas" >
							<img src="./imagens/layout/funet.png" width="59px"height="68px" style="margin-top:5px;margin-left:20px;padding-right:20px;">
							</div>
							<div class="imgmarcas" >
							<img src="./imagens/layout/acite.png" width="122px"height="42" style="margin-top:5px;margin-left:20px;padding-right:20px;">
							</div>
							<div class="imgmarcas" >
							<img src="./imagens/layout/copel.png" width="58px"height="64px" style="margin-top:5px;margin-left:20px;padding-right:20px;">
							</div>
						</div>
		
				</div>
				
				
				</div>
					<div class="clear" ></div>