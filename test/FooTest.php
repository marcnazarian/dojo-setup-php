<?php 

require(__DIR__.'/../src/Foo.php');

class FooTest extends PHPUnit_Framework_TestCase {

  /** @test */
  public function redTestToStart() {
    $foo = new Foo();
    $this->assertEquals('foo', $foo->foo());
  }

}

?>
