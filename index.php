<?php include_once("includes/html/header.php") ?>
<body>

    <?php include_once("includes/html/language.php") ?>
	
	<div id="content">

        <section class="photo" id="photo">
            <img src="images/me.png" alt="Eu" class="image">
        </section>

		<div class="collumn">
			
			<section class="headline">
				<p><?= sprintf(_("Sou Pedro Góes,<br>CEO na %s InEvent %s."), '<a target="_blank" href="https://inevent.us/">', '</a>') ?></p>
			</section>

            <section class="onlyTitle">
                <h2><?= _("Sobre mim") ?></h2>
                <p><?= sprintf(_("Quer saber mais? %s História %s."), '<a href="story.php">', '</a>') ?></p>
            </section>
			
            <section class="onlyTitle articles">
                <h2><?= _("Artigos") ?></h2>
                <p><?= sprintf(_("A maioria estão no meu %s Pulse %s."), '<a target="_blank" href="https://www.linkedin.com/in/pedrogoes">', '</a>') ?>
            </section>

            <section class="onlyTitle">
                <h2><?= _("Meu CV") ?></h2>
                <p><?= sprintf(_("Escreva uma vez, compartilhe em qualquer lugar: meu %s LinkedIn %s."), '<a target="_blank" href="https://www.linkedin.com/in/pedrogoes">', '</a>') ?></p>
            </section>

            <hr class="separator">
			
			<section class="onlyTitle">
				<p><?= _("'Vovô Kiko, descanse em paz no céu. Sempre lhe amaremos muito.'") ?></p>
			</section>
			
		</div>
		
	</div>
	
</body>
</html>