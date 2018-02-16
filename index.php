<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fontello Mysql example</title>
<link rel="stylesheet" href="icon-style.css" type="text/css">
<link rel="stylesheet" href="css/animation.css" type="text/css">
<!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<div class="container">
        <h1>fontello mysql example</h1>
        <ol>
            <li>Connect with your DB.</li>
            <li>Change the following <strong>CODE</strong> with your credentials.</li>
        </ol>
        <div class="alert-dark p-3">
        	<code>$mysqli = new mysqli("your_host_name_here", "your_db_user_name_here", "your_db_password_here", "your_db_name_here");
            
            <br>/* check connection */<br>
            if ($mysqli->connect_errno) {<br>
                printf("Connect failed: %s\n", $mysqli->connect_error);<br>
                exit();<br>
            }
            <br>
            $query = "SELECT * FROM `tb_icons`";<br>
            $result = $mysqli->query($query);<br>
            while($row = $result->fetch_array()){<br>
                 <kbd>Your loop code here....</kbd><br>   
			}<br>
            </code>
        </div>
        <hr>
        <h3>With DB Example</h3>
        <hr>
        <div class="row">
            <?php
                $mysqli = new mysqli("localhost", "root", "", "test");
    
                /* check connection */
                if ($mysqli->connect_errno) {
                    printf("Connect failed: %s\n", $mysqli->connect_error);
                    exit();
                }
                
                $query = "SELECT * FROM `tb_icons`";
                $result = $mysqli->query($query);
                
                /* numeric array */
                while($row = $result->fetch_array()){
                ?>
                    <div class="col-4">
                        <i class="icon <?php echo $row['icon']; ?>"><?php echo $row['print_code']; ?></i> <span><?php echo $row['icon']; ?></span> <code><?php echo $row['code']; ?></code>
                    </div>
                <?php } ?>
        </div>
        <hr>
        <h3>Simple Example with PHP</h3>
        <hr>
        <div class="row">
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
                <div class="col-3"><i class="icon <?php echo $val; ?>"><?php echo $key; ?></i> <span><?php echo $val; ?></span></div>
            <?php } ?>
        </div>
        <hr>
        <h3>Simple Example with CSS</h3>
        <hr>
        <div class="row">
            <div class="col-3"><i class="icon icon-search-7">&#xe801;</i> <span>icon-search-7</span></div>
            <div class="col-3"><i class="icon icon-user-add">&#xe814;</i> <span>icon-user-add</span></div>
            <div class="col-3"><i class="icon icon-picture-outline">&#xe817;</i> <span>icon-picture-outline</span></div>
            <div class="col-3"><i class="icon icon-ok">&#xe822;</i> <span>icon-ok</span></div>
            <div class="col-3"><i class="icon icon-eq">&#xe82e;</i> <span>icon-eq</span></div>
            <div class="col-3"><i class="icon icon-tags">&#xe840;</i> <span>icon-tags</span></div>
            <div class="col-3"><i class="icon icon-upload-outline">&#xe848;</i> <span>icon-upload-outline</span></div>
        </div>
	</div>
        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>
