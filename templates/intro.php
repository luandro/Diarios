<div class="intro-container container">
 	<div class="row">
		<div class="col-md-4 intro-poesia-container">
			<h2>DO AMOROSO ESQUECIMENTO</h2>
			<p>Eu agora - que desfecho!</p>
			<p>Já nem penso mais em ti...</p>
			<p>Mas será que nunca deixo</p>
			<p>De lembrar que te esqueci?</p>
			<h4>Mario Quintana - Espelho Mágico</h4>
		</div>
		<div class="col-md-3 intro-page-logo">
		        <?php if ( get_theme_mod( 'm1_logo' ) ) : ?>
		          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		            <img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		          </a>
		        <?php else : ?>
		          <hgroup>
		              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		              <p class="site-description"><?php bloginfo( 'description' ); ?></p>
		          </hgroup>
		        <?php endif; ?>
		        <br/>
		        <a href="mailto:contato@diariosdemochila.com?Subject=Contato%20Diarios%20de%20Mochila">contato@diariosdemochila.com</a>
		</div>
		<div class="col-md-12 intro-arrow-container">
			<span class="intro-arrow glyphicon glyphicon-circle-arrow-down"></span>
		</div>	
 	</div>
</div>