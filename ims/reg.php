<html>
<head>
<div style='background-color:brown' width=50%>
<h1 style='color:pink' align='center'><b><i>Create An Acount</i></b></h1></div>
<h4 style='color:black' align='center'>(all the fields are necessary)</h4>
<title>
Registration-Internal Messaging System
</title>
<script>
function valid()
{
	var user=document.getElementById('user').value;
	if(user=='')
	{
		alert('Enter UserName');
		return false;
	}
	
	var pass=document.getElementById('pass').value;
	if(pass=='')
	{
		alert('Enter password');
		return false;
	}
	else
	{
		if(pass.length<=3)
		{
			alert('password length must be atleast of 4 characters')
			return false;
		}
	}
	
	var email=document.getElementById('email').value;
	
	
	var at=email.indexOf('@');
	var dt=email.lastIndexOf('.');
	if(email=='')
	{
		alert('enter email id');
		return false;
	}
	if(at<1||at>dt||dt+1==email.length||at+2>=dt)
	{
		alert('enter a valid email id');
		return false;
	}
	
	var add=document.getElementById('adds').value;
	if(add=='')
	{
		alert('enter address');
		return false;
	}
	
	
	var city=document.getElementById('city').value;
	if(city=='')
	{
		alert('Select your city');
		return false;
	}
	
	
	var d=document.getElementsByName('dob2');
	if(d=='')
	{
		alert('select date of birth');
		return false;
	}
	
	var d2=document.getElementById('d2').value;
	if(d2=='')
	{
		alert('select month of birth');
		return false;
	}
	var d1=document.getElementsByName('dob1');
	if(d1=='')
	{
		alert('select year of birth');
		return false;
	}
	
	
	var phno=document.getElementById('phno').value;
	if(phno=='')
	{
		alert('enter phone number');
		return false;
	}
    if(phno.length!=10)
	{
		alert('phone number must be of 10 digit');
		return false;
	}
	if(isNaN(phno))
	{
		alert('enter digits only');
		return false;
	}
	
	
   
	var gen=document.getElementsByName('g');
	var f=0;
	for(var i=0;i<gen.length;i++)
	{
		if(gen[i].checked==true)
		{
			f++;
		}
	}
	if(f==0)
	{
		alert('Select Gender');
		return false;
	}
	if(gen=='')
	{
		alert('Please Select Gender');
		return false;
	}
	
	
	return true;
}
</script>
</head>

<body style="background-color:cyan" align='center' >
<center><table>
<tr><td></td>
<td>

<form name='j' action='regacc.php' method='post' onsubmit='return valid()' enctype='multipart/form-data'>

<fieldset width=50%><legend width=50%>Personal Information</legend>
<b><i>User Name:</i></b><input type='text' name='user' id='user' placeholder="Enter Username"><br><br>
<b><i>Password:</i></b><input type='password' name='pass' id='pass' placeholder="Enter Password"><br><br>
<b><i>Email:</i></b><input type='text' name='email' id='email' placeholder="Enter Email Id"><br><br>
<b><i>Address:</i></b><textarea name='adds' id='adds' placeholder="Enter Address"></textarea><br><br>

<b><i>City:</i></b>
<select name='city' id='city' >
<option value='' placeholder="select">select</option>
<option value='Kolkata'>Kolkata</option>
<option value='Mum'>Mumbay</option>
<option value='Del'>Delhi</option>
<option value='Bangalore'>bangalore</option>
<option value='Pune'>Pune</option><br><br>
</select><br><br>

<b><i>Date of Birth:</i></b>
<select name='dob2' id='d'><option value=''>Day</option>

		<?php $v=1;
		for($i=0;$i<31;$i++)
		{?>
<option value='<?php echo $v;?>'> <?php echo $v++;?> </option>
		<?php } ?>
</select>

<select name='dob' id='d2'>
<option value=''>Month</option>
<option value='jan'>January</option>
<option value='feb'>February</option>
<option value='mar'>March</option>
<option value='apr'>April</option>
<option value='may'>May</option>
<option value='june'>June</option>
<option value='july'>July</option>
<option value='aug'>August</option>
<option value='sep'>September</option>
<option value='oct'>October</option>
<option value='nov'>November</option>
<option value='dec'>December</option>
</select>

<select name='dob1' id='d1'><option value=''>Year</option>
        <?php $v=1930;
		for($i=1930;$i<=2016;$i++)
		{?>
<option value='<?php echo $v;?>'>  <?php echo $v++;?> </option>
		<?php } ?>
</select><br><br>


<b><i>Phone number:</i></b><input type='text' name='phno' id='phno' placeholder="Enter Phone Number"><br><br>

<b><i>Select Gender:</i></b>
<input type='radio' name='g' value='male'>Male
<input type='radio' name='g' value='female'>Female<br><br>
<input type='file' name='f'><br>
<input type='submit' value='Submit'>
</fieldset>
</form>
</td>
<td></td>
</tr>
</table></center>
<a href='reg.php'  style='color:red'><button><b><i>Reset</i></b></button></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a href='index.php' style='color:red' align='center'><b><i>Log In Here</i></b></a>


</div>
</body>
</html>