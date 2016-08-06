<?php
/**
 * TapzooTest
 *
 * PHP Version 5.3
 *
 * @category Test
 * @package  Boscot
 * @license  http://www.gnu.org/licenses/gpl-3.0.txt GPL v3
 * @link     None
 */

require_once __DIR__."/../vendor/autoload.php";

use Boscot\Test\GameTest;


/**
 * Class: TapzooTest
 * 
 * Test Tapzoo classes
 *
 * @category Test
 * @package  Boscot
 * @license  http://www.gnu.org/licenses/gpl-3.0.txt GPL v3
 * @link     None
 * @see      PHPUnit_Framework_TestCase
 */
class TapzooTest extends GameTest
{
	public $domain = "tapzoo.pocketgems.com";

    /**
     * Configuration
     *
     * Create Tapzoo object
     *
     * @return void
     */
    protected function setUp()
	{

    }

    
    /**
     * Test all action method of the controller
     *
     * @return void
     */
    public function testHack()
	{
        // Do nothing
    }
}
