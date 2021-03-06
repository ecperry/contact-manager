<?php
//modified from Seth Wright's code: https://github.com/asethwright/php-task-app/blob/master/index.php
//this page creates the html template to show all current contact information and display changes
//I'm using php to fetch the values from my SQL database and display them in a table
  include 'header.php';
  $sort = array_key_exists('sort', $_GET) ? $_GET['sort'] : null;
  if ($sort !== null) {
    $contacts = $db->query('SELECT * FROM contacts ORDER BY priority ' . $sort)->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
  }
?>

<?php if (array_key_exists('deleted', $_GET)) : ?>
<div class="alert alert-danger">
  <p><strong>Contact Deleted!</strong> The contact was removed.</p>
</div>
<?php endif; ?>
<br>
<br>
<br>
<br>
<p class= "lead" style="text-align:center">People, even more than things, have to be restored, renewed, revived, reclaimed, and redeemed; never throw out anyone.</p>
<h3 style="text-align:center"> -Audrey Hepburn</h3>
<br>
<br>
<br>
<h1 style="text-align:center">&#8659;</h1>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1>All Contacts <span class="text-muted">(<?= count($contacts); ?>)</span></h1>
<div class= "container">
  <table class=" table table-responsive table-hover ">
    <thead>
      <th class="col-md-1">ID</th>
      <th class="col-md-1">First</th>
      <th class="col-md-1">Last</th>
      <th class="col-md-1">Title</th>
      <th class="col-md-1">Address</th>
      <th class="col-md-1">City</th>
      <th class="col-md-1">State</th>
      <th class="col-md-1">Zip</th>
      <th class="col-md-1">Phone</th>
      <th>Notes</th>
    </thead>
    <tbody>
      <?php foreach($contacts as $contact) : ?>
      <tr>
        <td><a class= "stuff" href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['id']; ?></a></td>
        <td><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['first']; ?></a></td>
        <td><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['last']; ?></a></td>
        <td><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['title']; ?></a></td>
        <td><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['address']; ?></a></td>
        <td><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['city']; ?></a></td>
        <td><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['state']; ?></a></td>
        <td><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['zip']; ?></a></td>
        <td><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['phone']; ?></a></td>
        <td><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['notes']?></a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php
include 'footer.php';
?>
