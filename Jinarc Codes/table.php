<?php
//database conection  file
include('connection.php');

//Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);

$sql=mysqli_query($con,"delete from account where id=$rid");

echo "<script>alert('Data deleted');</script>"; 
echo "<script>window.location.href = 'table.php'</script>";     
} 
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="table.css">
  <title>Document</title>
</head>
<body>
    <table width="100%">
         			<thead>
         				<tr>
						        
                 <th>ID</th>
      <th>Name</th>
      <th>Hospital Affiliation</th>
      <th>Specialty</th>
      <th>Email</th>
      <th>PRC License Number</th>
      <th>Date of Assessment</th>
      <th>Status</th>
      <th>Score</th>
      <th>Signature</th>
      <th>Action</th>
                            
                        
         				</tr>
         			</thead>
                 <tbody>
                 <?php
include('connection.php');
$ret=mysqli_query($con,"select * from account");

$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
                    <tr>
                        
                        <!-- <td><img src="profilepics/<?= $row['file_uploaded'];?>" width="80" height="80"></td> -->
                        <td><?php  echo $row['id'];?> </td>
                        <td><?php  echo $row['name'];?> </td>
                        <td><?php  echo $row['hospital_affliiation'];?></td>                        
                        <td><?php  echo $row['specialty'];?></td>
                        <td><?php  echo $row['email'];?></td>
                        <td><?php  echo $row['prc'];?></td>
                        <td><?php echo date("F j Y h:m:s a",strtotime($row['date_added'])) ?></td>
                        <td><?php if($row['score'] == 0){
                          echo  ' <h3 style="Background:gray; color:white;  text-align:center;padding:5px; width:200px; border-radius:10px">Failed</h3>';
                        }else if($row['score'] == 1){
                          echo  ' <h3 style="Background:gray; color:white;  text-align:center;padding:5px; width:200px; border-radius:10px">Failed</h3>';
                        }else if($row['score'] == 2){
                          echo  ' <h3 style="Background:gray; color:white;  text-align:center;padding:5px; width:200px; border-radius:10px">Failed</h3>';
                        }else if($row['score'] == 3){
                          echo  ' <h3 style="Background:gray; color:white;  text-align:center;padding:5px; width:200px; border-radius:10px">Failed</h3>';
                        }else if($row['score'] == 4){
                          echo  ' <h3 style="Background:gray; color:white;  text-align:center;padding:5px; width:200px; border-radius:10px">Failed</h3>';
                        }
                        else if($row['score'] == 5){
                          echo  ' <h3 style="Background:gray; color:white;  text-align:center;padding:5px; width:200px; border-radius:10px">Failed</h3>';
                        }
                        else if($row['score'] == 6){
                          echo  ' <h3 style="Background:gray; color:white;  text-align:center;padding:5px; width:200px; border-radius:10px">Failed</h3>';
                        }
                        else if($row['score'] == 7){
                          echo  ' <h3 style="Background:gray; color:white;  text-align:center;padding:5px; width:200px; border-radius:10px">Failed</h3>';
                        }
                        else {
							          echo  '<h3 style="Background:skyblue; color:white; text-align:center;padding:5px; width:200px; border-radius:10px">Passed</h3>';

						}?></td>
                        <td><?php  echo $row['score'];?>&nbsp;out to 8</td>
                        <td><?php  echo $row['signature'];?></td>
                   <td>
        
                            <a href="table.php?delid=<?php echo ($row['id']);?>" class="delete" title="Delete" data-toggle="tooltip" onclick="return confirm('Do you really want to Delete ?');">Delete</a>
                        </td>
                    </tr>
                    <?php 

} } else {?>
<tr>
    <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?>                 
                 </tbody>
         		</table>


</body>
</html>
