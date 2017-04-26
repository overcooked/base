<?php
use PHPUnit\Framework\TestCase;

class TokenTest extends TestCase
{
    public function testFailure()
    {
        include_once 'classes/Token.php';

        $testToken = new Token;
        $this->assertTrue(isset($testToken));
    }
}
?>
