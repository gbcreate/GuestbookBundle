<?php $view->extend('GuestbookBundle::layout') ?>

<h3>
  <?php if ($num_entries > 1): ?>
    This guestbook has been signed <?php echo count($entries) ?> times.
  <?php elseif ($num_entries === 1): ?>
    This guestbook has been signed 1 time.
  <?php else: ?>
    This guestbook has not been signed yet.
  <?php endif; ?>
  <a href="#sign">Sign the guestbook now!</a>
</h3>

<div id="guestbook_entries">
  <?php foreach ($entries as $entry): ?>
    <a name="guestbook_entry_<?php echo $entry->getId() ?>" />
    <div class="guestbook_entry">
      <h4>Posted by <strong><a href="mailto: <?php echo $entry->getEmailAddress() ?>"><?php echo $entry->getName() ?></a></strong> on <strong><?php echo $entry->getCreatedAt()->format('m/d/Y h:i:s A') ?></strong>.</h4>
      <p><?php echo $entry->getBody() ?></p>
    </div>
  <?php endforeach; ?>
</div>

<div id="guestbook_form">
  <a name="sign" />
  <h3>Submit your new guestbook signature.</h3>
  <form action="<?php echo $view->router->generate('guestbook_post') ?>" method="POST">
    <div class="row">
      <label for="name">Your Name</label>
      <input type="text" name="name" />
    </div>
    <div class="row">
      <label for="name">Your E-Mail Address</label>
      <input type="text" name="email_address" />
    </div>
    <div class="row">
      <label for="body">Body</label>
      <textarea name="body"></textarea>
    </div>
    <input type="submit" name="submit" value="Submit" />
  </form>
</div>