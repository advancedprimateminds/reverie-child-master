
<header class="contain-to-grid">
<!-- Starting the Off-Canvas Wrap -->
<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
  <div class="fixed">
  <nav class="header"></nav>
    <a class="right-off-canvas-toggle" href="#" >
      <div class="menu">
        <div class="top-bar"></div>
        <div class="middle-bar"></div>
        <div class="bottom-bar"></div>
      </div>
    </div>
    </a>
  </nav>
    <!-- Off Canvas Menu -->
    <div class="right-off-canvas-menu">
        <!-- whatever you want goes here -->
        <ul class="side-nav main">
          <li><a class="is-active" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></li>
        </ul>
       
        <ul class="inline-list social">
          <li><a href="https://www.linkedin.com/in/elizabethmacris" target="_blank"><i class="fi-social-linkedin"></a></i></li>
          <li><a href="https://github.com/advancedprimateminds" target="_blank"><i class="fi-social-github"></a></i></li>
          <li><a href="mailto:macris.elizabeth@gamil.com?Subject=Hello!%20" target="_blank"><i class="fi-mail"></a></i></li>
        </ul>
       
        <ul class="side-nav secondary">
          <li><p=>Advanced Simplicity.</p></li>
        </ul>

    </div>

  <section class="hero">   
    <div class="large-4 columns">
        <h2>Hello, I'm Liz, A Web Developer And The Human Behind<b> Advanced Primate Minds.</b></h2>
        <h2>How can I help you?</h2>
      </div>
  </section>
     
  <!-- close the off-canvas menu -->
  <a class="exit-off-canvas"></a>

  </div>
</div>
	<!-- End of Top-Bar -->
</header>

<!-- Start the main container -->
<div class="container" role="document">
	<div class="row">