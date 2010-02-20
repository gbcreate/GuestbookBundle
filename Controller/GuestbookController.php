<?php

namespace Bundle\GuestbookBundle\Controller;

use Symfony\Framework\DoctrineBundle\Controller\DoctrineController as Controller,
    Bundle\GuestbookBundle\Entities\Entry,
    Doctrine\ORM\QueryBuilder;

class GuestbookController extends Controller
{
  public function indexAction()
  {
    $qb = $this->getEntityManager()->createQueryBuilder()
      ->select('e')
      ->from('Bundle\GuestbookBundle\Entities\Entry', 'e');

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
      if (!$request->getParameter($requiredField))
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
    $entry->setName($request->getParameter('name'));
    $entry->setEmailAddress($request->getParameter('email_address'));
    $entry->setBody($request->getParameter('body'));

    $em->persist($entry);
    $em->flush();

    return $this->redirect($this->generateUrl('guestbook').sprintf('#guestbook_entry_%s', $entry->getId()));
  }
}