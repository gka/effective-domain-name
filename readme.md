
A simple PHP implementation for retrieving the [fully qualified domain name](https://en.wikipedia.org/wiki/Fully_qualified_domain_name).

```php
> include('FullyQualifiedDomainName.php');

> print FullyQualifiedDomainName::get('mobile.nytimes.com') . "\n";
nytimes.com

> print FullyQualifiedDomainName::get('hs73hd3d.cloudfront.net') . "\n";
hs73hd3d.cloudfront.net'

> print FullyQualifiedDomainName::get('www.google.com.br') . "\n";
google.com.br
```

