<?php
include("header.php");
?>

<?php

		
         $in=$link->query("SELECT *FROM user_register");
		
		 
?>

<table  border="10" width='480px'align='center'>
<thead>
   <tr>
      <th colspan="6"> <h3><br>EMPLOYEE LIST</h3></th>
	  
   </tr>
   
   <tr>
      <th>Sl No</th>
      <th >Name</th>
	  <th >Mobile No:</th>
	  <th>Experience</th>
	  <th>Location</th>
	  <th>Click Here</th>
	  </tr>
</thead>
	<?php
          while( $row = mysqli_fetch_array( $in ) ){
			  
		
		    ?>
	  <tbody>
   
       
          <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['mob_no']; ?></td>
              <td><?php echo $row['total_exp']; ?></td>
              <td><?php echo $row['curr_loc']; ?></td>
              <td><?php echo "<b><a href=\"page1.php?id={$row['id']}\">View</a></b>";?></td> 
            </tr>
      </tbody>
	  <?php
	  }
	  ?>
</table>
<?php
include("footer.php");
?>

