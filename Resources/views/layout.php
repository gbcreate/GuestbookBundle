<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Symfony 2 Guestbook</title>
    <link href="<?php echo $view->assets->getUrl('bundles/guestbook/css/guestbook.css') ?>" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="guestbook_wrapper">
      <div id="guestbook_header">
        <h1>Symfony 2 Guestbook</h1>
        <h2>Pilot project for Symfony 2 DoctrineBundle development</h2>
      </div>
      <div id="guestbook_flash">
        <?php if ($notice = $view->user->getFlash('notice')): ?>
          <div id="guestbook_flash_notice">
            <?php echo $notice ?>
          </div>
        <?php endif; ?>
        <?php if ($error = $view->user->getFlash('error')): ?>
          <div id="guestbook_flash_error">
            <?php echo $error ?>
          </div>
        <?php endif; ?>
      </div>
      <div id="guestbook_content">
        <?php $view->slots->output('_content') ?>
      </div>
    </div>
  </body>
</html>