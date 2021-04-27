<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/contacts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<br>
<h4><?php echo $data['contact']->name; ?></h4>
<h4><?php echo $data['contact']->email; ?></h4>
<h4><?php echo $data['contact']->address; ?></h4>
<h4><?php echo $data['contact']->number; ?></h4>




<?php if($data['contact']->user_id == $_SESSION['user_id']) : ?>
  <hr>
  <a href="<?php echo URLROOT; ?>/contacts/edit/<?php echo $data['contact']->id; ?>" class="btn btn-dark">Edit</a>

  <form class="pull-right" action="<?php echo URLROOT; ?>/contacts/delete/<?php echo $data['contact']->id; ?>" method="post">
    <input type="submit" value="Delete" class="btn btn-danger">
  </form>
<?php endif; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>