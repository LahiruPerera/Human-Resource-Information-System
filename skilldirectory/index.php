<html>
<head>
	<title>USER </title>
    <link rel="stylesheet" type="text/css" href="../public/css/artista.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Inconsolata|Catamaran" rel="stylesheet">
    <script type="text/javascript">
	function validateForm() 
	{
		var name = document.forms["transcript"]["name"].value;
		var index = document.forms["transcript"]["index"].value;
		var regno = document.forms["transcript"]["regno"].value;
		var year = document.forms["transcript"]["year"].value;

		if (index.length !=8)
		{
			alert("Please enter a valid Index No.");
			return false;
		}


		else if (regno.length !=9)
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

	<div class="clearfix">
		<?php include_once('templates/side_panel.php'); ?>
		<?php include_once('templates/top_pane.php'); ?>
	<div class = "bottomPanel">
	<h1 id="title" >Undergraduate Transcript</h1>
	<form name="transcript" method="post" class="basic-grey" action="trans/getpdf.php" onsubmit="return validateForm()">
		<table>
        <tr>
                <h1>Application for undergraduate transcript </br></br>
                <span class="error">* Required fields.</span>
        </tr>

        <tr>
                <td class="h">Full Name :</td>
			    <td><input id="name" type="text" name="name" placeholder="Your full name" required/></td>
				<td class="error">* </td>
        </tr>
                
        <tr>
                <td class="h">Index no :</td>
			    <td><input id="index" type="text" name="index" placeholder="" required/></td>
				<td class="error">*</td>
        </tr>
               
        <tr>
                <td class="h">Registration no :</td>
			    <td><input id="regno" type="text" name="regno" placeholder="" required/></td>
				<td class="error">* </td>
        </tr>

        <tr>
				<td class="h">Year :</td>
				 <td><select name="year" required>
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
</div>
</body>
</html>