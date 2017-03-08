<!DOCTYPE html>
<html>
<head></head>
<body bgcolor="gray" font_color="red">
<body>
<form>
<div align="center">
<table>
 <tr align="right">
   <td colspan="2"></td>
 </tr>
 <tr>
   <th colspan="2"></th>
 </tr>
 <tr align="center" bgcolor="#EEEEF8">
	<td align="left"><a href="login.php?member=D">Administrator</a></td>
   <td align="right"><a href="login.php?member=A">Applicant Login/Register</a> 
   <a href="login.php?member=E">Employer Login/Register</a></td>
 </tr> 
 <tr align="left"><td colspan="2"><table border="1" cellpadding="1" align="center">
   <tr>
     <td>Keyword</td>
     <td><input type="text" name="keyword"><br>
       <label><input type="radio" name="opgkeword" value="1">All words</label>
       <label><input type="radio" name="opgkeword" value="2">Any words</label>
       <label><input type="radio" name="opgkeword" value="3">Exact phrase</label>
	</td>
   </tr>
   <tr>
     <td>Country</td>
     <td><select name="countryid" id="countryid">
       <option value="">--select country--</option>
     </select></td>
   </tr>
   <tr>
     <td>Career Level </td>
     <td><select name="carrierlevelid">
       <option value="">--select career level--</option>
     </select></td>
   </tr>
   <tr>
     <td>Job Category </td>
     <td><select name="jobcategory" id="jobcategory">
       <option value="">--select job category--</option>
       <option value="0">Other</option>
     </select></td>
   </tr>
   <tr>
     <td>Job Type </td>
     <td><select name="employeetype" id="employeetype">
       <option value="">--select employment type--</option>
     </select></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td><input type="submit" name="submit" value="Search">
       <input type="reset" name="Reset" value="Reset"></td>
   </tr>
 </table></td></tr>
 <tr>
<td colspan="2"><table border="0" align="center">
  <tr><td colspan="7">
	</td>
  </tr>
 <tr><td align="center"></td>
 </tr>
</table>
</table>
</div>
</form>
</body>
</html>