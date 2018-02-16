<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fontello Mysql example</title>
<link rel="stylesheet" href="icon-style.css" type="text/css">
<link rel="stylesheet" href="css/animation.css" type="text/css">
<!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
</head>

<body>
	<h1>fontello mysql example</h1>
    <ol>
    	<li>Connect with your DB.</li>
    	<li>Change the following <strong>CODE</strong> with your credentials.</li>
    </ol>
    
    <strong>With DB Example</strong>
	<div>
    	<?php
			$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

			/* check connection */
			if ($mysqli->connect_errno) {
				printf("Connect failed: %s\n", $mysqli->connect_error);
				exit();
			}
			$query = "SELECT Name, CountryCode FROM City ORDER by ID LIMIT 3";
			$result = $mysqli->query($query);
			
			/* numeric array */
			while($row = $result->fetch_array(MYSQLI_NUM)){
			?>
    			<div>
                	<i class="icon <?php echo $row['icon']; ?>"><?php echo $row['print_code']; ?></i> <span><?php echo $row['icon']; ?></span>
                </div>
        	<?php } ?>
    </div>
    
    <strong>Simple Example</strong>
	<div>
    	<?php
			$res	=	array(
							'&#xe801;'=>'icon-search-7',
							'&#xe814;'=>'icon-user-add',
							'&#xe817;'=>'icon-picture-outline',
							'&#xe822;'=>'icon-ok',
							'&#xe82e;'=>'icon-eq',
							'&#xe840;'=>'icon-tags',
							'&#xe848;'=>'icon-upload-outline',
							); 
			foreach($res as $key=>$val){ ?>
    		<div><i class="icon <?php echo $val; ?>"><?php echo $key; ?></i> <span><?php echo $val; ?></span></div>
        <?php } ?>
    </div>
</body>
</html>
