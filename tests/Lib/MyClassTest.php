<?php

  namespace tests\Lib;

  use Lib\MyClass;

  class MyClassTest extends \PHPUnit_Framework_TestCase {

    public function testIsBlue() {
      $myclass = new MyClass();
      $result = $myclass->isBlue('blue');

      $this->assertSame($result, 'like the table');
    }

  }
