# CSP-Reporter
Simple CSP reporter script that saves violations to disk.

## Usage
Specify `csp-report.php` in your CSP report-uri directive. 

## Output
```
=============23/07/2016 23:00:18=============
document-uri: https://example.com/foo/bar
referrer: https://www.google.com/
violated-directive: default-src self
original-policy default-src self; report-uri /csp-report.php
blocked-uri http://hackerdomain.com

=============23/07/2016 23:01:00=============
document-uri: https://example.com/foo/bar
referrer: https://www.google.com/
violated-directive: default-src self
original-policy: default-src self; report-uri /csp-report.php
blocked-uri: http://hackerdomain.com

============= 23/07/2016 23:01:30 =============
document-uri: https://example.com/foo/bar
referrer: https://www.google.com/
violated-directive: default-src self
original-policy: default-src self; report-uri /csp-report.php
blocked-uri: http://hackerdomain.com
```