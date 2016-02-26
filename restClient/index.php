
<html>
	<head>
		<title>REST CLIENT</title>
	</head>
	<body>
		<div>
			<h1>Book name: </h1>
			<form  action=""> 
				<input name="name" type="text" value="" size="30"/>
				<input type="submit" value="Get Price"/> 
			</form>
		
		</div>
		
		<?php
		// simple GET Request
		if(isset($_REQUEST['name']))
		{			
			$name = $_REQUEST['name'];
			
			// Resource Address
			$url="http://localhost/rest/$name";
			
			// Send GET/PUT/POST request to Resource
			$client=curl_init($url);
			
			curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
			
			// get response to Resource
			$response=curl_exec($client);
			
			// decode
			$result=json_decode($response);
			
			echo $result->data;
			
			
		}
		?>
	</body>

</html>




