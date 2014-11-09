<?

namespace Killsoft;

require_once 'Sum.php';
 
require_once 'PHPUnit/Framework.php';
 
class SumTest extends PHPUnit_Framework_TestCase
{
    public function testAddValues()
    {
     $sum = new Sum();
     $this->assertEquals(
              3, $sum->addValues(1,2));
    }   
}
