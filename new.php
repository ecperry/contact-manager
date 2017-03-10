<?php
 include 'header.php';
?>

<h1>Create Contact</h1>
<form method="POST" action="/create.php">
  <input type="hidden" name="id" id="contact_id" value="" />

<div class="col-lg-6">
  <div class="form-group">
    <label for="contact_first">First</label>
    <input class="form-control" type="text" name="first" id="contact_first" value="" placeholder="contact first name" />
  </div>
</div>

<div class="col-lg-6">
  <div class="form-group">
    <label for="contact_last">Last</label>
    <input class="form-control" type="text" name="last" id="contact_last" value="" placeholder="contact last name" />
  </div>
</div>

<div class="col-lg-12">
  <div class="form-group">
    <label for="contact_title">Title</label>
    <input class="form-control" type="text" name="title" id="contact_title" value="" placeholder="contact title" />
  </div>
</div>

<div class="col-lg-12">
  <div class="form-group">
    <label for="contact_address">Address</label>
    <input class="form-control" type="text" name="address" id="contact_address" value="" placeholder="contact address" />
  </div>
</div>

<div class="col-lg-4">
  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="contact_city" value="" placeholder="contact city" />
  </div>
</div>

<div class="col-lg-4">
  <div class="form-group">
    <label for="contact_state">State</label>
    <select class="form-control" type="text" name="state"  id="contact_state" value="" placeholder="contact state">
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
    <input class="form-control" type="text" name="zip" id="contact_zip" value="" placeholder="contact zip" />
  </div>
</div>

<div class="col-lg-6">
  <div class="form-group">
    <label for="contact_phone">Phone</label>
    <input class="form-control" type="text" name="phone" id="contact_phone" value="" placeholder="contact phone" />
  </div>
</div>

<div class="col-lg-6">
  <div class="form-group">
    <label for="contact_notes">Notes</label>
    <input class="form-control" type="text" name="notes" id="contact_notes" value="" placeholder="contact notes" />
  </div>
</div>

<button class="btn new">Create New Contact</button>
</form>

<?php
include 'footer.php';
?>
