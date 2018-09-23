

<html>
<head>

<script type="text/javascript">
	function validateForm() 
	{
		var name = document.forms["transcript"]["name"].value;
		var index = document.forms["transcript"]["index"].value;
		var regno = document.forms["transcript"]["regno"].value;
		var year = document.forms["transcript"]["year"].value;


		if (name == null || name == "") 
		{
			alert("Name must be filled out");
			return false;
		}

		else if ((index == null || index == "") ||((index.length !=8)))
		{
			alert("Please enter a valid Index No.");
			return false;
		}


		else if ((regno == null || regno == "") || (regno.length !=9))
		{
			alert("Please enter a valid Registration No.");
			return false;
		}

		else if (year == "default") 
		{
			alert("Please select an Acaemic Year.");
			return false;
		}

		
		


	}
</script>
</head>

<body>
<div>
	<tr><h3 >Official Transcript</h3></tr>
	<form name="transcript" method="post" class="basic-grey" action="trans/getpdf.php" onsubmit="return validateForm()">
		<table>
        <tr>
                <h1>Application for undergraduate transcript </br></br>
                <span class="error">* Required fields.</span>
        </tr>

        <tr>
                <td class="h">Full Name :</td>
			    <td><input id="name" type="text" name="name" placeholder="Your full name" /></td>
				<td class="error">* </td>
        </tr>
                
        <tr>
                <td class="h">Index no :</td>
			    <td><input id="index" type="text" name="index" placeholder="" /></td>
				<td class="error">*</td>
        </tr>
               
        <tr>
                <td class="h">Registration no :</td>
			    <td><input id="regno" type="text" name="regno" placeholder="" /></td>
				<td class="error">* </td>
        </tr>

        <tr>
				<td class="h">Address :</span>
				<td><textarea id="address" name="address" placeholder="Your permanent address"></textarea></td>
        </tr>

        <tr>
				<td class="h">Year :</td>
				 <td><select name="year">
				 	<option selected value="default">Please select an option.</option>
					<option value=1 >1</option>
					<option value=2 >2</option>
					<option value=3 >3</option>
					<option value=4 >4</option>
				</select></td>
				<td class="error">*</td>
        </tr>

        <tr>
				<td class="h">&nbsp;</td>
				 <td><input type="submit" class="button" value="Generate PDF" name="submit"/></td> 
        </tr>

        </table>
	</form>
</div>
</body>
</html>