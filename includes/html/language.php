<?php $fullPathForPage = "/" . basename($_SERVER["SCRIPT_FILENAME"]); ?>
<div class="upperBlock">
	<div class="rightBlock">
		<ul>
			<a class="reloadPage" href="/pt<?php echo $fullPathForPage ?>">
				<li <?php if ($lang == "pt") { ?>class="selectedLanguage"<?php } ?>>
					<span>Português</span>
				</li>
			</a>
			<a class="reloadPage" href="/en<?php echo $fullPathForPage ?>">
				<li <?php if ($lang == "en") { ?>class="selectedLanguage"<?php } ?>>
					<span>English</span>
				</li>
			</a>
		</ul>
	</div>
</div>