<?php include_once("includes/html/header.php") ?>
<body>

    <?php include_once("includes/html/language.php") ?>
	
	<div id="content">

        <section class="photo" id="photo">
            <img src="images/pedro.png" alt="Eu" class="photoImage">
            <p><?php echo sprintf(_("Um breve texto sobre mim, consulte minha %sHistória%s."), '<a href="hist.php">', '</a>') ?></p>
        </section>

		<div class="collumn">
			
			<section class="introduction">
				<p><?php echo sprintf(_("Olá! Sou Pedro Góes,<br>Sócio na %sTrilha%s."), '<a target="_blank" href="http://grupotrilha.com.br/">', '</a>') ?></p>
			</section>
			
            <section class="onlyTitle articles">
                <h2><?php echo _("Artigos") ?></h2>
                <p><?php echo sprintf(_("A maioria estão no %sblog oficial do Trilha%s."), '<a target="_blank" href="http://grupotrilha.com.br/blog/">', '</a>') ?> <?php echo _("Escritas independentes também podem ser vistas abaixo:") ?></p>
                <ul>
                    <a href="articles/GoesLifestyle.html" target="_blank">
                        <li>Góes Lifestyle</li>
                    </a>
                    <a href="articles/GoesLifestyle.html" target="_blank">
                        <li>MCP (Coming)</li>
                    </a>
                </ul>

                <p><?php echo sprintf(_("Para uma série pessoal, veja minha página %sprivada%s."), '<a href="personal.php">', '</a>') ?></p>
            </section>

            <hr class="separator">

			<section class="onlyTitle idioms">
				<h2><?php echo _("Idiomas") ?></h2>
				<ul>
					<a href="hist.php"><li><?php echo _("Português") ?></li></a>
					<a href="hist.php"><li><?php echo _("Inglês") ?></li></a>
					<a href="hist.php"><li><?php echo _("Espanhol") ?></li></a>
					<a href="hist.php"><li><?php echo _("Alemão") ?></li></a>
					<a href="hist.php"><li><?php echo _("Francês") ?></li></a>
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
		
			<section class="centerIt goDownABit">
				<p><?php echo _("Me procurando em algum lugar?") ?> <a target="_blank" href="https://twitter.com/pedro380085">@pedro380085</a></p>
			</section>
			
			<section class="centerIt">
				<p><?php echo _("'Vovô Kiko, descanse em paz no céu. Sempre lhe amaremos muito.'") ?></p>
			</section>
			
		</div>
		
	</div>
	
</body>
</html>