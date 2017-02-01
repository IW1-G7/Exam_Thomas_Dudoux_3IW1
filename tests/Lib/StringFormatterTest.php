<?php

  namespace tests\Lib;

  use Lib\StringFormatter;

  class StringFormatterTest extends \PHPUnit_Framework_TestCase {

    public function testPrefix() {

      // Déclaration de la classe
      $string = new StringFormatter();

      // On execute la méthode que l'on veut tester
      $result = $string->prefix("prefix", "test");

      // Verification du resultat
      $this->assertEquals($result, "prefixtest");

      // On effectue un second test avec des arguments differents (ici le CamelCase à true)
      $result2 = $string->prefix("prefix", "test2", true);

      // Verification du resultat
      $this->assertEquals($result2, "prefixTest2");
    }

    public function testSuffix() {

      // Déclaration de la classe
      $string = new StringFormatter();

      // On execute la méthode que l'on veut tester
      $result = $string->suffix("suffix", "test");

      // Verification du resultat
      $this->assertEquals($result, "testsuffix");

      // On effectue un second test avec des arguments differents (ici le CamelCase à true)
      $result2 = $string->prefix("suffix", "other", true);

      // Verification du resultat
      $this->assertEquals($result2, "suffixOther");

    }

    public function testToCamelCase() {

      // Déclaration de la classe
      $string = new StringFormatter();

      // On execute la méthode que l'on veut tester
      $result = $string->toCamelCase("string", "tested");

      // Verification du resultat
      $this->assertEquals($result, "stringTested");
    }

    public function testConcatString() {

      // Déclaration de la classe
      $string = new StringFormatter();

      // On execute la méthode que l'on veut tester
      $result = $string->concatString("ATest", "again");

      // Vérification le resultat
      $this->assertEquals($result, "ATestagain");

    }

  }
