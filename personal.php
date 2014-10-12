<?php include_once("includes/html/header.php") ?>
<body>

    <?php include_once("includes/html/language.php") ?>
	
	<div id="content">

		<p class="goBack"><a href="index.php"><?php echo _("Voltar para página inicial") ?></a></p>

        <section class="personal">
            <p><?php echo sprintf(_("Artigos escritos com referências exclusivas ao meu cunho pessoal. Se estiver procurando referências profissionais, favor seguir para a página %sprofissional%s."), '<a href="index.php">', '</a>') ?></p>

            <p><?php echo _("Como grande parte dos registros se estendem desde 2007, todos os artigos são ordenados por ordem cronológica. Atualizações são como novas publicações, automaticamente colocam o artigo no topo da lista.") ?></p>

            <h2><?php echo _("Artigos") ?></h2>
			<ul>
				<a href="articles/PersonalLifeandParties.html" target="_blank">
                    <li>Personal Life and Parties</li>
                </a>
			</ul>
        </section>

        <hr class="separator">
		
	</div>
	
</body>
</html>