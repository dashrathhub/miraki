
<?php
include('dbcon.php');

//Add Holidays Code

if(isset($_POST['insert_form']) && !empty($_POST['insert_form']))
{   
    
	$hname = "'".$_POST['hname']."'";
  $hdate = "'".$_POST['hdate']."'";
  $hsql = "insert into holidays (`holidayname`, `holidaydate`,`created_by`,`created_on`) values
                                ($hname,$hdate,1,date('y/m/d h:i:s'))";
	$hrun = mysqli_query($conn,$hsql);
	//echo $hrun;
}

//Edit Holidays Code

if(isset($_POST['update_id']))
  {
  	$hname = $_POST['hname'];
  	$hdate = $_POST['hdate'];
  	$x = $_POST['update_id'];

  	$update_hol = "update holidays set holidayname='".$hname."', holidaydate='".$hdate."' where hid=".$x; 
  	//echo $update_hol; exit;
  	//UPDATE `holidays` SET `holidayname`=$name,`holidaydate`=$hdate WHERE 1
  	$urun = mysqli_query($conn,$update_hol);

  	if($urun)
  	{
  		echo "Record Updated Successfully";
  	}
  	else echo "Failed!";
  }
?>
