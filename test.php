<?php

include('EffectiveDomainName.php');

$hostnames = array(
	'mobile.nytimes.com',
	'xyz.github.io',
	'www.google.com.br'
);

foreach ($hostnames as $host) {
	print $host . ' --> ';
	print EffectiveDomainName::get($host);
	print "\n";
}

// Output:
//
// mobile.nytimes.com --> nytimes.com
// abcdef.cloudfront.net --> abcdef.cloudfront.net
// www.google.com.br --> google.com.br
