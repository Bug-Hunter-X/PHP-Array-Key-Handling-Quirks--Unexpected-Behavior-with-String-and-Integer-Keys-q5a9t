In PHP, a common yet subtle issue arises when dealing with array keys.  Consider this scenario:

```php
$myArray = array('a' => 1, 'b' => 2);
$myArray['a'] += 1;
$myArray['c'] = 3;
$myArray['a'] += 1;

print_r($myArray);
```

This might unexpectedly produce: `Array ( [a] => 3 [b] => 2 [c] => 3 )` instead of `Array ( [a] => 3 [b] => 2 [c] => 3)`.

The problem lies in how PHP handles integer keys. Although it seems like 'a' is a string key, it's actually treated as an integer (0) during array operations.  If you later add a numerical key, it changes the order and overwrites.

Another similar issue, if the same code is using an associative array, it would behave correctly. 