<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nitc Question Bank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
   .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
   }
   /* Hide the carousel text when the screen is less than 600 pixels wide */
   @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
   }
  .set{
  padding-top: 100px;
  }
  @media (max-width: 600px) {
    .set {
      padding-top: 200px; 
    }
  }
  .blink_text {

    animation:1s blinker linear infinite;
    -webkit-animation:1s blinker linear infinite;
    -moz-animation:1s blinker linear infinite;

     color: darkgreen;
    }

    @keyframes blinker {  
     0% { opacity: 1.0; }
     50% { opacity: 0.0; }
     100% { opacity: 1.0; }
     }
  </style>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-brand">
      <a href="../index.php"><img alt="Brand" src="../images/logo.png" width="30"></a>
    </div>
    <a href="../index.php" class="navbar-brand" style="margin:  10px 10px 10px 0px;">NITC QuestionBank</a>
    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse navHeaderCollapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://nitc.ac.in" style="margin:  10px 10px 10px 0px;">NITC Home</a></li>
        <li><a href="#register" style="margin:  10px 10px 10px 0px;">About Us</a></li>
        <li><a href="../login.php"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-log-in">&nbsp;Login</button></a></li>
      </ul>
    </div>
  </div>
</div>

<div class="set">
<center><h1>DEPARTMENT OF COMPUTER SCIENCE</center></h1>
<center><h3>Program</h3></center>

<center><h3 class="blink_text">Right now only MCA papers are Available*</h3></center>
<div class="container">
  <div class="panel-group" id="accordion1">
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;B.Tech</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse11">Semester-1&raquo;</a>
            <div id="collapse11" class="panel-collapse collapse">
              <div class="panel-body">
                <!--a data-toggle="collapse" data-parent="#accordion11" href="#collapse111">Foundations of Computing CS1001&raquo;</a-->
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=Thermo&courseid=CHEM100">Foundations of Computing CS1001&raquo;</a>
                <!--div id="collapse111" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="student_csed.php?dept=csed&prog=MCA&courseid=cs1001">2011&nbsp;&nbsp;</a>
                    <a href="student_csed.php?dept=csed&prog=MCA&courseid=cs1001">2012&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                  </div>
                </div--></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse112">Foundations of Computing CS1002&raquo;</a>
                <div id="collapse112" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=cs1002">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse113">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse113" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse114">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse114" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
              </div>
            </div>
          </div>
        
          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse12">Semester-2&raquo;</a>
            <div id="collapse12" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse121">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse121" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse122">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse122" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse123">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse123" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse124">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse124" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse13">Semester-3&raquo;</a>
            <div id="collapse13" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse131">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse131" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse132">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse132" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse133">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse133" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse134">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse134" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse14">Semester-4&raquo;</a>
            <div id="collapse14" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse141">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse141" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse142">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse142" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse143">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse143" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse144">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse144" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse15">Semester-5&raquo;</a>
            <div id="collapse15" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse151">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse151" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse152">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse152" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse153">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse153" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse154">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse154" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
              </div>
            </div>
          </div>
          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse16">Semester-6&raquo;</a>
            <div id="collapse16" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse161">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse161" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse162">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse162" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse113">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse113" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse164">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse164" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
              </div>
            </div>
          </div>
          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse17">Semester-7&raquo;</a>
            <div id="collapse17" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse171">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse171" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse172">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse172" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse173">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse173" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse174">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse174" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse18">Semester-8&raquo;</a>
            <div id="collapse18" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse181">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse181" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse182">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse182" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse183">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse183" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse184">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse184" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
                </div></br>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse2">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;MCA</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">

          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse21">Semester-1&raquo;</a>
            <div id="collapse21" class="panel-collapse collapse">
              <div class="panel-body">
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=Introduction to Programming&courseid=CS2301">Introduction to Programming</a>
                </br>
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=Logic Design&courseid=CS2001">Logic Design</a>
                </br>
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=Discrete Mathematics&courseid=MA6010">Discrete Mathematics</a>
                </br>
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=Professional Communication&courseid=MS1001">Professional Communication</a>
                </br>
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=Introduction To Programming Laboratory&courseid=CS2391">Introduction To Programming Laboratory</a>
              </div>
            </div>
          </div>
        
          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse22">Semester-2&raquo;</a>
            <div id="collapse22" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=Data Structure And Algorithms&courseid=CS2005">Data Structure And Algorithms</a>
                </br>
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=Computer Organization&courseid=CS2004">Computer Organization</a>
                </br>
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=DATA STRUCTURES LABORATORY&courseid=CS2094">DATA STRUCTURES LABORATORY</a>
                </br>
                
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse23">Semester-3&raquo;</a>
            <div id="collapse23" class="panel-collapse collapse">
              <div class="panel-body">
               
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=Operating System&courseid=CS3003">Operating System</a>
                </br>
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=Database Management System&courseid=CS3002">Database Management Systems</a>
                </br>
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=Database Management System Laboratory&courseid=CS3095">Database Management System Laboratory</a>
                </br> 
               
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse24">Semester-4&raquo;</a>
            <div id="collapse24" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=SOFTWARE ENGINEERING&courseid=CS3004">SOFTWARE ENGINEERING</a>
                </br>
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=Computer Networks&courseid=CS3006">Computer Networks</a>
                </br>
                <a href="student_csed.php?dept=Department Of Computer Science And Engineering&prog=MCA&course=OBJECT ORIENTED PROGRAMMING&courseid=CS3301">OBJECT ORIENTED PROGRAMMING</a>
                </br> 

              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse25">Semester-5&raquo;</a>
            <div id="collapse25" class="panel-collapse collapse">
              <div class="panel-body">
               


              </div>
            </div>
          </div>
          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse26">Semester-6&raquo;</a>
            <div id="collapse26" class="panel-collapse collapse">
              <div class="panel-body">
                
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;M.Tech</a>
        </h4>
      </div>
      <!--div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          
          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse31">Semester-1&raquo;</a>
            <div id="collapse31" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse311">Foundations of Computing CS1001&raquo;</a>
               
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse312">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse313">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse314">Foundations of Computing CS1001&raquo;</a>
                
              </div>
            </div>
          </div>
        
          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse32">Semester-2&raquo;</a>
            <div id="collapse32" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse321">Foundations of Computing CS1001&raquo;</a>
               
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse322">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse323">Foundations of Computing CS1001&raquo;</a>
                <div id="collapse323" class="panel-collapse collapse">
                  <div class="panel-body">
                    <a href="#">2017&nbsp;&nbsp;</a>
                    <a href="#">2016&nbsp;&nbsp;</a>
                    <a href="#">2015&nbsp;&nbsp;</a>
                    <a href="#">2014&nbsp;&nbsp;</a>
                    <a href="#">2013&nbsp;&nbsp;</a>
                  </div>
               
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse33">Semester-3&raquo;</a>
            <div id="collapse33" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse331">Foundations of Computing CS1001&raquo;</a>
               
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse332">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse333">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse334">Foundations of Computing CS1001&raquo;</a>
                
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse34">Semester-4&raquo;</a>
            <div id="collapse34" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse341">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse342">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse343">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse344">Foundations of Computing CS1001&raquo;</a>
                
              </div>
            </div>
          </div>
        </div>
      </div-->
    </div>


    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse4">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;Ph.D</a>
        </h4>
      </div>
      <!--div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">

          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse41">Semester-1&raquo;</a>
            <div id="collapse41" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse411">Foundations of Computing CS1001&raquo;</a>
               
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse412">Foundations of Computing CS1001&raquo;</a>
                 
                 
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse413">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse414">Foundations of Computing CS1001&raquo;</a>
                
              </div>
            </div>
          </div>
        
          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse42">Semester-2&raquo;</a>
            <div id="collapse42" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse421">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse422">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse423">Foundations of Computing CS1001&raquo;</a>
               
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse424">Foundations of Computing CS1001&raquo;</a>
                
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse43">Semester-3&raquo;</a>
            <div id="collapse43" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse431">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse432">Foundations of Computing CS1001&raquo;</a>
               
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse433">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse434">Foundations of Computing CS1001&raquo;</a>
                
              </div>
            </div>
          </div>

          <div class="panel-group" id="accordion111">
            <a data-toggle="collapse" data-parent="#accordion11" href="#collapse44">Semester-4&raquo;</a>
            <div id="collapse44" class="panel-collapse collapse">
              <div class="panel-body">
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse441">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse442">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse443">Foundations of Computing CS1001&raquo;</a>
                
                <a data-toggle="collapse" data-parent="#accordion11" href="#collapse444">Foundations of Computing CS1001&raquo;</a>
                
              </div>
            </div>
          </div>
        </div>
      </div-->
    </div>

  </div>
</div>
</div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>