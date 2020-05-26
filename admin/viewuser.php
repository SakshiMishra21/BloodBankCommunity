<?php
session_start();
include('conn.php');
include('sidebar1.php');
include('header1.php'); 
 if($_SESSION['loginstatus'] == "yes"){
?>
<?php

    $s="SELECT * FROM donarreg ";
    $qu= mysqli_query($cn, $s);
  ?>
  <body style="background: url(/admin/img/img6.jpg);">
    <script type="text/javascript">
      $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
    </script>
  </body>
  <h1 style="text-align: center; margin-top: 70px; margin-left:200px; color: #fff;">VIEW USER</h1>
<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" 
style="text-align: center;margin: 31px 0px 0px 359px; width:60%;">
  <thead>
    <tr>
      <th class="th-sm" style="text-align: center;color: #FFF;">Name</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">Gender</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">Age</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">Weight</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">State</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">City</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">Mobile Number</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">Email</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">Blood Group</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">Date</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">Image</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">Message</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">Actions</th>
    </tr>
  </thead>
  <?php
  while($f=mysqli_fetch_assoc($qu))
    {
      ?>
  <tbody>
    <tr>
      <td><?php echo $f["name"];?></td>
      <td><?php echo $f["gender"];?></td>
       <td><?php echo $f["age"];?></td>
        <td><?php echo $f["weight"];?></td>
         <td><?php echo $f["state"];?></td>
         <td><?php echo $f["city"];?></td> 
          <td><?php echo $f["mobnum"];?></td>
          <td><?php echo $f["email"];?></td>
          <td><?php echo $f["bloodgp"];?></td>
          <td><?php echo $f["date"];?></td>
          <td><?php echo $f["image"];?></td>
          <td><?php echo $f["message"];?></td>
      <td>
        <a href="edituser.php?id=<?php echo $f["id"];?>"><i class="fa fa-pencil" aria-hidden="true"></i>
        </a>
        <a href ="deleteuser.php"><i class="fa fa-trash" aria-hidden="true"></i>
        </a>
      </td>
    </tr>
    <?php
  }
  ?>
  </tbody>
</table>
    <?php
    include('script.php');
    }
else{
  header('location:adminlogin.php');
}
    ?>