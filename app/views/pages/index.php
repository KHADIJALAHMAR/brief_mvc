<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="jumbotron jumbotron-flud text-center">
    <div class="container">
    <div class="row">
          <p class="col font-weight-bold">id</p>
          <p class="col font-weight-bold">name</p>
          <p class="col font-weight-bold">email</p>
          <p class="col font-weight-bold">phone</p>
          <p class="col font-weight-bold">address</p>
    </div>
    <?php foreach ($data as $row):?>
      <div class="row">
        <p class="col"><?php echo $row->id ?></p>
        <p class="col"><?php echo $row->name ?></p>
        <p class="col"><?php echo $row->email?></p>
        <p class="col"><?php echo $row->phone ?></p>
        <p class="col"><?php echo $row->address ?></p>
<a href="<?php echo URLROOT;?>/Contact/delete?id=<?php echo $row->id;?>"class="btn btn-danger " >Delet</a>
<a href="<?php echo URLROOT;?>/Contact/update/<?php echo $row->id;?>"class="btn btn-success " >update</a>
         
      </div>
    <?php endforeach;?>
    </div>
  </div> 
<?php require APPROOT . '/views/inc/footer.php'; ?>