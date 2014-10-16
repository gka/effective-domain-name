
all:
	wget https://publicsuffix.org/list/effective_tld_names.dat
	php script/update.php
	rm effective_tld_names.dat

test:
	php test.php