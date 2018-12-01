<form id="fok">
<input type="hidden" value="" id="uid" />
Name:<input type="text" name="name" id="name">
Email:<input type="text" name="email" id="email"><br/><br/>
Mobile:<input type="text" name="mobile" id="mob">
Password:<input type="password" name="password" id="pass"><br/><br/>
<input type="button" name="submit" id="but" value="submit">
<input type="button" name="submit" id="updateform" value="Update" style="display:none;">
</form>

<div id="table"></div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
function view(){
	var x="view=1";
	$.ajax({
		type: "POST",
		url: "function.php",
		cache: false,
		data: x,
		success: function(result){
			$('#table').html(result);

		}
	});
}
view();
$(function(){
	//add
	$('#but').click(function(){
		var x=$('#fok').serialize()+"&add=1";
		$.ajax({
			type: "POST",
			url: "function.php",
			cache: false,
			data: x,
			success: function(result){
				view();

			}
		});

	});
	
	
	//delete
	$('body').on('click','.del',function(){
		var x;
		if(confirm("Are you Sure you Want to delete")==true){
			 x="uid="+$(this).attr('id')+"&delete1=1";
			$.ajax({
				type: "POST",
				url: "function.php",
				cache: false,
				data: x,
				success: function(result){
					view();

				}
			});
		}
	});
	
	//update
	$('body').on('click','.update',function(){
		//alert($(this).closest('tr').html());
		var name=$(this).closest('tr').find("td").eq(0).html();
		var email=$(this).closest('tr').find("td").eq(1).html();
		var mobile=$(this).closest('tr').find("td").eq(2).html();
		var pass=$(this).closest('tr').find("td").eq(3).html();
		$('#name').val(name);
		$('#email').val(email);
		$('#mob').val(mobile);
		$('#pass').val(pass);
		$('#updateform').show();
		
		$('#but').hide();
		
		var id=$(this).attr('id');
		$('#uid').val(id);
	});
	
	/**/
	$('body').on('click','#updateform',function(){
		var x=$('#fok').serialize()+"&update=1&uid="+$('#uid').val();
		$.ajax({
			type: "POST",
			url: "function.php",
			cache: false,
			data: x,
			success: function(result){
				view();

			}
		});
	});
});

</script>