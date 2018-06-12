# @l@y encryption

Encrypt and safe your string into @l@y string. This encryption just support a-z and 0-9 character only. You cant use symbol in this encrypter. But I'll fix this in the future

## Usage
```
<?php
include 'encrypter.php';

$alay = new alay();
echo $alay->encrypt("hello world");
?>
```

it will be shown like
```
|-|3||0w012|d
```