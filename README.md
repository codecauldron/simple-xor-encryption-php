# Simple XOR Encryption in PHP
This is a demo for a simple example of XOR encryption. 
The code belongs to a tutorial that you can find [here](https://www.codecauldron.dev/2021/02/12/simple-xor-encryption-in-php/).
## Prerequisites
* PHP 7.x 
* composer (only needed to install dependencies for the unit tests)
* npm (only needed to install dependencies for the demo)

## How to use
In the `src` folder you will find the `EncryptionUtil.php` file. 
This class contains two static methods, `encrypt` and `decrypt`. Both methods take two strings as parameters, a message
and a key. The message can be encrypted (for use with the `decrypt` method), or clear text (for use with the `encrypt` method).

```php
EncryptionUtil::encrypt("message", "key");
EncryptionUtil::decrypt("encryptedMessage", "key");
```

I would recommend encoding the encrypted text into base64 or something similar to avoid it containing characters that 
could be filtered out if posted online. You can se an example of this in the `do.php` file in the `demo` directory.

