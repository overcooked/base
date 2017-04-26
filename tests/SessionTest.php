<?php
use PHPUnit\Framework\TestCase;

class SessionTest extends TestCase
{
    public function testFailure()
    {
        include_once 'classes/Session.php';

        $testSession = new Session;
        $this->assertTrue(isset($testSession));
    }
}
?>
