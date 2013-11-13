# PHP RSS Class

#### Author

* Miquel Camps Orteza
* [@miquelcamps](https://twitter.com/miquelcamps)

#### Initialize

```php
$items = array();
$items[] = array(
	'title' => 'item 1',
	'description' => 'item 1 description',
	'url' => 'http://domain.com/post-1/',
	'catgory' => 'news',
	'date' => 'Wed, 13 Nov 2013 22:37:06 +0100'
	);
$items[] = array(
	'title' => 'item 2',
	'description' => 'item 2 description',
	'url' => 'http://domain.com/post-2/',
	'catgory' => 'news',
	'date' => 'Wed, 13 Nov 2013 22:37:07 +0100'
	);
	

header('Content-Type: text/xml; charset=utf-8'); 

require 'rss.php';

$rss = new RSS;
$rss->title = 'RSS title';
$rss->url = 'http://domain.com/feed/';
$rss->description = $rss->title;
$rss->date = $items[0]['date'];
$rss->items = $items;
echo $rss->generate();
```