# VVF_PHP

Start dev server:

```
    php -S localhost:8090
```

PHP `Resource` data type: a special variable, holding a reference to an external resource. Resources are created and used by special functions. An advanced topic.

## PHP Array Operators

The PHP array operators are used to compare arrays.
|Operator|Name|Example|
|-|-|-|
| `+` | Union | `$x + $y` |
| `==` | Equality | `$x == $y` |
| `===` | Identity | `$x === $y` |
| `!=` | Inequality | `$x != $y` |
| `<>` | Inequality | `$x <> $y` |
| `!==` | Non-identity | `$x !== $y` |

## PHP Conditional Assignment Operators

The PHP conditional assignment operators are used to set a value depending on conditions:
|Operator|Name|Example|
|-|-|-|
| `??` | Null coalescing | `$x = expr1 ?? expr2` |

## PHP Sort Functions For Arrays

In this chapter, we will go through the following PHP array sort functions:

-   `sort()` - sort arrays in ascending order
-   `rsort()` - sort arrays in descending order
-   `asort()` - sort associative arrays in ascending order, according to the value
-   `ksort()` - sort associative arrays in ascending order, according to the key
-   `arsort()` - sort associative arrays in descending order, according to the value
-   `krsort()` - sort associative arrays in descending order, according to the key

## PHP Global Variables - Superglobals

Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

The PHP superglobal variables are: `$GLOBALS`, `$_SERVER`, `$_REQUEST`, `$_POST`, `$_GET`, `$_FILES`, `$_ENV`, `$_COOKIE`, `$_SESSION`.

## PHP Composer - `update` Vs `install`

`composer update` is mostly used in the 'development' phase, to upgrade our project packages. `composer install` is primarily used in the 'deploying phase' to install our application on a production server or on a testing environment, using the same dependencies stored in the `composer.lock` file created by `composer update`.

Read more [here](https://riptutorial.com/php/example/7331/difference-between--composer-install--and--composer-update-).
