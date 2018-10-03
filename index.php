<!DOCTYPE html>
<html lang="en">

<head>
  
  <!--Important MetaData: title, keywords, etc..-->
  <meta charset="UTF-8" />
  <title>My Portfolio Page</title>
  <meta name="description" content="Portfolio Home Page" />
  <meta name="keywords" content="Web Project, Portfolio,Web Developer, Web Development" />
  <meta name="device" content="width=device-width,initial-scale=1.0" />
  <meta name="author" content="Adam Shaffer" />
  <meta name = "viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!--links to bootstrap- and w3-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Links to Devicons and Font Awesome -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/4f6a4b08efdad6bb29f9cc801f5c07e263b39907/devicon.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

  <!-- Links to Devicon Icons -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

  <!--Link to JavaScript Code-->
  <script src="great_developer.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!--include Modernizer feature checking-->
  <script src="/Libraries/Modernizr_Feature_Detection/modernizr-custom.js"></script>
  
<link rel="stylesheet" type="text/css" href="great_developer.css">
</head>

<body>
 <?php
    global $connection;
    $connection = mysqli_connect(mysql.portfolio.great-developer.com,,,great_developer_mysql);
    if($connection){
        echo "connected";
    }
    else {
        die("failed");
    }
    
    if(isset($_POST['submit'])){
        $Name = $_POST['Name'];
        $Title = $_POST['Title'];
        $Company = $_POST['Company'];
        $Email = $_POST['Email'];
        $Message = $_POST['Message'];
        $Name = mysqli_real_escape_string($connection, $Name);
        $Title = mysqli_real_escape_string($connection, $Title);
        $Company = mysqli_real_escape_string($connection, $Company);
        $Email = mysqli_real_escape_string($connection, $Email);
        $Message = mysqli_real_escape_string($connection, $Message);
        
        $query = "INSERT INTO Contacts(Name, Title, Company, Email, Message) VALUES('$Name','$Title','$Company','$Email','$Message')"
        $result = mysqli_query($connection,$query);
    }
    
    ?>
  <!--Modal section for form in contact section-it is placed at the beginning to prevent interference-->

  <!--INTRO SECTION-->
  <!--INTRO SECTION-->

  <div class="container-fluid" id="intro">
    <div class="row">
      <!--
      <div class="banner-text">
        Greetings, I am an aspiring web developer.<br> Are you looking for someone with front end web developement skills?<br>If so, look below to find out more about my recent projects.<br>
      </div>
-->
    
    </div>
      <a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, 
                &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;
                display:inline-block;border-radius:3px" 
         href="https://unsplash.com/@danielfazio?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" 
         rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Daniel Fazio">
        <span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg"
        style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title>
          <path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Daniel Fazio</span></a>
  </div>

  <nav class='navbar navbar-default'>
    <div class='container'>
      <div class='navbar-header'>
        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#mynavbar'>
        <span class='sr-only'>Toggle Navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
        <a href='#intro' class='navbar-brand menu-text'> Great Developer</a>
      </div>

      <div class='collapse navbar-collapse' id="mynavbar">
        <ul class='nav navbar-nav navbar-right'>
          <li><a href='#intro' class="menu-text">Home</a></li>
          <li><a href='#portfolio' class="menu-text">Portfolio</a></li>
          <li><a href='#skills' class="menu-text">Skills</a></li>
          <li><a href='#social-media' class="menu-text">Social Media</a></li>
          <li><a href="#about" class="menu-text">About</a></li>
          <li><a href="#contact" class="menu-text">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--BEGINNING OF PORTFOLIO-->

  <!--Portfolio container-->
  <div class="container-fluid" id="portfolio">
    <!--Three rows of three columns of pics leading to projects-->
    <!--page header for portfolio links-->
    <div class="row">

      <div class="page-header">
        Portfolio
      </div>

    </div>
    <!--Project Links-->
    <div class="row">
      <div class="col-xs-6 col-sm-4">
        <div class="image-container">
          <a href="../Simon_Game/Simon_Game.html" data-toggle="tooltip" title="Simon Game" target="_blank"><img class="img-rounded img-responsive" alt="under construction" src="https://www.dropbox.com/s/zd4h80djsgeo9h0/Simon_Game.png?raw=1"/></a>
        </div>
        <div class="caption">
          <p>
            Simon Game
          </p>
        </div>
        <div class="hidden-xs">
          <div class="sub-caption">
            <p>
              Do you remember the Simon Game?
            </p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4">
        <div class="image-container">
          <a href="../Calculator/javascript_calculator.html" data-toggle="tooltip" title="Basic Calculator" target="_blank"><img class="img-rounded img-responsive" alt="under construction" src="https://www.dropbox.com/s/17pprnmbueie6ty/Basic_Calculator.png?raw=1"/></a>
        </div>
        <div class="caption">
          <p>
            Calculator App
          </p>
        </div>
        <div class="hidden-xs">
          <div class="sub-caption">
            <p>
              This calculator app performs basic arithmetic operations.
            </p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4">
        <div class="image-container">
          <a href="../Tic-Tac-Toe/Tic-Tac-Toe.html" data-toggle="tooltip" title="Tic Tac Toe Game" target="_blank"><img class="img-rounded img-responsive" alt="under construction" src="https://www.dropbox.com/s/xumf8l6tgebtxhi/Tic-Tac-Toe.png?raw=1"/></a>
        </div>
        <div class="caption">
          <p>
            Tic-Tac-Toe
          </p>
        </div>
        <div class="hidden-xs">
          <div class="sub-caption">
            <p>
              Play Tic-Tac-Toe. See if you can beat the computer at this simple game.
            </p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-4">
        <div class="image-container">
          <a href="../Show_the_Weather/Show_the_Weather.html" data-toggle="tooltip" title="Weather App" target="_blank"><img class="img-rounded img-responsive" alt="under construction" src="https://www.dropbox.com/s/gjrsvdq3md9nyl5/Weather_App.png?raw=1"></a>
        </div>
        <div class="caption">
          <p>
            Weather App
          </p>
        </div>
        <div class="hidden-xs">
          <div class="sub-caption">
            <p>
              Do you want to know the weather in your area?
            </p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4">
        <div class="image-container">
          <a href="../Random_Quote_Machine/Random_Quote_Machine.html" data-toggle="tooltip" title="Random Quote Machine" target="_blank"><img class="img-rounded img-responsive" alt="under construction" src="https://www.dropbox.com/s/cii3ykzea3q30no/Random_Quote.png?raw=1"></a>
        </div>
        <div class="caption">
          <p>
            Random Quote Machine
          </p>
        </div>
        <div class="hidden-xs">
          <div class="sub-caption">
            <p>
              Roll the Dice to see and tweet a random quote from a famous person.
            </p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4">
        <div class="image-container">
          <a href="../Wikipedia_Viewer/Wikipedia_Viewer.html" data-toggle="tooltip" title="Wikipedia Viewer" target="_blank"><img class="img-rounded img-responsive" alt="under construction" src="https://www.dropbox.com/s/v4811sfkpgltfxy/Wikipedia_Viewer.png?raw=1"></a>
        </div>
        <div class="caption">
          <p>
            Wikipedia Viewer
          </p>
        </div>
        <div class="hidden-xs">
          <div class="sub-caption">
            <p>
              Use this app to see a random Wikipedia article or look up a specific article.
            </p>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-4">
        <div class="image-container">
          <a href="../Color_Game/Color_Game.html" data-toggle="tooltip" title="Color Game" target="_blank"><img class="img-rounded img-responsive" alt="under construction" src="https://www.dropbox.com/s/062qp782r9vec8u/Color_Game_A.jpg?raw=1"/></a>
        </div>

        <div class="caption">
          <p>
           Color Game
          </p>
        </div>
        <div class="hidden-xs">
          <div class="sub-caption">
            <p>
              Guess the Color from its CSS[RGB,RGBA,HEX] code
            </p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4">
        <div class="image-container">
          <a href="#"><img class="img-rounded img-responsive" alt="under construction" src="https://www.dropbox.com/s/dm23nkvqyvmhkgf/Website-Under-Construction_E.jpg?raw=1"/></a>
        </div>

        <div class="caption">
          <p>
            Coming Soon...<br> Calculator v2
          </p>
        </div>

        <div class="hidden-xs">
          <div class="sub-caption">
            <p>
              This app will be able to perform advanced mathematical operations
            </p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4">
        <div class="project">
          <div class="image-container">
            <a href="#"><img class="img-rounded img-responsive" alt="under construction" src="https://www.dropbox.com/s/dm23nkvqyvmhkgf/Website-Under-Construction_E.jpg?raw=1"/></a>
          </div>
          <div class="caption">
            <p>
              Coming Soon...<br> Meme Generator
            </p>
          </div>
          <div class="hidden-xs">
            <div class="sub-caption">
              <p>
                Do you like memes? Make your own internet meme.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!--END OF PORTFOLIO-->
  <!--SKILLS SECTION-->

  <!--SKILLS SECTION-->
  <div class="container-fluid" id="skills">

    <div class="page-header">
      Skills
    </div>
    <div class="skills-grid">
      <div class="icon-container">
        <i class="devicon-html5-plain-wordmark colored"></i>
        <div class="skills-caption">
          <p>
            Hyper Text Markup Language
          </p>
        </div>
      </div>

      <div class="icon-container">
        <i class="devicon-css3-plain-wordmark colored"></i>
        <div class="skills-caption">
          <p>
            Cascading Style Sheets
          </p>
        </div>
      </div>

      <div class="icon-container">
        <i class="devicon-sass-original colored"></i>
        <div class="skills-caption">
          <p>
            Syntactically Awesome Style Sheets
          </p>
        </div>
      </div>

      <div class="icon-container">
        <i class="devicon-javascript-plain colored"></i>
        <div class="skills-caption">
          <p>
            Web Programming
          </p>
        </div>
      </div>

      <div class="icon-container">
        <i class="devicon-jquery-plain-wordmark colored"></i>
        <div class="skills-caption">
          <p>
            Popular JavaScript Library
          </p>
        </div>
      </div>

      <div class="icon-container">
        <i class="devicon-bootstrap-plain-wordmark colored"></i>
        <div class="skills-caption">
          <p>
            Popular front end library
          </p>
        </div>
      </div>

      <div class="icon-container">
        <i class="devicon-github-plain-wordmark"></i>
        <div class="skills-caption">
          <p>
            GitHub
          </p>
        </div>
      </div>

      <div class="icon-container">
        <i class="devicon-chrome-plain-wordmark colored"></i>
        <div class="skills-caption">
          <p>
            Chrome Development Tools
          </p>
        </div>
      </div>

      <div class="icon-container">
        <i class="devicon-wordpress-plain-wordmark"></i>
        <div class="skills-caption">
          <p>
            Wordpress
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid" id="social-media">
    <div class="page-header">
      Social Media
    </div>
    <!--SOCIAL MEDIA BAR FOR DESKTOPS AND LARGE SCREENS-->
    <div class="container-fluid hidden-xs hidden-sm">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-7 col-md-offset-3">
          <ul class="nav nav-pills nav-justified" role="tablist">

            <li role="presentation"><a href="https://www.linkedin.com/in/adamquality" target="_blank" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-7x"></i></a></li>
            <li role="presentation"><a href="https://www.facebook.com/adam.shaffer.7146" target="_blank" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-square fa-7x"></i></a></li>
            <li role="presentation"><a href="https://www.freecodecamp.com/greatdeveloper66" target="_blank" data-toggle="tooltip" title="Free Code Camp"><i class="fab fa-free-code-camp fa-7x"></i></a></li>
            <li role="presentation"><a href="https://github.com/GreatDeveloper66" target="_blank" data-toggle="tooltip" title="GitHub"><i class="fab fa-github-square fa-7x"></i></a></li>
            <li role="presentation"><a href="https://twitter.com/Great_Developer" target="_blank" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter-square fa-7x"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!--SOCIAL MEDIA BAR FOR TABLET SIZED SCREENS-->

    <div class="container-fluid visible-sm-block">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <ul class="nav nav-pills nav-justified" role="tablist">

            <li role="presentation"><a href="https://www.linkedin.com/in/adamquality" target="_blank" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-4x"></i></a></li>
            <li role="presentation"><a href="https://www.facebook.com/adam.shaffer.7146" target="_blank" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-square fa-4x"></i></a></li>
            <li role="presentation"><a href="https://www.freecodecamp.com/greatdeveloper66" target="_blank" data-toggle="tooltip" title="Free Code Camp"><i class="fab fa-free-code-camp fa-4x"></i></a></li>
            <li role="presentation"><a href="https://github.com/GreatDeveloper66" target="_blank" data-toggle="tooltip" title="GitHub"><i class="fab fa-github-square fa-4x"></i></a></li>
            <li role="presentation"><a href="https://twitter.com/Great_Developer" target="_blank" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter-square fa-4x"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid visible-xs-block">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs nav-justified">
            <li role="presentation"><a href="https://www.linkedin.com/in/adamquality" target="_blank" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin fa-7x"></i><p>LinkedIn</p></a></li>
            <li role="presentation"><a href="https://www.facebook.com/adam.shaffer.7146" target="_blank" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-square fa-7x"></i><p>Facebook</p></a></li>
            <li role="presentation"><a href="https://www.freecodecamp.com/greatdeveloper66" target="_blank" data-toggle="tooltip" title="Free Code Camp"><i class="fab fa-free-code-camp fa-7x"></i><p>FreeCodeCamp</p></a></li>
            <li role="presentation"><a href="https://github.com/GreatDeveloper66" target="_blank" data-toggle="tooltip" title="GitHub"><i class="fab fa-github-square fa-7x"></i><p>GitHub</p></a></li>
            <li role="presentation"><a href="https://twitter.com/Great_Developer" target="_blank" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter-square fa-7x"></i><p>Twitter</p></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!--END OF SOCIAL MEDIA SECTION-->
  <!--ABOUT SECTION-->
  <div class="container-fluid" id="about">

    <!--About text-->
    <div class="row">
      <div class="page-header">
        About me
      </div>
      <div class="col-xs-12">
        <div class="banner-text">I am a Quality Engineer, who is beginning an awesome journey into the web development world. I have just recently acheived the front-end development certificate at Free Code Camp. In addition, I am working on web apps which will be showcased above
          in the near future. If you are interested in learning more about my background click the button below for my resume.
        </div>
      </div>
    </div>

    <!--Resume Download-->
    <div class="row">
      <div id="resume-button">
        <a href="../Resume/Adam_Shaffer_Resume.docx" download><button type="button" role="button" class="btn btn-info btn-lg">Resume</button></a>
      </div>
    </div>

    <div class="container-fluid" id="contact">
      <div class="page-header">
        contact me
      </div>
      <div class="row">
        <form class="form modal-form" id="contact-form" action="index.php" method="post">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Send me a meassage</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close-button">
                    <span aria-hidden="true">&times;</span>
                </button>
          </div>
          <!--<span class="close" title="Close Modal" id="close-button">&times;</span>-->
          <div class="modal-body mx-3">
            <div class="md-form mb-4">
              <i class="fa fa-user prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="form34">Name</label>
              <input type="text" id="form34" class="form-control validate" name="Name">

            </div>
            <div class="md-form mb-4">
              <i class="fa fa-address-card prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="form29">Title</label>
              <input type="email" id="form29" class="form-control validate" name="Title">

            </div>
            <div class="md-form mb-4">
              <i class="fas fa-building prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="form30">Company</label>
              <input type="email" id="form30" class="form-control validate" name="Company">

            </div>

            <div class="md-form mb-4">
              <i class="fa fa-at prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="form31">Email</label>
              <input type="email" id="form31" class="form-control validate" name="Email">

            </div>

            <div class="md-form">
              <i class="fa fa-edit prefix grey-text"></i>
              <label data-error="wrong" data-success="right" for="form8">Message</label>
              <textarea id="form8" class="md-textarea form-control" rows="4" name="Message"></textarea>

            </div>
          </div>
          <button type="submit" class="btn btn-primary" id="submit-button">Submit</button>
          <button type="reset" class="btn btn-warning" id="reset-button">Reset</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancel-button">Cancel</button>
        </form>
      </div>
      <div class="row">
        <div class="contactme">
          <div class="form-container">
            <!--contact button that trigger modal-->
            <button type="button" role="button" class="btn btn-info btn-lg" id="contact-button">
        contact
        </button>

          </div>

          <div class="form-caption">
            <p>
              Get in contact with me via Form
            </p>
          </div>
          <div class="phone-container">
            <i class="fas fa-phone fa-5x"></i>
          </div>
          <div class="phone-caption">
            <p>email me for my phone number</p>
          </div>
          <div class="email-container">
            <i class="fas fa-envelope fa-5x"></i>
          </div>
          <div class="email-caption">
            <p><a href="mailto:ashaffer@greatdeveloper.com">ashaffe@great-developer.com</a></p>
          </div>
        </div>
      </div>
    </div>
    <!--BEGINNING OF FOOTER-->

    <footer>
      <p>Website designed and coded by Adam Shaffer</p>

    </footer>
  </div>
</body>

</html>

