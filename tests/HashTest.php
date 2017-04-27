<?php
use PHPUnit\Framework\TestCase;

/**
 * Test the hash class.
 * Creates a salt of length 2.
 * Salts string "Random String" using the newly
 * generated salt and confirms that it has a
 * length of 64. (sha256)
 * @author Team Point.
 * @version 1.0
 */
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
