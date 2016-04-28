<?php include_once("includes/html/header.php") ?>
<body>

    <?php include_once("includes/html/language.php") ?>
	
	<div id="content">

        <section class="photo" id="photo">
            <img src="images/me.png" alt="Eu" class="image">
        </section>

		<div class="collumn">
			
			<section class="headline">
				<p><?= sprintf(_("Sou Pedro Góes,<br>CEO na %sInEvent%s."), '<a target="_blank" href="https://inevent.us/">', '</a>') ?></p>
			</section>
			
            <section class="onlyTitle articles">
                <h2><?= _("Artigos") ?></h2>
                <p><?= sprintf(_("A maioria estão no meu %sPulse%s."), '<a target="_blank" href="https://www.linkedin.com/in/pedrogoes">', '</a>') ?> <?= sprintf(_("Nosso vlog semanal está no %sYoutube%s."), '<a target="_blank" href="https://www.youtube.com/playlist?list=PLKSCgjEf9poudgoMl07SM97Ui_fP_DCPz">', '</a>') ?> <?= _("Escritas independentes também podem ser vistas abaixo:") ?></p>
                <ul>
                    <a href="articles/GoesLifestyle.html" target="_blank">
                        <li>Góes Lifestyle</li>
                    </a>
                </ul>

                <p><?= sprintf(_("Para uma série pessoal, veja minha página %sprivada%s."), '<a href="personal.php">', '</a>') ?></p>
            </section>

            <section class="onlyTitle">
                <h2><?= _("Sobre mim") ?></h2>
                <p><?= sprintf(_("Um breve texto sobre mim, consulte minha %sHistória%s."), '<a href="story.php">', '</a>') ?></p>
            </section>

            <section class="onlyTitle">
                <h2><?= _("Meu CV") ?></h2>
                <p><?= sprintf(_("Escreva uma vez, compartilhe em qualquer lugar: meu %sLinkedIn%s."), '<a href="https://br.linkedin.com/in/pedrogoes">', '</a>') ?></p>
            </section>

            <hr class="separator">
			
			<section class="onlyTitle">
				<p><?= _("'Vovô Kiko, descanse em paz no céu. Sempre lhe amaremos muito.'") ?></p>
			</section>
			
		</div>
		
	</div>
	
</body>
</html>