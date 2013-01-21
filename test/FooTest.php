<?php 

require(__DIR__.'/../src/Foo.php');

class FooTest extends PHPUnit_Framework_TestCase {

  public function testToStartOnARedTest() {
    $foo = new Foo();
    $this->assertEquals('foo', $foo->foo());
  }

}

?>
