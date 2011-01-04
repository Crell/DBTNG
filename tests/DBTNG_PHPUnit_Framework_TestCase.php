<?php

class DBTNG_PHPUnit_Framework_TestCase extends PHPUnit_Framework_TestCase {

  public function __construct() {
    $settings = realpath(dirname(__FILE__) . '/../settings.php');
    require_once $settings;
  }

}
