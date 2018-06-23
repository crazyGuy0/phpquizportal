<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEST PORTAL</title>
<link rel="stylesheet" href="design.css"/>
<link rel="stylesheet" href="responsive.css"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="scripts.js"></script>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>
<body>
<?PHP
require("header.php");
?>
<h3 class="msg">jQuery</h3>
<div class="cat-box">
<center>
<div class="left mid">
<h4>QUESTION</h4>
	<form class="" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<p class="quest">WHO CREATED PHP??</p>
		<input type="checkbox">OPTION 1</input><br/>
		<input type="checkbox">OPTION 2</input><br/>
		<input type="checkbox">OPTION 3</input><br/>
		<input type="checkbox">OPTION 4</input><br/><br/><br/>
		<input type="submit" class="btn" value="SUBMIT " />
		<a href="" class="btn">NEXT</a>
	</form>
</div>
<div class="right small">
<h4>STATISTICS</h4>
<a href="" class="btn">Q1</a>
<a href="" class="btn">Q2</a>
<a href="" class="btn">Q3</a>
<a href="" class="btn">Q4</a>
<a href="" class="btn">Q5</a>
<a href="" class="btn">Q6</a>
<a href="" class="btn">Q7</a>
<a href="" class="btn">Q8</a>
<a href="" class="btn">Q9</a>
<a href="" class="btn">Q10</a>
<a href="" class="btn">Q11</a>
<a href="" class="btn">Q12</a>
<a href="" class="btn">Q13</a>
<a href="" class="btn">Q14</a>
<a href="" class="btn">Q15</a>
<a href="" class="btn">Q16</a>
<a href="" class="btn">Q17</a>
<a href="" class="btn">Q18</a>
<a href="" class="btn">Q19</a>
<a href="" class="btn">Q20</a>
<a href="" class="btn">Q21</a>
<a href="" class="btn">Q22</a>
<a href="" class="btn">Q23</a>
<a href="" class="btn">Q24</a>
<h4>RESULT</h4>
<p class="btn">ADITYA OJHA</p><br/>
<p class="btn">TOTAL SCORE:</p>
<p class="btn">YOUR SCORE:</p><br/>
<p class="btn">%AGE:</p>
</div>
</center>
</div>
<?PHP
require("footer.php");
?>
</body>
</html>