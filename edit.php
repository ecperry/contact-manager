<?php
  include 'header.php';
  $id = $_GET['id'];
  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $contact = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<?php if (array_key_exists('updated', $_GET)) : ?>
<div class="alert alert-success">
  <p><strong>Update successful!</strong> Your contact was updated.</p>
</div>
<?php endif; ?>

<?php if (array_key_exists('created', $_GET)) : ?>
<div class="alert alert-info">
  <p><strong>Contact created!</strong> Your contact was successfully created.</p>
</div>
<?php endif; ?>

<a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-danger btn-xs pull-right btn-delete">Delete Contact</a>
<h1>Edit Contact</h1>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <div class="form-group">
    <label for="contact_first">First</label>
    <input class="form-control" type="text" name="title" id="contact_first" value="" placeholder="contact first name" />
  </div>

  <div class="form-group">
    <label for="contact_last">Last</label>
    <input class="form-control" type="text" name="last" id="contact_last" value="" placeholder="contact last name" />
  </div>

  <div class="form-group">
    <label for="contact_title">Title</label>
    <input class="form-control" type="text" name="title" id="contact_title" value="<?= $contact['title']; ?>" />
  </div>
  <div class="form-group">
    <label for="contact_title">Title</label>
    <input class="form-control" type="text" name="title" id="contact_title" value="" placeholder="contact title" />
  </div>

  <div class="form-group">
    <label for="contact_address">Address</label>
    <input class="form-control" type="text" name="address" id="contact_address" value="" placeholder="contact address" />
  </div>

  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="contact_city" value="" placeholder="contact city" />
  </div>

  <div class="form-group">
    <label for="contact_priority">State</label>
    <select name="priority" id="contact_priority" value="<?= $contact['priority']; ?>" class="form-control">
      <option>AL</option>
      <option>AK</option>
      <option>AZ</option>
      <option>AR</option>
      <option>CA</option>
      <option>CO</option>
      <option>CT</option>
      <option>DE</option>
      <option>NC</option>
    </select>
  </div>

  <div class="form-group">
    <label for="contact_zip">Zip</label>
    <input class="form-control" type="text" name="zip" id="contact_zip" value="" placeholder="contact zip" />
  </div>

  <div class="form-group">
    <label for="contact_phone">Phone</label>
    <input class="form-control" type="text" name="phone" id="contact_phone" value="" placeholder="contact phone" />
  </div>

  <div class="form-group">
    <label for="contact_notes">Notes</label>
    <input class="form-control" type="text" name="notes" id="contact_notes" value="" placeholder="contact notes" />
  </div>

  <button class="btn btn-primary">Save Contact</button>
</form>

<?php include 'footer.php'; ?>
