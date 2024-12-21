# PHP strpos() Type Juggling Bug

This repository demonstrates a common, yet subtle, bug in PHP related to type juggling with the `strpos()` function.  The `strpos()` function returns `false` if the needle is not found and `0` if it is found at the beginning of the haystack. Because of PHP's loose typing, `false` is evaluated as 0 in boolean contexts which leads to unexpected outcomes when directly comparing the result of `strpos()` with `false`.

The `bug.php` file shows the buggy code.  `bugSolution.php` offers the correct implementation.