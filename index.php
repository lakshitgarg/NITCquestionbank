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
  #templatemo_footer {
width: 100%;
border-top: 2px solid #507f9a;
height: 50px;
background: red;
float: left;
}
#templatemo_footer p {
padding-top: 20px;
color: #F3F3F3;
text-align: center;
}
  
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
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
  padding-top: 50px;
  }
  
  @media (max-width: 600px) {
    .set {
      padding-top: 100px; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-brand">
      <a href="index.php"><img alt="Brand" src="images/logo.png" width="30" /></a>
    </div>
    <a href="index.php" class="navbar-brand" style="margin:  10px 10px 10px 0px;">NITC QuestionBank</a>
    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse navHeaderCollapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.nitc.ac.in" style="margin:  10px 10px 10px 0px;">NITC Home</a></li>
        <li><a href="department/abc.php" style="margin:  10px 10px 5px 0px;">About Us</a></li>
        <li><a href="login.php">
            <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-log-in"> Login</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="set">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/slide1.jpg" alt="Image" />     
        </div>

        <div class="item">
          <img src="images/slider2.jpg" alt="Image" />      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
</div>

<center><h1>DEPARTMENTS OF NITC</center></h1>
<div class="container">
  <div class="panel-group" id="accordion1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING
        </a>
        </h4>
      </div>
      
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
          <b>Department of Computer Science and Engineering</b> offers Undergraduate and Postgraduate programs in 
          Computer Science and Engineering, Master of Computer Applications program, and a Doctoral degree program.
          </br></br>
          The fast changing scenario in Information Technology necessitates the Department to actively extend its 
          research and development activities. The current research interests of the Department include major areas 
          of research in Computer Science.Navigation Category:</br></br>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal1">About Us</button>
          <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Department Of Computer Science</h4>
                </div>
                <div class="modal-body">
                  <p>Department of Computer Science and Engineering</b> offers Undergraduate and Postgraduate programs in Computer Science and Engineering, Master of Computer Applications program, and a Doctoral degree program.</br></br>
                  The fast changing scenario in Information Technology necessitates the Department to actively extend its research and development activities. The current research interests of the Department include major areas of research in Computer Science.Navigation Category</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <a href="department/csed.php"><button type="button" class="btn btn-danger">Question Papers</button></a>
        </div>
      </div>
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;DEPARTMENT OF ARCHITECTURE</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <b>The Department of Architecture</b> envisages to provide an academically strong platform for the aspirants those who not only want to make a good metier 
          but also to leave an enduring impression in the field of Architecture. 
          The educational programme in Architecture through out 
          the world shares a common view of the future of mankind and recognises its unpredictability. 
          This calls for an attitude for research, exploration and evaluation to authenticate the work of design.<br>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal2">About Us</button>
          <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Department Of Architecture</h4>
                </div>
                <div class="modal-body">
                   The Department of Architecture is committed to provide an academically strong platform for those aspirants who would make a good meatier and 
                   leave an enduring impression in the field of Architecture and Urban Planning. 
                   <br><br>The educational program in Architecture throughout the world 
                   shares a common view of the future of mankind and recognizes its unpredictability. This calls for an attitude for research, exploration and 
                   evaluation to authenticate the work of design. Great are the thoughts that moved the world... greater are the perpetuators of these thoughts. 
                   The Department of Architecture plans and strives to reach these goals by offering the Undergraduate (5 Year B.Arch.) Degree Program in Architecture.
                   <br><br>The Post Graduate Degree (2 Year M. Plan) Program in Urban Planning aims to produce generalist planning professionals of international quality who 
                   can adapt to any challenging planning situation with superior capability to use geo-informatics which includes GIS, remote sensing, related models 
                   and quantitative methods in urban, regional and environmental planning. The program envisages inculcating scientific diagnostic and urban management 
                   abilities in professional planners to understand planning issues holistically and equip them with predictive ability to analyze the outcome of economic, 
                   social, environment and energy impacts using simulation of future scenarios.
                   <br><br>"The Department of Architecture has been RANKED as "SIXTH" AMONG THE "TOP TEN ARCHITECTURE INSTITUTES" IN INDIA by the OUTLOOK survey. This has been published 
                   in the OUTLOOK Magazine July 2015 Issue."
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <a href="willbe.html"><button type="button" class="btn btn-danger">Question Papers</button></a>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;DEPARTMENT OF BIOTECHNOLOGY</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <b>Biotechnology</b> is the engineering of products involving living organisms or their derivatives. 
          Earlier it was used mainly in agriculture and wine industry without knowing molecular basis of plant 
          transformation or product formation. However, the earth-shaking discovery of DNA double helix by J. D. 
          Watson and F. C. Crick in early 1950s revolutionized this field as never-before and paved the way for 
          understanding life at cellular and molecular level. The discovery of restriction enzymes (molecular scissors) 
          gave birth to recombinant DNA technology and it allows the manipulation of genetic makeup of any organism including 
          human being at will. This field is popularly known as Genetic Engineering<br>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal3">About Us</button>
          <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Department Of Biotechnology</h4>
                </div>
                <div class="modal-body">
                  <p>Biotechnology is the engineering of products involving living organisms or their derivatives. 
                    Earlier it was used mainly in agriculture and wine industry without knowing molecular basis of plant 
                    transformation or product formation. However, the earth-shaking discovery of DNA double helix by J. D. 
                    Watson and F. C. Crick in early 1950s revolutionized this field as never-before and paved the way for 
                    understanding life at cellular and molecular level. The discovery of restriction enzymes (molecular scissors) 
                    gave birth to recombinant DNA technology and it allows the manipulation of genetic makeup of any organism 
                    including human being at will. This field is popularly known as Genetic Engineering. It has made possible the 
                    cloning of individual genes and the whole organism as well. The cloning of Dolly the sheep by Ian Wilmut and 
                    colleagues at the Roslin Institute in Edinburgh, Scotland, in 1996, was a major milestone in science and 
                    technology and holds out hope for therapeutic cloning. Modern biotechnology is also associated with the use of 
                    genetically modified organisms like bacterium Escherichia coli, baker's yeast Saccharomyces cerevisiae, plants 
                    and animals for the production of antibiotics or biological molecules of human origin.<br><br>
                    Over the years, biotechnology has evolved as an interdisciplinary area of science and technology having 
                    linked with many engineering fields like chemical engineering, computer science, electrical engineering, 
                    mechanical engineering and so on. For example, technological revolution in computer science played a pivotal 
                    role for processing of millions of DNA sequences coming out from whole genome sequencing of different organisms 
                    including humans. The human genome sequence revealed that 99.9% sequences of any two individuals are same and an 
                    individual is different from others because of only 0.10% DNA sequences.
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <a href="willbe.html"><button type="button" class="btn btn-danger">Question Papers</button></a> 
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;DEPARTMENT OF CIVIL ENGINEERING</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
          <b>The Department of Civil Engineering</b> is one of the oldest Departments in this Institute. 
          It was established at the inception stage of the Calicut Regional Engineering College (CREC), which was 
          the forerunner to the present National Institute of Technology, Calicut (NITC) in 1961. Over the years, 
          the Department has grown from a level in which only an undergraduate programme leading to a Bachelor's 
          Degree in Civil Engineering was offered to one offering undergraduate, graduate, and research programmes<br>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal4">About Us</button>
          <div class="modal fade" id="myModal4" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Department Of Civil Engineering</h4>
                </div>
                <div class="modal-body">
                  <p>The Department of Civil Engineering is one of the oldest Departments in this Institute. 
                    It was established at the inception stage of the Calicut Regional Engineering College (CREC), 
                    which was the forerunner to the present National Institute of Technology, Calicut (NITC) in 1961. 
                    Over the years, the Department has grown many times in different spheres of activities. At present, 
                    the Department offers an undergraduate programme in Civil Engineering leading to the BTech degree and 
                    five graduate programmes - one each in Structural Engineering, Traffic and Transportation Planning, 
                    Offshore Structures, Environmental Geotechnology and Water Resources Engineering leading to the MTech 
                    degree of the Institute. In addition to the above, there are a number of students pursuing research at 
                    the Department in various fields of Civil Engineering leading to PhD. The Department is a recognized QIP 
                    centre of the AICTE for both MTech and PhD programmes. In addition to the above courses, the Department 
                    has been regularly conducting a number of short term training programmes for the benefit of faculty of 
                    technical institutions and working professionals.
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <a href="willbe.html"><button type="button" class="btn btn-danger">Question Papers</button></a> 
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;DEPARTMENT OF CHEMICAL ENGINEERING</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
          this is Department5 contents<br>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal5">About Us</button>
          <div class="modal fade" id="myModal5" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Department Of 5</h4>
                </div>
                <div class="modal-body">
                  <p>Department of 5</b> offers Undergraduate and Postgraduate programs in Computer Science and Engineering, 
                    Master of Computer Applications program, and a Doctoral degree program.</br></br>
                  The fast changing scenario in Information Technology necessitates the Department to actively extend its research
                   and development activities. The current research interests of the Department include major areas of research
                    in Computer Science.Navigation Category</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <a href="willbe.html"><button type="button" class="btn btn-danger">Question Papers</button></a> 
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;DEPARTMENT OF ELECRONICS AND COMMUNICATION ENGINEERING</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
          this is department6<br>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal6">About Us</button>
          <div class="modal fade" id="myModal6" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Department Of 6</h4>
                </div>
                <div class="modal-body">
                  <p>Department of 6</b> offers Undergraduate and Postgraduate programs in Computer Science and Engineering, 
                    Master of Computer Applications program, and a Doctoral degree program.</br></br>
                  The fast changing scenario in Information Technology necessitates the Department to actively extend its research
                   and development activities. The current research interests of the Department include major areas of research
                    in Computer Science.Navigation Category</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <a href="willbe.html"><button type="button" class="btn btn-danger">Question Papers</button></a>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;DEPARTMENT OF ELECTRICAL AND ELECTRONICS ENGINEERING</a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body">
          this is 7<br>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal7">About Us</button>
          <div class="modal fade" id="myModal7" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Department Of 7</h4>
                </div>
                <div class="modal-body">
                  <p>Department of 7</b> offers Undergraduate and Postgraduate programs in Computer Science and Engineering, 
                    Master of Computer Applications program, and a Doctoral degree program.</br></br>
                  The fast changing scenario in Information Technology necessitates the Department to actively extend its research
                   and development activities. The current research interests of the Department include major areas of research
                    in Computer Science.Navigation Category</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
         <a href="willbe.html"><button type="button" class="btn btn-danger">Question Papers</button></a>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;DEPARTMENT OF ENGINEERING PHYSICS</a>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body">
          this is biotechnology contents<br>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal8">About Us</button>
          <div class="modal fade" id="myModal8" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Department Of </h4>
                </div>
                <div class="modal-body">
                  <p>Department of 8</b> offers Undergraduate and Postgraduate programs in Computer Science and Engineering, 
                    Master of Computer Applications program, and a Doctoral degree program.</br></br>
                  The fast changing scenario in Information Technology necessitates the Department to actively extend its research
                   and development activities. The current research interests of the Department include major areas of research
                    in Computer Science.Navigation Category</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <a href="willbe.html"><button type="button" class="btn btn-danger">Question Papers</button></a>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;DEPARTMENT OF MACHENICAL ENGINEERING</a>
        </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
        <div class="panel-body">
          this is biotechnology 9<br>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal9">About Us</button>
          <div class="modal fade" id="myModal9" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Department Of 9</h4>
                </div>
                <div class="modal-body">
                  <p>Department of 9</b> offers Undergraduate and Postgraduate programs in Computer Science and Engineering, 
                    Master of Computer Applications program, and a Doctoral degree program.</br></br>
                  The fast changing scenario in Information Technology necessitates the Department to actively extend its research
                   and development activities. The current research interests of the Department include major areas of research
                    in Computer Science.Navigation Category</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <a href="willbe.html"><button type="button" class="btn btn-danger">Question Papers</button></a>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
          <span class="glyphicon glyphicon-hand-right"></span>&nbsp;&nbsp;DEPARTMENT OF PRODUCTIONFG ENGINEERING</a>
        </h4>
      </div>
      <div id="collapse10" class="panel-collapse collapse">
        <div class="panel-body">
          this is biotechnology 10<br>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal10">About Us</button>
          <div class="modal fade" id="myModal10" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Department Of 10</h4>
                </div>
                <div class="modal-body">
                  <p>Department of 10</b> offers Undergraduate and Postgraduate programs in Computer Science and Engineering, 
                    Master of Computer Applications program, and a Doctoral degree program.</br></br>
                  The fast changing scenario in Information Technology necessitates the Department to actively extend its research
                   and development activities. The current research interests of the Department include major areas of research
                    in Computer Science.Navigation Category</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-danger">Question Papers</button> 
        </div>
      </div>
    </div>

  </div>
</div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
<div id="templatemo_footer" style="background-color:black">
    <div>
        <p id="footer" style="color: white">NITC Question Bank Maintained by PRALAS</p>
    </div>
</div>
</html>