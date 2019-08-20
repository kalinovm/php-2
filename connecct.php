<?php
mysql_connect("localhost", "root", "");
mysql_select_db("cmtdb");
error_reporting(E_ALL ^ E_NOTICE);
$notify = "";
$name=$_POST['name'];
$comment=$_POST['comment'];
$submit=$_POST['submit'];
if(isset($_POST['notify_box'])){ $notify = $_POST['notify_box']; }
$dbLink = mysql_connect("localhost", "root");
    mysql_query("SET character_set_client=utf8", $dbLink);
    mysql_query("SET character_set_connection=utf8", $dbLink);
 
if($submit)
{
    if($name&&$comment)
    {
        $insert=mysql_query("INSERT INTO comment (name,comment) VALUES ('$name','$comment') ");
    }
    else
    {
        echo "please fill out all fields";
    }
}

$dbLink = mysql_connect("localhost", "root", "");
mysql_query("SET character_set_results=utf8", $dbLink);
mb_language('uni');
mb_internal_encoding('UTF-8');
 
$sql = "SELECT * FROM comment";
$getquery = mysql_query($sql);
?>
<!DOCTYPE html>
<head>
<title>Comment</title>
<meta charset= "utf-8">

<link rel="stylesheet" type="text/css" href="naslovna strana.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>
<div id="wrapper">

	<header id="header">
	
	<div id="logo">
	<a href="connecct.php">
	<img src="comment.jpg" alt="comment" width="372" height="255">	</a>	</div>
	<div id="slogan">
	FORUM
	</div>
	
	</header>
	
<nav id="nav">
	<ul>
		<li><a href="Naslovna strana.php"><i class="fab fa-grunt aria-hidden="true"></i> Kucni ljubimci</a>
		</li>
		<li><a href="Druga strana.php" target="_blank"><i class="far fa-smile aria-hidden="true"></i>
Pas ili macka </a></li>
		<li><a href="register.php" target="_blank"><i class="fa fa-question aria-hidden="true"></i> Log in / Registracija</a></li>
	<li><a href="connecct.php"><i class="fab fa-grunt aria-hidden="true"></i> Kucni ljubimci forum</a>
		</li>
	</ul>
	
	<div class="social">
	<a href="www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
	<a href="www.twiter.com" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
	<a href="www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
	</div>
	
	</nav>
    <div>
        <table id="commentTable">
            <colgroup>
                <col width="30%"/>
                <col width="40%"/>
            </colgroup>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
<?php
while($row = mysql_fetch_array($getquery)) {
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['comment'] . '</td>';
}
?>
            </tbody>
        </table>
    </div>
    <form action="connecct.php" method="POST">
        <colgroup>
            <col widht="30%" style="vertical-align:top;"/>
            <col widht="40%" style="vertical-align:top;"/>
        </colgroup>
        <table>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td><label for="comment">Comment:</label></td>
                <td><textarea name="comment" rows="10" cols="20"></textarea></td>
            </tr>
            <tr><td colspan="2"><input type="submit" name="submit" value="Comment"></td></tr>
        </table>
    </form>
</body>
</html>