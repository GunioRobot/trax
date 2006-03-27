<?php
/**
 *  File for the TraxErrorTest class
 *
 * (PHP 5)
 *
 * @package PHPonTraxTest
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright (c) Walter O. Haas 2006
 * @version $Id$
 * @author Walt Haas <haas@xmission.com>
 */

echo "testing TraxError\n";
require_once 'testenv.php';

// Call TraxErrorTest::main() if this source file is executed directly.
if (!defined("PHPUnit2_MAIN_METHOD")) {
    define("PHPUnit2_MAIN_METHOD", "TraxErrorTest::main");
}

require_once "PHPUnit2/Framework/TestCase.php";
require_once "PHPUnit2/Framework/TestSuite.php";

// You may remove the following line when all tests have been implemented.
require_once "PHPUnit2/Framework/IncompleteTestError.php";

require_once "trax_exceptions.php";

/**
 * Test class for TraxError.
 * Generated by PHPUnit2_Util_Skeleton on 2006-03-01 at 13:17:32.
 */
class TraxErrorTest extends PHPUnit2_Framework_TestCase {
    /**
     * Runs the test methods of this class.
     *
     * @access public
     * @static
     */
    public static function main() {
        require_once "PHPUnit2/TextUI/TestRunner.php";

        $suite  = new PHPUnit2_Framework_TestSuite("TraxErrorTest");
        $result = PHPUnit2_TextUI_TestRunner::run($suite);
    }

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @access protected
     */
    protected function setUp() {
    }

    /**
     * Tears down the fixture, for example, close a network connection.
     * This method is called after a test is executed.
     *
     * @access protected
     */
    protected function tearDown() {
    }

    /**
     *  Test exception with default value of code
     */
    public function testDefault_code() {
        try {
            throw new TraxError('text1','text2');
        }
        catch(Exception $e) {
            $this->assertTrue(is_a($e,'TraxError'));
            $this->assertEquals('text1',$e->getMessage());
            $this->assertEquals('text1',$e->error_message);
            $this->assertEquals('text2',$e->error_heading);
            $this->assertEquals('500',$e->error_code);
            return;
        }
        $this->fail('TraxError exception with default code not raised');
    }

    /**
     *  Test exception with specified of code
     */
    public function testSpecified_code() {
        try {
            throw new TraxError('text3','text4', 250);
        }
        catch(Exception $e) {
            $this->assertTrue(is_a($e,'TraxError'));
            $this->assertEquals('text3',$e->getMessage());
            $this->assertEquals('text3',$e->error_message);
            $this->assertEquals('text4',$e->error_heading);
            $this->assertEquals(250,$e->error_code);
            return;
        }
        $this->fail('TraxError exception with code 250 not raised');
    }
}

// Call TraxErrorTest::main() if this source file is executed directly.
if (PHPUnit2_MAIN_METHOD == "TraxErrorTest::main") {
    TraxErrorTest::main();
}

// -- set Emacs parameters --
// Local variables:
// tab-width: 4
// c-basic-offset: 4
// c-hanging-comment-ender-p: nil
// indent-tabs-mode: nil
// End:
?>
