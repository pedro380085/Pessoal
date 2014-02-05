<?php include_once("includes/html/header.php") ?>
<body>

    <?php include_once("includes/html/language.php") ?>
	
	<div id="content">

		<p class="goBack"><a href="index.php"><?php echo _("Voltar para página inicial") ?></a></p>
		
		<section class="intro" id="intro">
			<h2><?php echo _("Eu") ?></h2>
			
            <p><?php echo _("Quando escrevi essa página pela primeira vez, optei por descrever em detalhes todas minhas conquistas nos últimos anos mas, realmente, quem se importa? A programação se tornou um hábito diário desde que completei quinze anos e, se me perguntar, é algo que tenho grande aptidão. Mas no final, não importa o que se sabe programar, mas sim para que sabe programar.") ?></p>
            
            <p class="subHeader"><?php echo _("Uma rápida história") ?></p>
            
            <p><?php echo sprintf(_("Quando estava no colégio, eu estudei pra caramba. Você vê, no Brasil as melhores universidades são públicas, totalmente financiadas pelo governo e abertas a qualquer pessoa disposta a fazer os exames de admissão. Eu amava tanto escrever código mas, ainda assim, tive que aprender todos os assuntos desnecessários para que pudesse entrar uma boa universidade e trabalhar apenas com programação. E assim me tornei um aluno da %sUSP%s."), '<a href="http://www5.usp.br/">', '</a>') ?></p>

            <p><?php echo sprintf(_("No início, tudo foi incrível. Finalmente tinha a liberdade que sempre quis (não só eu estava livre da escola, mas também comecei a viver por mim mesmo) mas, como todos os truques de mágica, as coisas não ficam mágicas para sempre. O curso em si foi um ajuste ruim para mim, porque queria ser um engenheiro de software e não um engenheiro de computação. A diferença na redação pode ser pequeno, mas o conteúdo certamente não é, e assim, depois de dois anos, eu estava realmente frustado. Já tinha fundado a minha segunda empresa (%sTrilha%s) com um colega de classe, mas a minha vida acadêmica necessitava de mudanças, então eu decidi fazer um programa de intercâmbio (CSF) por um ano. Fui aprovado, mas infelizmente não foi para a universidade que queria, então recusei a oferta e me aproximei do Brasil como o ambiente para crescer profissionalmente."), '<a href="http://grupotrilha.com.br/">', '</a>') ?></p>

            <p><?php echo _("Mas nada disso importa quando você decide se tornar CEO de alguma empresa. Na nossa, criamos produtos com base em tecnologia de ponta e, mesmo trabalhando dia e noite nele, as pessoas realmente não parece se importar. E elas estão certas. Com o fluxo absurdo de informação que temos hoje em dia, somos exigentes com os detalhes e o processo de venda, para atingir soluções claras para consumidores.") ?></p>

            <p><?php echo sprintf(_("Para endurecer as habilidades necessárias, tais como negociar melhor e obter melhores oportunidades, tornei-me um participante ativo do Movimento Empresa Júnior no Brasil, primeiro sendo um analista %sEESC jr.%s e, em seguida, um consultor de negócios na %sFEJESP%s. As pessoas tendem a trabalhar muito duro em ambas, mas no geral fiz alguns bons amigos!"), '<a href="http://www.eesc.usp.br/eescjr/">', '</a>', '<a href="http://www.fejesp.org.br/">', '</a>') ?></p>

            <p><?php echo _("Para me divertir, tento ler o máximo possível. Normalmente, leio algo em torno de 60 livros por ano, incluindo pelo menos 30 mil páginas. Algumas pessoas gostam de sair e se embebedar, eu prefiro ficar bêbado e ler. Ow, e você pode perguntar: o que tanto lê? Te respondo: um monte de livros técnicos, thrillers e, quando eu estou um pouco entediado, alguns livros de negócios.") ?></p>

            <p><?php echo _("E como exercício físico, tenho escolhido andar de mountain-bike pelo menos duas vezes por semana nas trilhas de São Carlos / SP. Você provavelmente vai me encontrar correndo em algum lugar, cheio de poeira e suor ;)") ?></p>

		</section>
		
        <section class="fullText idioms" id="idioms">
            <h2>Idiomas</h2>
            <ul>
                <li data-row="4" data-col="1" data-sizex="4" data-sizey="2">
                    <h3>Português</h3>
                    <p>Língua Nativa [Desde que nasci]</p>
                </li>

                <li data-row="1" data-col="1" data-sizex="10" data-sizey="3">
                    <h3>Inglês</h3>
                    <p>Avançado – Certificado de Inglês Avançado (CAE) por Cambridge ESOL Examination [Dez/2010]</p>
                    <p>Avançado – Certificado de proficiência em Inglês pelo TOEFL (104 pontos de 120) [Setembro/2012]</p>
                </li>

                <li data-row="4" data-col="5" data-sizex="2" data-sizey="5">
                    <h3>Espanhol</h3>
                    <p>Intermediário - Diplomas de Espanhol como Língua Estrangeira (DELE) [Mai/2009]</p>
                </li>

                <li data-row="4" data-col="9" data-sizex="2" data-sizey="5">
                    <h3>Alemão</h3>
                    <p>3 semestres de estudo no instituto Goethe [segundo semestre de 2009 até o final de 2010]</p>
                </li>

                <li data-row="6" data-col="3" data-sizex="4" data-sizey="3">
                    <h3>Francês</h3>
                    <p>2 semestres de estudo oferecidos pelo CCInt-USP [início no segundo semestre de 2011]</p>
                </li>
            </ul>
        </section>

		<section class="fullText languages" id="languages">
			<h2>Linguagens</h2>
			<ul>
				<li data-row="1" data-col="1" data-sizex="10" data-sizey="5">
					<h3>PHP</h3>
					<p>Sendo a linguagem com qual tenho contato a mais tempo, o conhecimento sobre a mesma é considerável. De threads a orientação a objetos, já estudei para conseguir a certificação Zend (famosa página amarela) mas não apliquei por não achar tão necessária para o futuro imediato. Ainda tive uma breve experiência com o PHP-GTK, o PHP para desktops. Juntamente com Javascript, é a linguagem principal de desenvolvimento no <a target="_blank" href="http://grupotrilha.com.br/">Trilha</a>, assim como no <a href="http://listadosaprovados.com/">Lista dos Aprovados, </a> que permite que qualquer vestibulando acesse todos os resultados das universidades em apenas um lugar. </p>
				</li>

				<li data-row="6" data-col="1" data-sizex="2" data-sizey="6">
					<h3>HTML</h3>
					<p>Conhecimento das tags e suas aplicações semânticas, incluindo as recém adicionadas pela HTML5.</p>
				</li>

				<li data-row="12" data-col="1" data-sizex="2" data-sizey="5">
					<h3>CSS</h3>
					<p>Conhecimentos dos elementos e utilização dos mesmos na hierarquia de efeito cascata.</p>
				</li>
				
				<li data-row="6" data-col="5" data-sizex="6" data-sizey="5">
					<h3>Javascript / jQuery</h3>
					<p>Até pouco tempo atrás, o conhecimento que tinha em Javascript era limitado a alguns comandos básicos. Para toda a manipulação necessária para alguma página web, eu utilizava o excelente jQuery, através de sua seleção por regras CSS e comandos encadeados. Mais recentemente li alguns livros sobre Javascript puro e consegui aprofundar um pouco mais no DOM.</p>
				</li>
				
				<li data-row="11" data-col="3" data-sizex="6" data-sizey="7">
					<h3>Java</h3>
					<p>Foi a primeira linguagem com a qual tive contato com POO, no segundo semestre de 2009. No ano seguinte, vi que a escola necessitava de algum aplicativo para indexar todos os alunos que passaram no vestibular, de forma automática e prática (antes o processo era manual). Com isso nasceu o <a href="http://pedrogoes.info/documentos/">Aprovados</a> (pai do Lista dos Aprovados), que virou o programa padrão para toda a escola. Ainda com o conhecimento adquirido em Java, avancei no Android por algum tempo, mas acabei trocando depois pelo iOS.</p>
				</li>

				<li data-row="11" data-col="9" data-sizex="2" data-sizey="11">
					<h3>Linux</h3>
					<p>Necessário para a administração dos servidores do sistema, tenho um conhecimento intermediário no SO, resumido <u>basicamente</u> em manter um servidor web estável. Elementos de interface gráfica, por exemplo, não são da minha área de conhecimento no momento. </p>
				</li>
				
				<li data-row="18" data-col="3" data-sizex="6" data-sizey="4">
					<h3>C, C++ e C#</h3>
					<p>No primeiro ano da universidade todas as matérias e trabalhos lidaram com C. Já tinha algum conhecimento em C++ e C# apenas por curiosidade, mas nada além do básico.</p>
				</li>
				
				<li data-row="17" data-col="1" data-sizex="2" data-sizey="5">
					<h3>Ruby</h3>
					<p>Todos seus conceitos essenciais e o framework <i>Ruby on Rails</i>.</p>
				</li>
				
				<li data-row="22" data-col="1" data-sizex="10" data-sizey="6">
					<h3>Objective-C</h3>
					<p>Iniciei os estudos ainda no final de 2010 frustado pela experiência que tive com o Android. No momento tenho quase 10 app's publicados na App Store, sendo todos gratuitos. O mais importante deles (<a href="http://itunes.apple.com/us/app/argumento/id389067612?mt=8">Argumento</a>) foi desenvolvido ainda durante o EM, fruto da dificuldade que os vestibulandos de Brasília têm em calcular a nota aproximada para serem aprovados na Universidade de Brasília (UNB) através do Programa de Avaliação Seriada (PAS). Já na USP, desenvolvi outro aplicativo (<a href="http://itunes.apple.com/br/app/mmq/id439562046?mt=8">MMQ</a>), que ajuda a calcular o Método dos Mínimos Quadrados. Para a plataforma mobile dentro do <a target="_blank" href="http://grupotrilha.com.br/">Trilha</a>, é utilizada ativamente para a criação de todos os apps para o iOS.</p>
				</li>
			</ul>
        </section>
        
        <section class="quote" id="quote">
            <h2><?php echo _("Citação") ?></h2>
            <blockquote><?php echo _("'Seja humilde mas não se esconda dos seus méritos'") ?> - <span id="quoteCredits"><?php echo _("Autor desconhecido") ?></span></blockquote>
        </section>
		
	</div>
</body>
</html>