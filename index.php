<?php
include 'header.php';

?>
<div id="main-content">
    <table cellpadding="7px">
        <thead>
        <th>SL.No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
        <th>Country</th>
        </thead>
        <tbody>
          <?php
          $conn=mysqli_connect("localhost","root","","mysql");
          $sql="SELECT * FROM student_table1";
          if($result = mysqli_query($conn,$sql)){
            if(mysqli_num_rows($result)>0){
              $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
              foreach($rows as $row){?>
                <tr>
                  <td><?= $row['slno']; ?></td>
                  <td><?= $row['f_name']; ?></td>
                  <td><?= $row['l_name']; ?></td>
                  <td><?= $row['city']; ?></td>
                  <td><?= $row['country']; ?></td>
                </tr>
                <?php
                  }
                  }
                  }
                  mysqli_close($conn);
                 ?>
        </tbody>
    </table>


</div>
<?php
include 'footer.php';

?>

</div>

</body>
</html>
