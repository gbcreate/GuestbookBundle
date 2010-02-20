<?php

namespace Bundle\GuestbookBundle\Tests;

require_once 'PHPUnit/Framework.php';
require_once __DIR__.'/Entities/EntryTest.php';

class AllTests
{
  public static function suite()
  {
    $suite = new \PHPUnit_Framework_TestSuite('GuestbookBundle');

    $suite->addTestSuite('\Bundle\GuestbookBundle\Tests\Entities\EntryTest');

    return $suite;
  }
}