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

<style>
  span {
    color: black;
  }
</style>

<body>

  <nav class="nav-wrapper orange z-depth-5">
    <div>
      <a href="index.html" class="brand-logo center" style="font-size: 40px;">Know You...</a>
    </div>
  </nav>
  <div class="container">
    <form action="result.php" method="POST">
      <div class="card text-black z-depth-5 ">
        <p class="flow-text">1) If you could have dinner with anyone in the world, whom would it be?</p>
        <p>
          <label>
            <input name="group1" type="radio" value="5" />
            <span>Adventurous Person</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group1" type="radio"  value="2"/>
            <span>Business person</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group1" type="radio" value="3"/>
            <span>Clebrity</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group1" required="" type="radio" value="1"/>
            <span>Politician</span>
          </label>
        </p>
      </div>
      <div class="card text-black z-depth-5">
        <p class="flow-text">2) Do you think you’d like to be famous? What would you be famous for?</p>
        <p>
          <label>
            <input name="group2" type="radio" value="4" />
            <span>Social Media Influencer</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group2" type="radio" value="3"/>
            <span>Actor/Actress</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group2" type="radio" value="2"/>
            <span>Politician</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group2" required="" type="radio" value="5"/>
            <span>Business Person</span>
          </label>
        </p>
      </div>
      <div class="card text-black z-depth-5 ">
        <p class="flow-text">3) Before you call someone, do you take time to think about what you are going to say to
          them?</p>
        <p>
          <label>
            <input name="group3" type="radio" value="1" />
            <span>Tell the other person to pick topic</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group3" type="radio" value="5"/>
            <span>Yes think precisely</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group3" type="radio" value="3"/>
            <span>Depends</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group3" required="" type="radio" value="1"/>
            <span>No!</span>
          </label>
        </p>
      </div>
      <div class="card text-black z-depth-5 ">
        <p class="flow-text">4) What does a perfect day look like to you?</p>
        <p>
          <label>
            <input name="group4" type="radio" value="4" />
            <span>Good Weather</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group4" type="radio" value="5"/>
            <span>Things done on time</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group4" type="radio" value="3"/>
            <span>Getting Appreciated</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group4" required="" type="radio" value="2"/>
            <span>A Miracle</span>
          </label>
        </p>
      </div>
      <div class="card text-black z-depth-5 ">
        <p class="flow-text">5) What do you have in common with your family?</p>
        <p>
          <label>
            <input name="group5" type="radio" value="3" />
            <span>Friends</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group5" type="radio" value="2"/>
            <span>Enemies</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group5" type="radio" value="5"/>
            <span>Good Memories</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group5" required="" type="radio" value="1"/>
            <span>None!</span>
          </label>
        </p>
      </div>
      <div class="card text-black z-depth-5 ">
        <p class="flow-text">6) What is the one thing you are the most grateful for in your entire life?</p>
        <p>
          <label>
            <input name="group6" type="radio" value="5" />
            <span>A happy life</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group6" type="radio" value="4"/>
            <span>Life Partner</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group6" type="radio" value="3"/>
            <span>Career Success</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group6" required="" type="radio" value="5"/>
            <span>Life Success</span>
          </label>
        </p>
      </div>
      <div class="card text-black z-depth-5 ">
        <p class="flow-text">7) What’s your life story?</p>
        <p>
          <label>
            <input name="group7" type="radio" value="3" />
            <span>Adventurous</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group7" type="radio" value="1"/>
            <span>Sad</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group7" type="radio" value="2"/>
            <span>Aggresive</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group7" required="" type="radio" value="5"/>
            <span>Openness to Experience </span>
          </label>
        </p>
      </div>
      <div class="card text-black z-depth-5 ">
        <p class="flow-text">8) If you could find out one thing about your future, what would do?</p>
        <p>
          <label>
            <input name="group8" type="radio" value="2" />
            <span>Change</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group8" type="radio" value="3"/>
            <span>Accept</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group8" type="radio" value="5"/>
            <span>Be prepared</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group8" required="" type="radio" value="1"/>
            <span>None!</span>
          </label>
        </p>
      </div>
      <div class="card text-black z-depth-5 ">
        <p class="flow-text">9) What’s the one thing you wish you had done at this point in your life?</p>
        <p>
          <label>
            <input name="group9" type="radio" value="4" />
            <span>Get a Partner/Be in relationship</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group9" type="radio" value="5"/>
            <span>Earn Money</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group9" type="radio" value="5"/>
            <span>Earn Social Status</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group9" required="" type="radio" value="3"/>
            <span>Good as it is...</span>
          </label>
        </p>
      </div>
      <div class="card text-black z-depth-5 ">
        <p class="flow-text">10) Who is the person that means the most to you in your life?</p>
        <p>
          <label>
            <input name="group10" type="radio" value="4" />
            <span>Partner</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group10" type="radio" value="5"/>
            <span>Parents</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group10" type="radio" value="3"/>
            <span>Idol person</span>
          </label>
        </p>
        <p>
          <label>
            <input name="group10" required="" type="radio" value="2"/>
            <span>Relative</span>
          </label>
        </p>
      </div>
      <br>
      <div id="div" class="row center">
        <button class="waves-effect waves-light btn-large" type="submit">Find how's my personality</button>

      </div>
    </form>
  </div>
  <br>
  <div class="fixed-action-btn">
    <a class="btn-floating btn-large red pulse-light" href="https://wa.me/whatsappphonenumber/?text=urlencodedtext">
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