<?php

namespace Bundle\GuestbookBundle\Tests\Entities;

use Bundle\GuestbookBundle\Entities\Entry;

require_once 'PHPUnit/Framework.php';
require_once __DIR__.'/../../Entities/Entry.php';

class EntryTest extends \PHPUnit_Framework_TestCase
{
  public function testCreatedAtSetOnConstruction()
  {
    $entry = new Entry();
    $this->assertTrue($entry->getCreatedAt() instanceof \DateTime);
  }

  public function testSetAndGetName()
  {
    $entry = new Entry();
    $entry->setName('Jonathan H. Wage');
    $this->assertEquals('Jonathan H. Wage', $entry->getName());
  }

  public function testSetAndGetEmailAddress()
  {
    $entry = new Entry();
    $entry->setEmailAddress('jonwage@gmail.com');
    $this->assertEquals('jonwage@gmail.com', $entry->getEmailAddress());
  }

  public function testSetAndGetBody()
  {
    $entry = new Entry();
    $entry->setBody('Testing');
    $this->assertEquals('Testing', $entry->getBody());
  }

  public function testGetId()
  {
    $entry = new Entry();
    $this->assertTrue(is_null($entry->getId()));
  }
}