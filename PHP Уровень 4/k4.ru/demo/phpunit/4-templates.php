<?php
// Применение всех возможных шаблонных методов
class TemplateMethodsTest extends PHPUnit_Framework_TestCase{

  public static function setUpBeforeClass(){
    print __METHOD__ . "\n";
  }

  protected function setUp(){
    print __METHOD__ . "\n";
  }

  protected function assertPreConditions(){
    print __METHOD__ . "\n";
  }

  public function testOne(){
    print __METHOD__ . "\n";
    $this->assertTrue(TRUE);
  }

  public function testTwo(){
    print __METHOD__ . "\n";
    $this->assertTrue(FALSE);
  }

  protected function assertPostConditions(){
    print __METHOD__ . "\n";
  }

  protected function tearDown(){
    print __METHOD__ . "\n";
  }

  public static function tearDownAfterClass(){
    print __METHOD__ . "\n";
  }

  protected function onNotSuccessfulTest(Exception $e){
    print __METHOD__ . "\n";
    throw $e;
  }
}
