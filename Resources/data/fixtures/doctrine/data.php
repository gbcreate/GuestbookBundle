<?php

use Bundle\GuestbookBundle\Entities\Entry;

$em = $this->container->getDoctrine_ORM_DefaultEntityManagerService();

$post = new Entry();
$post->setName('Jonathan H. Wage');
$post->setEmailAddress('jonwage@gmail.com');
$post->setBody('Hi, I really like Symfony 2 and Doctrine 2!');