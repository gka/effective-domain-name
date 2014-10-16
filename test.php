<?php

include('FullyQualifiedDomainName.php');

$hostnames = array(
	'mobile.nytimes.com',
	'abcdef.cloudfront.net',
	'www.google.com.br'
);

foreach ($hostnames as $host) {
	print $host . ' --> ';
	print FullyQualifiedDomainName::get($host);
	print "\n";
}

// Output:
//
// mobile.nytimes.com --> nytimes.com
// abcdef.cloudfront.net --> abcdef.cloudfront.net
// www.google.com.br --> google.com.br
