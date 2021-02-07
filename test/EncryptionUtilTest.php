<?php
require_once "../src/EncryptionUtil.php";

use CodeCauldron\Security\Encryption\EncryptionUtil;
use PHPUnit\Framework\TestCase;

class EncryptionUtilTest extends TestCase
{
    public function testShouldEncrypt()
    {
        $key = "abc123abc";
        $message = "This is a test";
        $encryptedMessage = "MzUwQTBBNDIxMjVBMTI0MjAyNDExNjA2NDI0Ng==";

        $this->assertEquals($encryptedMessage, base64_encode(EncryptionUtil::encrypt($message, $key)));
        $this->assertNotEquals($message, base64_encode(EncryptionUtil::encrypt($message, $key)));
    }

    public function testShouldDecrypt()
    {
        $key = "abc123abc";
        $message = "This is a test";
        $encryptedMessage = "MzUwQTBBNDIxMjVBMTI0MjAyNDExNjA2NDI0Ng==";

        $this->assertEquals($message, EncryptionUtil::decrypt(base64_decode($encryptedMessage), $key));
        $this->assertNotEquals($encryptedMessage, EncryptionUtil::decrypt(base64_decode($encryptedMessage), $key));
    }
}
