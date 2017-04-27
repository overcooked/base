<?php
use PHPUnit\Framework\TestCase;

class SanitizeTest extends TestCase
{
    public function testFailure()
    {
        include_once 'functions/sanitize.php';

        $sanitizeTestInput = "\x8F!!!";
        $sanitized = escape($sanitizeTestInput);
        $this->assertTrue($sanitized == "");
    }
}
?>
