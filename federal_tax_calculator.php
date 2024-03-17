<html>
<head>
<title>Federal Tax Calculator</title>
</head>
<body style= "background-color: #e3fffa;">
<?php include "header.php"; ?>


<div style="position:relative; top:5px; left:75px; height:auto; width:1350px; text-align: justified; align: center;"> <h2> Estimate Your 
2019 Tax Refund </h2>
 <form action="" method = "post"> <p style="font-size:25px">  Select your status 
    <select name="dropdown">
	    <option value="1">Single</option>
	    <option value="2">Married/Filing Jointly</option>
		<option value="3">Married/Filing Separately</option>
		<option value="4">Head of Household</option>
	  </select>
	   Insert the amount earned in 2019 <input type= "text" name= "money"/>
    <input type="submit" name="calculate" value="Calculate"/>
<?php	
function taxCalc()
{
	if(isset($_POST['calculate']))
	{
		if(is_numeric($_POST['money']))
		{
			if(($_POST['dropdown'] == '1' || $_POST['dropdown'] == '3') && $_POST['money'] > 0 && $_POST['money'] <= 9700)
			{
				$total = $_POST['money'] * (10/100);
			}
			else if(($_POST['dropdown'] == '1' || $_POST['dropdown'] == '3') && $_POST['money'] >= 9701 && $_POST['money'] <= 39475)
			{
				$total = $_POST['money'] * (12/100);
			}
			else if(($_POST['dropdown'] == '1' || $_POST['dropdown'] == '3') && $_POST['money'] >= 39476 && $_POST['money'] <= 84200)
			{
				$total = $_POST['money'] * (22/100);
			}
			else if(($_POST['dropdown'] == '1' || $_POST['dropdown'] == '3')  && $_POST['money'] >= 84201 && $_POST['money'] <= 160725)
			{	
				$total = $_POST['money'] * (24/100);
			}
			else if(($_POST['dropdown'] == '1' || $_POST['dropdown'] == '3') && $_POST['money'] >= 160726 && $_POST['money'] <= 204100)
			{
				$total = $_POST['money'] * (32/100);
			}
			else if($_POST['dropdown'] == '1' && $_POST['money'] >= 204101 && $_POST['money'] <= 510300)
			{
				$total = $_POST['money'] * (35/100);
			}
			else if($_POST['dropdown'] == '3' && $_POST['money'] >= 204101 && $_POST['money'] <= 306175)
			{
				$total = $_POST['money'] * (35/100);
			}
			else if($_POST['dropdown'] == '1' && $_POST['money'] >= 510301)
			{
				$total = $_POST['money'] * (37/100);
			}
			else if($_POST['dropdown'] == '3' && $_POST['money'] >= 306176)
			{
				$total = $_POST['money'] * (37/100);
			}
	
	
	
			if($_POST['dropdown'] == '2' && $_POST['money'] > 0 && $_POST['money'] <= 19400)
			{
				$total = $_POST['money'] * (10/100);
			}
			else if($_POST['dropdown'] == '2' && $_POST['money'] >= 19401 && $_POST['money'] <= 78950)
			{
				$total = $_POST['money'] * (12/100);
			}
			else if($_POST['dropdown'] == '2' && $_POST['money'] >= 78951 && $_POST['money'] <= 168400)
			{
				$total = $_POST['money'] * (22/100);
	
			}
			else if($_POST['dropdown'] == '2' && $_POST['money'] >= 168401 && $_POST['money'] <= 321450)
			{
				$total = $_POST['money'] * (24/100);
			}
			else if($_POST['dropdown'] == '2' && $_POST['money'] >= 321451 && $_POST['money'] <= 408200)
			{
				$total = $_POST['money'] * (32/100);
			}
			else if($_POST['dropdown'] == '2' && $_POST['money'] >= 408201 && $_POST['money'] <= 612350)
			{
				$total = $_POST['money'] * (35/100);
			}
			else if($_POST['dropdown'] == '2' && $_POST['money'] >= 612351)
			{
				$total = $_POST['money'] * (37/100);
			}
	
	
			if($_POST['dropdown'] == '4' && $_POST['money'] > 0 && $_POST['money'] <= 13850)
			{
				$total = $_POST['money'] * (10/100);
			}
			else if($_POST['dropdown'] == '4' && $_POST['money'] >= 13851 && $_POST['money'] <= 52850)
			{
				$total = $_POST['money'] * (12/100);
			}
			else if($_POST['dropdown'] == '4' && $_POST['money'] >= 52851 && $_POST['money'] <= 84200)
			{
				$total = $_POST['money'] * (22/100);
			}
			else if($_POST['dropdown'] == '4' && $_POST['money'] >= 84201 && $_POST['money'] <= 160700)
			{
				$total = $_POST['money'] * (24/100);
			}
			else if($_POST['dropdown'] == '4' && $_POST['money'] >= 160701 && $_POST['money'] <= 204100)
			{
				$total = $_POST['money'] * (32/100);
			}
			else if($_POST['dropdown'] == '4' && $_POST['money'] >= 204101 && $_POST['money'] <= 510300 )
			{
				$total = $_POST['money'] * (35/100);
			}
			else if($_POST['dropdown'] == '4' && $_POST['money'] >= 510301)
			{
				$total = $_POST['money'] * (37/100);
		
			}
			echo "<h2>Your estimate tax return is: {$total}</h2>"; 
		}
		else 
		{
			echo '<script>alert("You must insert an amount!!")</script>';
		}
	}
}

	taxCalc(); 
?>	
</form> </p> </div>

 <?php include "footer.php"; ?>
</body>
</html>
