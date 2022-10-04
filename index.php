<?php include 'includes/nav.php'; ?>

<?php
if(isset($_GET['search'])){
  $data = x($_GET['search']);
  $query = mysqli_query($db, "SELECT * FROM `person` WHERE `name` LIKE '% $data %' ");
  if(mysqli_num_rows($query) > 0){ ?>
    <div class="container bg-light radius-10 shadow-sm p-3">
    <div class="row m-3 justify-content-center">
    <?php 
    while($row = mysqli_fetch_assoc($query)) { ?>
    <div class="card m-2 border-0 p-3 radius-10 shadow-sm" style="width: 15rem;">
  <img src="assets/img/<?php echo x($row['photo']);?>" class="w-50 m-auto">
  <div class="card-body text-center">
    <h5 class="card-title">Name : <?php echo x($row['name']);?></h5>
    <p class="card-text">Age : <?php echo x($row['age']);?></p>
    <p class="card-text">Job : <?php echo x($row['job']);?></p>
    <a href="#">View CV</a>
  </div>
  <a href="?d=<?php echo x($row['id']);?>"><img src="assets/img/remove.svg" width="40" style="position:absolute;top:0;right:0;margin:10px" alt=""></a>
</div>
<?php } ?>

    </div>
    </div>
<?php 
  }
  else{
    echo "<p class='alert text-center text-danger container'>Not Found </p> ";

  }
exit();
}
  ?>
<div class="container bg-light radius-10 shadow-sm p-3">
<div class="row m-3 justify-content-center">
<?php
$query = mysqli_query($db, "SELECT * FROM `person`");
while($row = mysqli_fetch_assoc($query)){?>
<div class="card m-2 border-0 p-3 radius-10 shadow-sm" style="width: 15rem;">
  <img src="assets/img/<?php echo x($row['photo']);?>" class="w-50 m-auto">
  <div class="card-body text-center">
    <h5 class="card-title">Name : <?php echo x($row['name']);?></h5>
    <p class="card-text">Age : <?php echo x($row['age']);?></p>
    <p class="card-text">Job : <?php echo x($row['job']);?></p>
    <a href="#">View CV</a>
  </div>
  <a href="?d=<?php echo x($row['id']);?>"><img src="assets/img/remove.svg" width="40" style="position:absolute;top:0;right:0;margin:10px" alt=""></a>

</div>
<?php } ?>
</div>
</div>