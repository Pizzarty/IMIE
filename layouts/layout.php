<!DOCYTPE html>
<html>
  <head>
<?php include_once("vendor/css/CSS.php"); ?>
  </head>
  <body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">
					<div id="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><span>IM</span>IE</h1></a>
						</div>
					</div>

					<div class="navbar-collapse collapse">
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="./index.php?action=home" class="active">Acceuil</a></li>
								<li role="presentation"><a href="#Apropos">A Propos</a></li>
								<li role="presentation"><a href="./index.php?action=equipe">L'équipe</a></li>
								<li role="presentation"><a href="./index.php?action=projets">Projets</a></li>
								<li role="presentation"><a href="./index.php?action=blog">Articles</a></li>
								<li role="presentation"><a href="./index.php?action=contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
<div id="contenu">
  <?php include($vueAAfficher); ?>
 </div>
  <footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; Company Theme. All Rights Reserved.
                        <div class="credits">
                            <!--
                                All the links in the footer should remain intact.
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
                            -->
                        </div>
					</div>
				</div>
			</div>

			<div class="pull-right">
				<a href="#" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./vendor/js/jquery-2.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./vendor/js/bootstrap.min.js"></script>
    <script src="./vendor/js/jquery.prettyPhoto.js"></script>
    <script src="./vendor/js/jquery.isotope.min.js"></script>
    <script src="./vendor/js/wow.min.js"></script>
    <script src="./vendor/js/functions.js"></script>
  </body>
</html>
