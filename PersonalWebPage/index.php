<!doctype html>
<html lang="en">
  <head>
  
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Santhosh Raj Ravirala</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.10.1/bootstrap-social.css" rel="stylesheet" >

     <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
  </head>
   
<body>
<header>
    <nav id="header-nav" class="navbar navbar-default ">
      <div class="container">
        <div class="navbar-header">
          <a href="index.html" class="pull-left visible-md visible-lg">
            <div id="logo-img" alt="Logo image"></div>
          </a>

          <div class="navbar-brand " >
            <a href="index.html"><h1 >Santhosh Raj Ravirala</h1></a>
            <p>
              <!-- <img src="images/star-k-logo.png" alt="Kosher certification"> -->
              <span>Computer Science Graduate Student</span>
            </p>
          </div>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
      </div>
    </nav>
     <nav id="header-nav2" class="navbar navbar-default ">
      <div class="container">
        <div class="collapse navbar-collapse " id="collapsable-nav">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="Santhosh Raj ravirala_Resume.doc">Resume</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!-- <li><a href="#">Courses</a></li> -->
            <li><a href="#">Android</a></li>
            <!-- <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
      </ul>
      </div>
        <!-- <div class="navbar-header">
          <a href="index.html" class="pull-left visible-md visible-lg">
            <div id="logo-img" alt="Logo image"></div>
          </a>

          <div class="navbar-brand " >
            <a href="index.html"><h1 >Santhosh Raj Ravirala</h1></a>
            <p>
              <!-- <img src="images/star-k-logo.png" alt="Kosher certification"> -->
              <!-- <span>Computer Science Graduate Student</span>
            </p>
          </div>

          <button type="button" class="navbar-toggle colla
          psed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div> --> 
      </div>
    </nav>


  </header>

   
   
   <div id="main-content" class="container"> 
        <!-- <div class="jumbotron">
          <img src="images/jumbotron_768.jpg" alt="Picture of Clemson" class="img-responsive visible-xs">

        </div>  -->
        
        <!-- <div class="jumbotron">
          <img src="images/jumbotron_768.jpg" alt="Picture of Clemson" class="img-responsive visible-xs">

        </div>  -->
		
		<div id = "myCarousel" class = "carousel slide">
         
         <!-- Carousel indicators -->
         <ol class = "carousel-indicators">
            <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
            <li data-target = "#myCarousel" data-slide-to = "1"></li>
            <li data-target = "#myCarousel" data-slide-to = "2"></li>
         </ol>   
         
         <!-- Carousel items -->
         <div class = "carousel-inner">
            <div class = "item active">
            <div class="slide1"  >
               <img src = "images/jumbotron_768.jpg" alt = "First slide" class="img-responsive visible-xs">
               </div>
            </div>
            
            <div class = "item" >
             <div class="slide2" >
               <img src = "images/slide2_768.jpg" alt = "Second slide" class="img-responsive visible-xs">
               </div>
            </div>
            
            <div class = "item" >
             <div class="slide3" >
               <img src = "images/slide3_768.jpg" alt = "Third slide" class="img-responsive visible-xs">
               </div>
            </div>
         </div>
         
         <!-- Carousel nav -->
         <a class = "carousel-control left" href = "#myCarousel" data-slide = "prev">&lsaquo;</a>
         <a class = "carousel-control right" href = "#myCarousel" data-slide = "next">&rsaquo;</a>
         
      </div>
	
	
        
    <div   class="table-responsive">
	
	
<?php	
	
	/// display the table ------------------------------
// MARK: CONFIG
$dbhostname = 'gradchat.clemson.edu';
 
$dbusername = 'GStiger';
 
$dbpassword = 'Tq2Iqdlw8U';
 
$conn = mysql_connect($dbhostname, $dbusername, $dbpassword);

//echo "Start Connection\n";
if(! $conn )

{
    
    die('Could not connect: ' . mysql_error());
    
    
}


// MARK: SELECT DATABASE

mysql_select_db("northwind") or die(mysql_error());

$result = mysql_query("SELECT northwind.orders.id as Orderid,shipped_date as ShippedDate,company as companyname,
ship_name as contactname,ship_address as contactaddress,count(northwind.order_details.product_id) as  products
 FROM northwind.orders join northwind.customers
on northwind.orders.customer_id=northwind.customers.id 
join northwind.order_details on  northwind.order_details.order_id= northwind.orders.id
where employee_id=1 and northwind.orders.status_id=2 group by northwind.orders .id");


if($result){
$numRows = mysql_num_rows($result);
echo "<table class='infoTable' border=1 style=\"float: left;width:100%\" class='table borderless''>";
echo "<tr>
<!--<th>UserID</th>-->
<th>OrderID</th>
<th>Shipped date</th>
<th>Customer Company Name</th>
<th>Contact Name</th>

<th>Number Of Products</th>

</tr>";
while($row = mysql_fetch_assoc($result))
{


    echo '<tr>';
    //echo '<td>'.$row['userID'].'</td>';
    echo '<td>'.$row['Orderid'].'</td>';
    echo '<td>'.$row['ShippedDate'].'</td>';
	 echo '<td>'.$row['companyname'].'</td>';
	 echo '<td>'.$row['contactname'].'</td>';
   
	echo '<td>'.$row['products'].'</td>';
   
    


    echo '</tr>';

	//} 
}
echo '</table>';



}
else 
{
echo "Error: " . mysql_error();
}
mysql_close($conn);

	?>	
	
	</div>
	</div>
	
	

      <footer class="panel-footer ">
        <div class="container text-center" >
        
        <a href="https://www.facebook.com/santhoshraj007" target="_blank""><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/in/santhoshrajravirala" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-skype"></i></a>
        <a href="mailto:sravira@clemson.edu" target="_blank"><i class="glyphicon glyphicon-envelope"></i></a>
    </div><!--End container-->
      </footer>



   

 

  <!-- jQuery (Bootstrap JS plugins depend on it) -->
  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 1200
    })
  });
</script>
</body>

</html>
