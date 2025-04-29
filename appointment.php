<html lang="en">
<head>
<style>
body{
	background-image: url('doc2.png');
	padding-top:100px;
}
#body_header
{

	width:auto;
	margin:0px auto;
	text-align:center;
	font-size:25px;
}
form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 20px;
    border: 1px solid black;
 
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

	input[type="text"],
	input[type="password"],
	input[type="date"],
	input[type="datetime"],
	input[type="email"],
	input[type="number"],
	input[type="search"],
	input[type="tel"],
	input[type="time"],
	input[type="url"],
	textarea,
select {
	  background: rgba(255,255,255,0.1);
	  border: none;
	  font-size: 16px;
	  height: auto;
	  margin: auto;
	  outline: 0;
	  padding: 8px;
	  width: 100%;
	  background-color: #e8eeef;
	  color: black;
	  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
}

	input[type="radio"],
	input[type="checkbox"]

{
	margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color:#338BA8;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
 border:none;
  margin-bottom: 10px;
 box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}
form {
    max-width: 480px;
  }


</style>
<script type="text/javascript" src="https://github.com/rubyeffect/easy_fill/tree/master/lib/easy_fill-0.0.1.min.js"></script>
  <title>Reach Me</title>
  <link rel="stylesheet" type="text/css" href="appointment.css" />
</head>

<body>
  <div id="container">
    
   
    <form action="" method="POST">
      <fieldset>
        <center><legend><span class="number" ></span>Appointment</legend></center>
        <label for="name">Name:</label>
        <input type="text" id="name" name="user_name"  required pattern="[a-zA-Z0-9]+">

        <label for="mail">Email:</label>
        <input type="email" id="mail" name="user_email"  required>

        <label for="tel">Contact Num:</label>
        <input type="tel" id="tel"  name="user_num">
		
		<label for="date">Date:</label>
        <input type="date" name="date" value="" required></input>


		
		<label class="label">specification:</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="specification" style="width:200px; height:30px;">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>ent</option>
                                    <option>dermatologist </option>
                                    <option>cardiologist</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>

      </fieldset>


    <center><button name="submit" class="btn  btn--blue" type="submit">submit</button></center>
    </form>
  </div>
  <?php
	
	  include 'config.php';
	if(isset($_POST["submit"]))
	{
	
	$user_name=$_POST["user_name"];
	$user_email=$_POST["user_email"];
	$user_num=$_POST["user_num"];
	$specification=$_POST["specification"];
	$date=$_POST["date"];
		
		
		$sql = "INSERT INTO appointment (user_name,user_email,user_num,specification,date) VALUES('$user_name','$user_email','$user_num','$specification','$date')";
			if ($conn->query($sql) === TRUE)
				{
				  echo"connect";
				} 
	
		
		
	}
	
  ?>
</body>
</html>