<?php

	// Configurando URL Amigável
	function seo($params){
		
		$seo = explode("/", str_replace(strrchr($_SERVER["REQUEST_URI"], "?"), "", $_SERVER["REQUEST_URI"]));
		array_shift($seo);
		$replaces = array(".html", ".mega");
			return @str_replace($replaces, "", @$seo[$params+PASTA]); // Se url amigável for solicitado no site, soma apenas as pastas.
	}



?>