<?php

namespace Bundle\GuestbookBundle\Controller;

use Symfony\Framework\DoctrineBundle\Controller\DoctrineController as Controller,
    Bundle\GuestbookBundle\Entities\Entry,
    Doctrine\ORM\QueryBuilder;

class GuestbookController extends Controller
{
  public function indexAction()
  {
    $em = $this->getEntityManager();
    $qb = $em->createQueryBuilder()
      ->select('e')
      ->from('GuestbookBundle:Entry', 'e');

    $query = $qb->getQuery();
    $entries = $query->execute();

    return $this->render('GuestbookBundle:Guestbook:index', array(
      'entries' => $entries,
      'num_entries' => count($entries)
    ));
  }

  public function postAction()
  {
    $request = $this->getRequest();
    $missingFields = array();
    $requiredFields = array('name', 'email_address', 'body');
    foreach ($requiredFields as $requiredField)
    {
      if (!$request->get($requiredField))
      {
        $missingFields[] = $requiredField;
      }
    }
    if ($missingFields)
    {
      $this->getUser()->setFlash('error', sprintf('You have some missing required fields: %s', implode(', ', $missingFields)));
      return $this->redirect($this->generateUrl('guestbook'));
    }

    $em = $this->getEntityManager();

    $entry = new Entry();
    $entry->setName($request->get('name'));
    $entry->setEmailAddress($request->get('email_address'));
    $entry->setBody($request->get('body'));

    $em->persist($entry);
    $em->flush();

    return $this->redirect($this->generateUrl('guestbook').sprintf('#guestbook_entry_%s', $entry->getId()));
  }
}