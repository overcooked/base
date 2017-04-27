<?php
use PHPUnit\Framework\TestCase;

/**
 * Test the sanitize function.
 * Creates a string to be sanitized, and confirms that
 * the output is an empty string.
 * @author Team Point.
 * @version 1.0
 */
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
