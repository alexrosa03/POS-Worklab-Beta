<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CUSTOMER LOGIN</title>
<link rel="stylesheet" type="text/css" href="../scripts/local/formstyle.css">
</head>
<body>

  <nav class="navbar">
    <img class="logo" src="../assets/img/output-onlinepngtools.png">
      <a href="#">Customers</a>
      <a href="#">Inventory</a>
      <a href="#">Rates</a>
      <a href="#">Employees</a><br>
    <img class="searchLogo" src="../assets/img/search.png">
    <img class="searchLogo" src="../assets/img/bell.png">
  </nav>

  <section class="login-page">
  	 <form>
  	 	 <div class="box">
  	 	 	   <div class="form-head">
  	 	 	   	  <h3>CUSTOMER LOG FORM</h3>
  	 	 	   </div>

  	 	 	   <div class="form-body">
                <label for="">Customer ID</label><br>
	              <input type="text" placeholder=""><br>
                <label for="appt-time">Customer Name</label><br>
	              <input type="text" placeholder=""><br>
	              <label for="appt-time">Time In</label><br>
	              <input type="time" id="appt" name="appt"
	                      min="12:00" max="59:00" required>
	              <br><label for="date">Date</label><br>
	              <input type="date" id="date" name="date"><br>
 
               <div class="select">
                <select name="format" id="format">
                    <option selected disabled>Purpose</option>
                    <option value="pdf">School Work</option>
                    <option value="txt">Work</option>
                    <option value="epub">Chill</option>
                </select>
              </div>

              <br>
              
              <div class="select">
                <select name="format" id="format">
                    <option selected disabled>Rate Purchased</option>
                    <option value="">First Hour</option>
                    <option value="">Hourly</option>
                    <option value="">Daily</option>
                    <option value="">Weekly</option>
                    <option value="">Monthly</option>
                </select>
              </div>  

              <br>
              <div class="select">
                <select name="format" id="format">
                    <option selected disabled>Rate Type</option>
                    <option value="Student">Student</option>
                    <option value="Regular">Regular</option>
                </select>
              </div> 

              <div class="form-footer">
                 <br><button type="submit"><a href="customerlist.html">Add</a></button>
               </div><br><br><br>
      	  </div>
    </form>
  </section>   	  
</body>


<script src="../public/js/jquery.min.js"></script>
<script src="../public/=js/jquery-ui.min.js"></script>




</html>

