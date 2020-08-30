<?php
$g1 = (int)$_POST["group1"];
$g2 = (int)$_POST["group2"];
$g3 = (int)$_POST["group3"];
$g4 = (int)$_POST["group4"];
$g5 = (int)$_POST["group5"];
$g6 = (int)$_POST["group6"];
$g7 = (int)$_POST["group7"];
$g8 = (int)$_POST["group8"];
$g9 = (int)$_POST["group9"];
$g10 = (int)$_POST["group10"];

$result =  $g1+$g2+$g3+$g4+$g5+$g6+$g7+$g9+$g10;



?>

<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->        
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
 <nav class="nav-wrapper orange z-depth-5">
    <div>
      <a href="index.html" class="brand-logo center" style="font-size: 40px;">Know You...</a>
    </div>
  </nav>




<br>
<div class="row">
    <div class="col s12 m6">
      <div class="card  darken-5 z-depth-5">
        <div class="card-content row center offset-l4 ">
          <span class="card-title"><b style="background-color: #563D7C;padding: 12px;width: 100%;color: white;border-radius: 12px" class="z-depth-2">The Result...</b></span>
          <br>
          <h5>So your Total Score is : <b class="orange">&nbsp;<?php echo $result; ?>/50&nbsp; </b></h5>





          	<?php
          		if(0<=$result and $result<=10){
          			?>
          			<h5 class="white-text" style="background-color: #f9180c;padding: inherit;">You need to Improve yourself Buddy</h5>
          			<?php
          		}elseif (11<=$result and $result<=20) {
          			?>
          			<h5 class=" white-text" style="background-color: #ea3a3a;padding: inherit;" >At the verge of beeing good</h5>
          			<?php
          		}elseif (21<=$result and $result<=30) {
          			?>
          			<h5 class=" white-text" style="background-color: #f24907;padding: inherit;"> You're an innovator </h5>
          			<?php
          		}elseif (31<=$result and $result<=40) {
          			?>
          			<h5 class=" white-text" style="background-color: #f78c09;padding: inherit;">You're a Care taker!</h5>
          			<?php
          		}elseif (41<=$result and $result<=50) {
          			?>
          			<h5 class=" white-text" style="background-color: #3c7720;padding: inherit;">Close to Mr/Miss Perfectonist</h5>
          			<?php
          		}
          	?>






        <!-- <ol style="font-size: 15px;margin-left: -35px">
        	<li>If Your score ranges from <b>00 to 10</b></li>
        	
        	<li>If Your score ranges from <b>11 to 20</b></li>
        	<li>If Your score ranges from <b>21 to 30</b></li>
        	<li>If Your score ranges from <b>31 to 40</b></li>
        	<li>If Your score ranges from <b>41 to 50</b></li>
        </ol> -->
        </div>
        <div class="card-action center">
          <a href="https://wa.me/whatsappphonenumber/?text=www.knowyourpersonality.ml">Share this</a>
          <a href="index.php">Back</a>
        </div>
      </div>
    </div>
  </div>

<div class="fixed-action-btn">
    <a class="btn-floating btn-large red pulse-light" href="https://wa.me/whatsappphonenumber/?text=www.knowyourpersonality.ml">
      <i class="large material-icons">share</i>
    </a>
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e99a1c646996140"></script>

 <footer class="page-footer">
    <div class="footer-copyright">
      <center></center>
      <div class="container">
        <h6 align="center">2020 Copyrights reserved with site Owner</h6>
        <h6 align="center"><a href="#modal1" style="text-decoration: none;color:white;" onclick="show()">Know Creator</a></h6>
        <h5 align="center" style="display: none;" id="show" onclick="hide()" class="orange">Rohan karankot</h5>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  function show() {
    console.log("came");
    document.getElementById('show').style.display="block";
  }
  function hide() {
    console.log("went");
    document.getElementById('show').style.display="none";
  }
</script>

</body>
</html>