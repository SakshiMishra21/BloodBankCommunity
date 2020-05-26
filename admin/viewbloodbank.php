<?php
session_start();
include('conn.php');
include('header1.php'); 
include('sidebar1.php');
 if($_SESSION['loginstatus'] == "yes"){
?>
<?php

    $s="SELECT * FROM bloodbank ";
    $qu= mysqli_query($cn,$s);
  ?>
  <body style="background: url(/admin/img/img6.jpg);">
    <script type="text/javascript">
      $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
    </script>
  </body>
  <h1 style="text-align: center; margin-top:90px; margin-left:0px; color: #fff;">VIEW BLOOD_BANKS</h1>
  <div class="row">
    <div class="col-md-12">
<table class="table table-striped table-bordered" cellspacing="0" style="margin: 5px 0px 0px 40%; width:30%;">
<thead>
    <tr>
      <th class="th-sm" style="text-align: center;color: #FFF;">Name</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">City</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">State</th>
      <th class="th-sm" style="text-align: center;color: #FFF;">Address</th>
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
       <td><?php echo $f["city"];?></td>
        <td><?php echo $f["state"];?></td>
         <td><?php echo $f["address"];?></td>
      <td>
        <a href="editbloodbank.php"><i class="fa fa-pencil" aria-hidden="true"></i>
        </a>
        <a href ="deletebloodbank.php"><i class="fa fa-trash" aria-hidden="true"></i>
        </a>
      </td>
    </tr>
    <?php
  }
  ?>
  </tbody>
</table>
</div>
</div>
    <?php
    include('script.php');
    }
else{
  header('location:adminlogin.php');
}
    ?>