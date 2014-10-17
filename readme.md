
A simple PHP implementation for retrieving the effective domain name. The effective domain name is the domain that includes exactly one level under the effective TLD.



```php
> include('EffectiveDomainName.php');

> print EffectiveDomainName::get('mobile.nytimes.com') . "\n";
nytimes.com

> print EffectiveDomainName::get('flightjs.github.io') . "\n";
flightjs.github.io

> print EffectiveDomainName::get('www.google.com.br') . "\n";
google.com.br
```

The algorithm uses the database of [public suffixes](https://publicsuffix.org/).

To update this database, just run ``make``.