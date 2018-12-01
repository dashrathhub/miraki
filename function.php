<?php
$conn=mysqli_connect("localhost","root","","data_base");
if(isset($_POST['add'])){
	$sql="insert into data_tbl values('','".$_POST['name']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['password']."')";
	$run=mysqli_query($conn,$sql);
	if($run) echo "1"; else echo "0";
}
if(isset($_POST['update'])){
	$sql_qry="update data_tbl set name='".$_POST['name']."', email='".$_POST['email']."', mobile='".$_POST['mobile']."', password='".$_POST['password']."' where id=".$_POST['uid'];
	$update=mysqli_query($conn,$sql_qry);
}
if(isset($_POST['view'])){
	$sql="select*from data_tbl order by id desc";	
	$run=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($run);
    if($count>0)
	echo'<table border="1" cellspacing="0" cellpadding="5">';
	echo'<tr><th>Name</th><th>Email</th><th>Mobile</th><th>Password</th><th>Action</th></tr>';
    while($row=mysqli_fetch_assoc($run))
     {
     echo'
     <tr>
     <td>'.$row['name'].'</td>
     <td>'.$row['email'].'</td>
     <td>'.$row['mobile'].'</td> 
     <td>'.$row['password'].'</td>  
     <td><a href="#" id="'.$row['id'].'" class="del">Delete</a>
         <a href="#" id="'.$row['id'].'" class="update">Update</a>
     </td> ';
	 }
}
if(isset($_POST['delete1'])){
	$sql_qry="delete from data_tbl where id=".$_POST['uid'];
	$delete=mysqli_query($conn,$sql_qry);
	
}
?>