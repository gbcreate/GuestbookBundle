<?php

namespace Bundle\GuestbookBundle\Entities;

class Entry
{
  private
    $id,
    $createdAt,
    $name,
    $emailAddress,
    $body;

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