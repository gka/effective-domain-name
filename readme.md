
A simple PHP implementation for retrieving the effective domain name. The effective domain name is the domain stripped from all but one subdomain that doesn't qualify as effective TLD.

```php
> include('EffectiveDomainName.php');

> print EffectiveDomainName::get('mobile.nytimes.com') . "\n";
nytimes.com

> print EffectiveDomainName::get('hs73hd3d.cloudfront.net') . "\n";
hs73hd3d.cloudfront.net

> print EffectiveDomainName::get('www.google.com.br') . "\n";
google.com.br
```

The algorithm uses the database of [public suffixes](https://publicsuffix.org/).

To update this database, just run ``make``.