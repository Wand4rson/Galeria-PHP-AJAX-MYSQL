
<br>
<?php if (count($lista) == 0) : ;?>
	<div class="alert alert-danger text-center" role="alert">
	Nenhum registro encontrado.
	</div>
<?php endif; ?>

		<!-- Main -->
		<main role="main">

			<input type="hidden" class="form-control" id="urlBase" name="urlBase" value="<?php echo BASE_URL; ?>">

			<section class="text-center">
				<div class="container">
					<h2>Album de Fotografia</h2>
					<p class="lead text-muted">Editando Imagem com AJAX e PHP</p>
					<p><a href="<?php echo BASE_URL;?>foto" class="btn btn-primary my-2">Nova Foto</a></p>

				</div>
			</section>

				<div class="album py-5 bg-light">
						<div class="container">

							<div class="row">

							<?php foreach ($lista as $item) : ?>
								
								<div class="col-md-6">

									<div class="card mb-6 shadow-sm">									
									
										<img id="img<?php echo $item['id']; ?>"  src="<?php echo BASE_URL."images/".$item['src_imagem']; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="<?php echo $item['titulo'] ;?>">

										<div class="card-body">
											<p class="card-text"><?php echo $item['titulo']; ?></p>
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<a href="" type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#ModalDetalhes<?php echo $item['id']; ?>">Ver</a>
													<a href="<?php echo BASE_URL;?>foto/del/<?php echo $item['id'];?>" type="button" class="btn btn-sm btn-outline-danger">Remover</a>												
												</div>												
											</div>
												
												<hr>

												<!-- Editando Image -->
												<div class="card-footer">
													<p class="card-text">Trocar Imagem - AJAX</p>
													<div class="row">
														<div class="col">
															<div class="custom-file">        
																<input type="file" class="custom-file-input arquivo" id="arquivo<?php echo $item['id']; ?>" required>
																<label class="custom-file-label" for="arquivo">selecione um arquivo</label>
															</div>
														</div>
														<div class="col">
															<input type="hidden" class="form-control" id="inputID<?php echo $item['id']; ?>" value="<?php echo $item['id']; ?>">
															<button type="button" name="btnEnviarImage" class="btn btn-outline-primary xEnviarImage" onclick="trocaFoto(<?php echo $item['id']; ?>)">Enviar Nova Imagem</button>
														</div>
													</div>													
												</div>
												<!-- End Editando Image -->

										</div>
									</div>
									
								
									<!-- Modal View -->																					
									<div class="modal fade" id="ModalDetalhes<?php echo $item['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalDetalhes" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												
												<div class="modal-header">
													<h5 class="modal-title" id="staticBackdropLabel"><?php echo $item['titulo']; ?></p></h5>	
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">												
														<span aria-hidden="true">&times;</span>
													</button>
												</div>

												<img src="<?php echo BASE_URL."images/".$item['src_imagem']; ?>" class="img-thumbnail" alt="<?php echo $item['titulo'] ;?>">

												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>													
												</div>

											</div>
										</div>
									</div>
									<!-- End Modal View -->

									

								</div>

								

								<?php endforeach; ?>

							</div>

						</div>
				</div>

			</main>
			<!-- End Main -->