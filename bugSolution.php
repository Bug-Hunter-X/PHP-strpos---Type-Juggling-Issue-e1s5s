The correct way to check for the existence of a substring using `strpos()` is to use the strict comparison operator (`!==`) to avoid type juggling.

```php
<?php
$haystack = "Hello world";
$needle = "world";

if (strpos($haystack, $needle) !== false) {
  echo "Found!";
} else {
  echo "Not found!";
}

$haystack = "Hello world";
$needle = "Hello";

if (strpos($haystack, $needle) !== false) {
  echo "Found!";
} else {
  echo "Not found!";
}

$haystack = "Hello world";
$needle = "Goodbye";

if (strpos($haystack, $needle) !== false) {
  echo "Found!";
} else {
  echo "Not found!";
}
?>
```
Using the strict inequality (`!==`) ensures that both the value and the type are compared, preventing the `false` and `0` ambiguity.