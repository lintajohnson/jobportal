<?php
include("header.php");
?>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$in1 =$link->query ("select email,name,mob_no,key_skills,curr_ind,fun_area,basic_grad,attach_res from user_register where id=$id");
while ($row1 = mysqli_fetch_array($in1)) {
	
?>
  
<div align="center">
<h2>EMPLOYEE DETAILS</h2>
<table align="center">
<tr>
 <td>
 <span><b>Name:</b></span><?php echo $row1['name']; ?><br/></td>
 </tr>
 <tr>
<td><span><b>Email:</b></span> <?php echo $row1[' email']; ?><br/></td>
</tr>
<tr>
<td><span><b>Contact No:<b></span><?php echo $row1['mob_no']; ?><br/></td>
</tr>
<tr>
<td><span><b>Key Skills:<b></span><?php echo $row1['key_skills']; ?><br/></td>
</tr>
<tr>
<td><span><b>Current Industry:<b></span><?php echo $row1['curr_ind']; ?><br/></td>
</tr>
<tr>
<td><span><b>Functional Area:<b></span><?php echo $row1['fun_area']; ?><br/></td>
</tr>
<tr>
<td><span><b>Basic graduation:<b></span><?php echo $row1['basic_grad']; ?><br/></td>
</tr>
<tr>
<td><span><b>Attach Resume:<b></span> <?php echo" <a href='download.php?file=".$row1['attach_res']."'>Dowload File</a>" ;?> <br/>

</td>
</tr>

</div>
</table>
<?php
}
}
?>



<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>

<?php
include("footer.php");
?>