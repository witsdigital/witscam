
<div style="background-color:  #FFFFFF;">
<br><br>
<br>
<div class="master-container">
	<div class="container">
		
	<div class="widget  widget_search  push-down-10 " >
            <form role="search" method="get" class="search-form">
                <label>
                    <span class="screen-reader-text">Buscar por:</span>
                    <input type="search" class="search-field" placeholder="Digite a busca..." value="" name="s" title="Search for:"/>
                </label>
                <input type="submit" class="search-submit" value="Buscar"/>
            </form>
        </div>	
		
				
					
					<div class="panel widget widget_pt_featured_page panel-first-child "  id="panel-7-1-2-0">
					<?php
				
			   
				foreach ($noticias as $rownot2) {
				   
					?>
						<div class="has-post-thumbnail page-box page-box--inline">
							<a class="page-box__picture" href="<?=  base_url('camaras/condeuba')?>/noticia/<?php echo $rownot2->id?>">
                                <img style="width: 100px;" src="<?=  base_url()?>uploads/noticias/7/<?php echo $rownot2->img?>" />
							</a>
							<div class="page-box__content">
								<h5 class="page-box__title text-uppercase">
								<a href="<?=  base_url('camaras/condeuba')?>/noticia/<?php echo $rownot2->id?>"><?php echo $rownot2->titulo?> </span></a>
								</h5>
                                                          <?php echo  substr($rownot2->conteudo, 0,100);?>... </span>	
							</div>
						</div>
						<br>
						<br>
				<?php }
				?>
					</div>
						
				
				<div class="spacer"></div>
				</div>
												
	</div>
												
</div>
											