<?php

$list = file_get_contents('effective_tld_names.dat');

$etlds = array();

foreach (explode("\n", $list) as $line) {
	$line = trim($line);
	if ($line != '' && substr($line, 0,2) != '//') {
		$etlds[$line] = true;
	}
}

$tpl = file_get_contents('template/FullyQualifiedDomainName.template.php');

file_put_contents('FullyQualifiedDomainName.php', str_replace('E_TLDS', var_export($etlds, true), $tpl));
