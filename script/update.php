<?php

$list = file_get_contents('effective_tld_names.dat');

$etlds = array();

foreach (explode("\n", $list) as $line) {
	$line = trim($line);
	if ($line != '' && substr($line, 0,2) != '//') {
		$etlds[$line] = true;
	}
}

// add a few effective TLDs missing in the database
$etlds['tumblr.com'] = true;
$etlds['wordpress.com'] = true;

$tpl = file_get_contents('template/EffectiveDomainName.template.php');

file_put_contents('EffectiveDomainName.php', str_replace('E_TLDS', var_export($etlds, true), $tpl));
