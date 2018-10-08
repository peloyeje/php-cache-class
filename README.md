# PHP Cache Class
A lightweight php caching class, massive rewrite of cosenary's cache class (link)
**Supported caches :** filesystem
Used for instance in [FeatherBB](http://featherbb.org)

### Requirements
* PHP 5.3

### Changelog
- **v.1.0**
	- Code rewrite : settings storage, internal cache handling
	- Add increment, decrement functions

### Let's see some code

```php
$cache = new Cache(array('name' => 'filecache',
						 'path' => 'cache/',
						 'extension' => '.cache'));

$cache->store('user', array(info));
$cache->retrieve('user');

// Overwrite
$cache->store('user', array(info2));

// Get settings
$cache->getSettings();

// Purge cache
$cache->flush();
```

### Credits

Thanks to cosenary for parts of the code logic
