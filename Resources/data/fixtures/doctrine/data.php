<?php

use Bundle\GuestbookBundle\Entities\Entry;

$post = new Entry();
$post->setName('Jonathan H. Wage');
$post->setEmailAddress('jonwage@gmail.com');
$post->setBody('Hi, I really like Symfony 2 and Doctrine 2!');