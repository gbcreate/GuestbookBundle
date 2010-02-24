<?php

namespace Bundle\GuestbookBundle\Entities;

/**
 * @Entity
 * @Table(name="guestbook_entry")
 */
class Entry
{
  /**
   * @Id @Column(type="integer")
   * @GeneratedValue
   */
  private $id;

  /**
   * @Column(type="datetime", name="created_at")
   */
  private $createdAt;

  /**
   * @Column(type="string", length=255)
   */
  private $name;

  /**
   * @Column(type="string", length=255, name="email_address")
   */
  private $emailAddress;

  /**
   * @Column(type="text")
   */
  private $body;

  public function __construct()
  {
    $this->createdAt = new \DateTime();
  }

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getEmailAddress()
  {
    return $this->emailAddress;
  }

  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }

  public function getBody()
  {
    return $this->body;
  }

  public function setBody($body)
  {
    $this->body = $body;
  }

  public function getCreatedAt()
  {
    return $this->createdAt;
  }
}