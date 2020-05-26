<?php
session_start();
include('conn.php');
include('sidebar1.php');
include('header1.php');
 if($_SESSION['loginstatus'] == "yes"){
?>

<?php

    $s="SELECT * FROM bloodgp ";
    $qu= mysqli_query($cn, $s);
  ?>
  <body style="background: url(/admin/img/img6.jpg);overflow-x: hidden;">
    <script type="text/javascript">
      $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
    </script>
  </body>
  <h1 style="text-align: center; margin-top:90px; margin-left:0px; color: #fff;">VIEW BLOOD_GROUP</h1>
<table class="table table-striped table-bordered" cellspacing="0" style="margin: 5px 0px 0px 40%; width:30%;">
<thead>
    <tr>
      <th class="th-sm" style="color: #FFF;">Name</th>
       <th class="th-sm" style="color: #FFF;">Actions</th>
         </tr>
  </thead>
  <?php
  while($f=mysqli_fetch_assoc($qu))
    {
      ?>
      <tbody>
    <tr>
      <td><?php echo $f["bg_name"];?></td>
      <td>
        <a href="editbloodgp.php"><i class="fa fa-pencil" aria-hidden="true"></i>
        </a>
        <a href ="deletebloodgp.php"><i class="fa fa-trash" aria-hidden="true"></i>
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