<?php
use PHPUnit\Framework\TestCase;

class HashTest extends TestCase
{
    public function testFailure()
    {
        include_once 'classes/Hash.php';

        $testSalt = Hash::salt(2);
        $testSalted = Hash::make("Random String", $testSalt);
        $this->assertTrue((strlen($testSalted)) == 64);
    }
}
?>
