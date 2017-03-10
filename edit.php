<?php
//modified from Seth Wright's code: https://github.com/asethwright/php-task-app/blob/master/edit.php
//state dropdown added
//this page is filling a form with the existing database values of an id for the given fields

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

<a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-danger btn-xs pull-right btn-delete delete">Delete Contact</a>
<h1>Edit Contact</h1>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <div class="col-lg-6">
    <div class="form-group">
      <label for="contact_first">First</label>
      <input class="form-control" type="text" name="first" id="contact_first" value="<?= $contact['first']; ?>" placeholder="contact first name" />
    </div>
  </div>

  <div class="col-lg-6">
    <div class="form-group">
      <label for="contact_last">Last</label>
      <input class="form-control" type="text" name="last" id="contact_last" value="<?= $contact['last']; ?>" placeholder="contact last name" />
    </div>
  </div>

  <div class="col-lg-12">
    <div class="form-group">
      <label for="contact_title">Title</label>
      <input class="form-control" type="text" name="title" id="contact_title" value="<?= $contact['title']; ?>" placeholder="contact title"/>
    </div>
  </div>

  <div class="col-lg-12">
    <div class="form-group">
      <label for="contact_address">Address</label>
      <input class="form-control" type="text" name="address" id="contact_address" value="<?= $contact['address']; ?>" placeholder="contact address" />
    </div>
  </div>

  <div class="col-lg-4">
    <div class="form-group">
      <label for="contact_city">City</label>
      <input class="form-control" type="text" name="city" id="contact_city" value="<?= $contact['city']; ?>" placeholder="contact city" />
    </div>
  </div>

  <div class="col-lg-4">
    <div class="form-group">
      <label for="contact_state">State</label>
      <select class="form-control" type="text" name="state" id="contact_state" value="<?= $contact['state']; ?>">
        <option>AL</option>
        <option>AK</option>
        <option>AZ</option>
        <option>AR</option>
        <option>CA</option>
        <option>CO</option>
        <option>CT</option>
        <option>DC</option>
        <option>DE</option>
        <option>FL</option>
        <option>GA</option>
        <option>HI</option>
        <option>ID</option>
        <option>IL</option>
        <option>IN</option>
        <option>IA</option>
        <option>KS</option>
        <option>KY</option>
        <option>LA</option>
        <option>ME</option>
        <option>MD</option>
        <option>MA</option>
        <option>MI</option>
        <option>MN</option>
        <option>MS</option>
        <option>MO</option>
        <option>MT</option>
        <option>NE</option>
        <option>NV</option>
        <option>NH</option>
        <option>NJ</option>
        <option>NY</option>
        <option>NC</option>
        <option>ND</option>
        <option>OH</option>
        <option>OK</option>
        <option>OR</option>
        <option>PA</option>
        <option>RI</option>
        <option>SC</option>
        <option>SD</option>
        <option>TN</option>
        <option>TX</option>
        <option>UT</option>
        <option>VT</option>
        <option>VA</option>
        <option>WA</option>
        <option>WV</option>
        <option>WI</option>
        <option>WY</option>
      </select>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="form-group">
      <label for="contact_zip">Zip</label>
      <input class="form-control" type="text" name="zip" id="contact_zip" value="<?= $contact['zip']; ?>" placeholder="contact zip" />
    </div>
  </div>

  <div class="col-lg-6">
    <div class="form-group">
      <label for="contact_phone">Phone</label>
      <input class="form-control" type="text" name="phone" id="contact_phone" value="<?= $contact['phone']; ?>" placeholder="contact phone" />
    </div>
  </div>

  <div class="col-lg-6">
    <div class="form-group">
      <label for="contact_notes">Notes</label>
      <input class="form-control" type="text" name="notes" id="contact_notes" value="<?= $contact['notes']; ?>" placeholder="contact notes" />
    </div>
  </div>

  <button class="btn btn-primary new">Save Contact</button>
</form>

<?php
include 'footer.php';
?>
