<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CUSTOMER LOGIN</title>
<link rel="stylesheet" type="text/css" href="../scripts/local/formstyle.css">
<style>
  .error{
	  color:rgba(255,0,0);
    font-size:12px;
  }

  #errId{
    display:none;
  }

  #errName{
    display:none;
  }

  #errDate{
    display:none;
  }

  #errIn{
    display:none;
  }

  #errPurp{
    display:none;
  }

  #errPurch{
    display:none;
  }

  #errType{
    display:none;
  }
</style>
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
  	 <form id="form" action ="query.php" method="post">
  	 	 <div class="box">
  	 	 	   <div class="form-head">
  	 	 	   	  <h3>CUSTOMER LOG FORM</h3>
  	 	 	   </div>

  	 	 	   <div class="form-body">
                <label for="">Customer ID</label><br>
	              <input id="custId" name="custId" type="text" placeholder=""><a class="error" id="errId">Please input ID</a> 
                <br>
                <label for="appt-time">Customer Name</label><br>
	              <input id="custName" name="custName" type="text" placeholder=""><a class="error" id="errName">Please input name</a>
                <br>
	              <label for="appt-time">Time In</label><br>
	              <input id="time" type="time" id="appt" name="time"
	                      min="12:00" max="59:00"><a style="color: red;"class="error" id="errIn">Please input time in</a>
	              <br><label for="date">Date</label><br>
                  <input type="date" id="date" name="date">
                  <a class ="error" id="errDate">Please input date</a>
                  <br>
                  <br>
 
               <div class="select">
                <select name="purpose" id="purpose">
                    <option value="">Purpose</option>
                    <option value="School Work">School Work</option>
                    <option value="Work">Work</option>
                    <option value="Chill">Chill</option>
                </select>
              </div>
              <a class="error" id="errPurp">Please select purpose</a>
              <br>
              
              <div class="select">
                <select name="ratePurch" id="ratePurch">
                    <option value="">Rate Purchased</option>
                    <option value="First Hour">First Hour</option>
                    <option value="Hourly">Hourly</option>
                    <option value="Daily">Daily</option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                </select>
              </div>  
              <a class="error" id="errPurch">Please select an option</a>

              <br>
              <div class="select">
                <select name="rateType" id="rateType">
                    <option value="">Rate Type</option>
                    <option value="Student">Student</option>
                    <option value="Regular">Regular</option>
                </select>
              </div> 
              <a class="error" id="errType">Please select an option</a>
              <div class="form-footer">
                 <!--<br><button type="submit"><a href="customerlist.html">Add</a></button>-->
                 <br><button type="button" id="add">Add</button>
               </div><br><br><br>
      	  </div>
    </form>
    </section>   	  
    </body>


    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/jquery-ui.min.js"></script>

    <script>
        function showError(id, name, time, date, type, purch, purp){
          var retval=1;
          if(id==""){
            $("#errId").show();
            retval=0;
          }
          
          if(name==""){
            $("#errName").show();
            retval=0;
          }

          console.log(name);
          if(time==""){
            $("#errIn").show();
            retval=0;
          }
          if(date==""){
            $("#errDate").show();
            retval=0;
          }
          if(type==""){
            $("#errType").show();
            retval=0;
          }
          console.log(type);
          if(purch==""){
            $("#errPurch").show();
            retval=0;
          }
          console.log(purch);
          if(purp==""){
            $("#errPurp").show();
            retval=0;
          }
          console.log(purp);
          

          $(".error").fadeOut(3000);
          return retval;
          
        }
        function addCust(id, name, time, date, type, purch, purp){
          var bool;
          bool=showError(id,name,time,date,type,purch,purp);
          if(bool==1){
            $("#form").submit();
          }
        }//setTimeout(showError,15000);
        
        $(document).ready(function () {
            var time =$("#time").val();
            <?php
                $username="root";
                $password="";
                $database="worklab";
                $mysqli = new mysqli("localhost", $username, $password, $database);

                $mysqli->select_db($database) or die( "Unable to select database");
                	
                $mysqli->close();
            ?>
            console.log("console working");
            $("#add").click(function(){
              addCust(
                $("#custId").val(), 
                $("#custName").val(), 
                $("#time").val(),
                $("#date").val(),
                $("#rateType").val(),
                $("#ratePurch").val(),
                $("#purpose").val()
              );
            })
            
            
        })
    </script>


</html>

