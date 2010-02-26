<?php

namespace Bundle\GuestbookBundle\Entities;

/**
 * @Entity
 * @Table(name="guestbook_entry")
 */
class Entry
{
    /**
     * @Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @Column(name="email_address", type="string", length=255)
     */
    private $emailAddress;

    /**
     * @Column(name="body", type="text")
     */
    private $body;

    /**
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    /**
     * Set createdAt
     */
    public function setCreatedAt($value)
    {
        $this->createdAt = $value;
    }

    /**
     * Get createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set name
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * Get name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set emailAddress
     */
    public function setEmailAddress($value)
    {
        $this->emailAddress = $value;
    }

    /**
     * Get emailAddress
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set body
     */
    public function setBody($value)
    {
        $this->body = $value;
    }

    /**
     * Get body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Get id
     */
    public function getId()
    {
        return $this->id;
    }
}