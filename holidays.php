<?php include('includes/header.php') ;
      include('includes/sidebar.php');
      include('includes/db_connect.php');
      include('add-holidays.php');
?>
    
            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Holidays 2018</h4>

<!--<div class="form-group">
  <label class="control-label col-md-4">Datetime Picker</label>
  <div class="col-md-8">
    <div class="input-group date" id="datetimepicker1">
      <input type="text" class="form-control" />
      <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span> </div>
  </div>
</div>
-->


						</div>
						<div class="col-sm-4 text-right m-b-30">
							<a href="#" class="btn btn-primary rounded" data-toggle="modal" data-target="#add_holiday"><i class="fa fa-plus"></i> Add New Holiday</a>
						</div>
					</div>
					<?php
						 $hfsql = "select * from holidays where row_status=1 order by hid desc";
						 $hfrum = mysqli_query($con,$hfsql);
						 
					?>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0">
									<thead>
										<tr>
											<th>Sr.no</th>
											<th>Title </th>
											<th>Holiday Date</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php 
                                        $r=1;
										while($row = mysqli_fetch_array($hfrum)){ 
											
											?>		
										<tr class="holiday-completed" id="<?php echo $row['hid'];?>">
											<td><?php echo $r++; ?></td>
											<td><?php echo $row['holidayname']; ?></td>
											<td><?php echo $row['holidaydate']; ?></td>
											<!-- <td>Sunday</td> -->
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_holiday" title="Edit" id="<?php echo $row['hid']; ?>" class="update" ><i class="fa fa-pencil m-r-5" ></i> Edit</a></li>
											<li><a href="javascript:delete1('<?php echo $row['hid']; ?>');"  title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<?php }?>
										<!-- <tr class="holiday-completed">
											<td>2</td>
											<td>Good Friday</td>
											<td>14 Apr 2017</td>
											<td>Friday</td>
											<td></td>
										</tr>
										<tr class="holiday-completed">
											<td>3</td>
											<td>May Day</td>
											<td>1 May 2017</td>
											<td>Monday</td>
											<td class="text-center">
											</td>
										</tr>
										<tr class="holiday-completed">
											<td>4</td>
											<td>Memorial Day</td>
											<td>28 May 2017</td>
											<td>Monday</td>
											<td class="text-center">
											</td>
										</tr>
										<tr class="holiday-completed">
											<td>5</td>
											<td>Ramzon</td>
											<td>26 Jun 2017</td>
											<td>Monday</td>
											<td></td>
										</tr>
										<tr class="holiday-upcoming">
											<td>6</td>
											<td>Bakrid</td>
											<td>2 Sep 2017</td>
											<td>Saturday</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_holiday" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_holiday" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr class="holiday-upcoming">
											<td>7</td>
											<td>Deepavali</td>
											<td>18 Oct 2017</td>
											<td>Wednesday</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_holiday" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_holiday" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr class="holiday-upcoming">
											<td>8</td>
											<td>Christmas</td>
											<td>25 Dec 2017</td>
											<td>Monday</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_holiday" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_holiday" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr> -->
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
				
            </div>
			<div id="delete_holiday" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Holiday</h4>
						</div>
						<form>
							<div class="modal-body card-box">
								<p>Are you sure want to delete this?</p>
								<div class="m-t-20 text-left">
									<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
									<button type="submit" class="btn btn-danger">Delete</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="add_holiday" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Add Holiday</h4>
						</div>
						<div class="modal-body">
							<form method="post">
								
								<div class="form-group">
									<input type="hidden" name="insert_form" value="1">
									<label>Holiday Name <span class="text-danger">*</span></label>
									<input class="form-control" required="" type="text" name="hname">
								</div>
								<div class="form-group">
									<label>Holiday Date <span class="text-danger">*</span></label>
									<div class="cal-icon"><input class="form-control datetimepicker" id="datetimepicker1" type="text" name="hdate"></div>
								</div>
								<!-- This is the html for date picker and its script is written below -->
								<!-- <div class="input-group date" id="datetimepicker1">
								      <input type="text" class="form-control" />
								      <span class="input-group-addon"> <span class="glyphicon glyphicon-calendar"></span> </span> 
						        </div> -->
								<div class="m-t-20 text-center">
									<input type="submit" class="btn btn-primary" id="hsub" value="Create Holiday"/>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="edit_holiday" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Edit Holiday</h4>
						</div>
						<div class="modal-body">
							<form id="fok" method="POST" action="editholidays.php">
								<input type="hidden" value="" name="uid" id="uid">
								<div class="form-group">
									<label>Holiday Name <span class="text-danger">*</span></label>
									<input class="form-control" value="<?php echo $row['hname']?>" required="" type="text" name="hname" id="hename">
								</div>
								<div class="form-group">
									<label>Holiday Date <span class="text-danger">*</span></label>
									<div class="cal-icon"><input class="form-control datetimepicker" value="<?php echo $row['hdate']?>" required="" type="text" name="hdate" id="hedate"></div>
								</div>
								<div class="m-t-20 text-center">
									<input type="submit" class="btn btn-primary" value="Edit Holiday" id="updateform" name="updateform"/>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
		<script type="text/javascript" src="assets/js/moment.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="assets/js/app.js"></script>

	<script type="text/javascript">
	function delete1(x){
		//alert(x);
                 if(confirm("are you sure?") == true)
			window.location = 'delete-holidays.php?xyz='+x;

			
			}
</script>


<!--Javascript Code for changing date format of adding holiday date-->
<script type="text/javascript">
  $(function() {
    $('#datetimepicker1').datetimepicker({
      format: 'YYYY/MM/DD'
    });
  });

//Code For Edit Holidays using Ajax
//   function view(){
// 	var x="view=1";
// 	$.ajax({
// 		type: "POST",
// 		url: "editholidays.php",
// 		cache: false,
// 		data: x,
// 		success: function(result){
// 			//alert(result);

// 		}
// 	});
// }
// view();

	$('body').on('click','.update',function(){
		//alert("hi");
		//alert($(this).closest('tr').html());
		var hname=$(this).closest('tr').find("td").eq(1).html(); 
		var hdate=$(this).closest('tr').find("td").eq(2).html(); 
		$('#hename').val(hname);
		$('#hedate').val(hdate);
		
		var id=$(this).attr('id');
		$('#uid').val(id);
	});
	
	/**/
	/*$('body').on('click','#updateform',function(){
		var x=$('#fok').serialize()+"&update=1";
		alert(x);
			$.ajax({
			type: "POST",
			url: "editholidays.php",
			data: x,
			success: function(result){
				if(result=='1')
				window.location="holidays.php";
				
			}
		});
	});*/

 // End Code For Edit Holidays
</script>

    </body>

<!-- Mirrored from dreamguys.co.in/smarthr/maroon/holidays.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Dec 2018 10:11:20 GMT -->
</html>
<?php
if(isset($_GET['done']))
{
	if($_GET['done']==1)
	{
		echo  "Record deleted Successfully";
	}
	else echo "Record deletion unsuccessfull";
}
?>