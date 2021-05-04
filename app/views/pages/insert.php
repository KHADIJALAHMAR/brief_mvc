<?php require APPROOT . '/views/inc/header.php'; ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo URLROOT; ?>/Contact/insert" method="POST">
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" name="contact_name" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control"  name="contact_email" placeholder="email">
    </div>
    <div class="col">
      <input type="text" class="form-control"  name="contact_phone" placeholder="Phone">
    </div>
    <div class="col">
      <input type="text" class="form-control"  name="contact_address" placeholder="address">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="enter" name="submit">
        </div>
  </div>
  <?php require APPROOT . '/views/inc/footer.php'; ?>
</form>
</body>
</html>
