The solution is to explicitly use string keys and avoid implicit type conversions.  The use of explicit string keys makes the behavior predictable, eliminating unexpected behavior.

```php
<?php
$myArray = array('a' => 1, 'b' => 2);
$myArray['a'] += 1;
$myArray['c'] = 3;
$myArray['a'] += 1;

print_r($myArray);
?>
```
To prevent this, always explicitly use string keys when you need string keys, or use strictly integer keys if you intend for keys to be treated as integers.

```php
<?php
$myArray = ['a' => 1, 'b' => 2]; //Use explicit string keys
$myArray['a']++;
$myArray['c'] = 3;
$myArray['a']++;

print_r($myArray); // Output will be predictable
?>
```
This ensures the array values are modified in the correct way and avoids unexpected behavior.