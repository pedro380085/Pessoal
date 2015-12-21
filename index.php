<?php include_once("includes/html/header.php") ?>
<body>

    <?php include_once("includes/html/language.php") ?>
	
	<div id="content">

        <section class="photo" id="photo">
            <img src="images/me.png" alt="Eu" class="image">
            <p><?php echo sprintf(_("Um breve texto sobre mim, consulte minha %s História %s."), '<a href="story.php">', '</a>') ?></p>
        </section>

		<div class="collumn">
			
			<section class="headline">
				<p><?php echo sprintf(_("Sou Pedro Góes,<br>CEO na %s InEvent %s."), '<a target="_blank" href="https://inevent.us/">', '</a>') ?></p>
			</section>
			
            <section class="onlyTitle articles">
                <h2><?php echo _("Artigos") ?></h2>
                <p><?php echo sprintf(_("A maioria estão no meu %s Pulse %s."), '<a target="_blank" href="https://www.linkedin.com/in/pedrogoes">', '</a>') ?> <?php echo sprintf(_("Nosso vlog semanal está no %s Youtube %s."), '<a target="_blank" href="https://www.youtube.com/playlist?list=PLKSCgjEf9poudgoMl07SM97Ui_fP_DCPz">', '</a>') ?> <?php echo _("Escritas independentes também podem ser vistas abaixo:") ?></p>
                <ul>
                    <a href="articles/GoesLifestyle.html" target="_blank">
                        <li>Góes Lifestyle</li>
                    </a>
                </ul>

                <p><?php echo sprintf(_("Para uma série pessoal, veja minha página %s privada %s."), '<a href="personal.php">', '</a>') ?></p>
            </section>

            <hr class="separator">

			<section class="onlyTitle idioms">
				<h2><?php echo _("Idiomas") ?></h2>
				<ul>
					<a href="story.php"><li><?php echo _("Português") ?></li></a>
					<a href="story.php"><li><?php echo _("Inglês") ?></li></a>
					<a href="story.php"><li><?php echo _("Espanhol") ?></li></a>
				</ul>
			</section>
			
			<section class="onlyTitle cv">
				<h2><?php echo _("Currículo") ?></h2>
				<ul>
					<li><a target="_blank" href="https://docs.google.com/document/d/1y1dXBjpNsKBeiNXpLdBBGjUeaeoEw6ADBtDJs56U7NQ/edit"><?php echo _("Português") ?></a></li>
                    <li><a target="_blank" href="https://docs.google.com/document/d/1BO5BkToUgBu-g7t3Y8eLvfq5cDLEgWrGFzXc4HBsbpM/edit"><?php echo _("Inglês") ?></a></li>
				</ul>
			</section>
			
			<div style="clear: both;"></div>
			
			<section class="centerIt">
				<p><?php echo _("'Vovô Kiko, descanse em paz no céu. Sempre lhe amaremos muito.'") ?></p>
			</section>
			
		</div>
		
	</div>
	
</body>
</html>