<!DOCTYPE html>
<html>

<head>
	<title>JS POST</title>
	<script src="js/jquery.min.js"></script></script>
</head>
<body>
BEGIN
<form>

	<input type="text" name="name">
	<input type="button" name="submit" value="QUERY" onclick="post_query();">

</form>
<br><br>



<div id = "result"> </div>


</body>




	<script type="text/javascript">
	var name = $('#name').val();

		var a = ['name','contact','email','category'];

		function post_query()
		{			
			$.post('datacollection.php',{postarray:a},
				function(data)
				{
					$('#result').html(data);
				}

				);
		}


	</script>
</html>