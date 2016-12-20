<!DOCTYPE HTML>
<html>
<head>
  <title>my collection</title>
  <meta name="description" content="Comics collection" />
  <meta name="keywords" content="comics, marvel, collection, heroes" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL.'/webroot/css/style.css'; ?>" />
  <script type="text/javascript" src="<?php echo BASE_URL.'/webroot/js/scripts.js'; ?>"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="/webroot/js/modernizr-1.5.min.js"></script>
</head>
<header>
  <div id="logo"><h1>MY<a href="#">Comics</a></h1></div>

</header>
<body>
  <div id="main">
  <div id="site_content">
  <div id="sidebar_container">
  </div>
  <div id="content">
    <h1>Bienvenue sur MyComics</h1>
    <p>Un site internet qui vous permettra de gérer votre collection de comics...blablabla...</p>
  </div>
</div>
</div>
<a href="#home" onclick="goto('page');">page</a>
<a href="#friends" onclick="mafonction();">fonction</a>
<a href="#photos" onclick="goto('photos');">Photos</a>
<a href="#articles" onclick="loadQueryResults();">loadquery</a>
</body>
<script type="text/javascript">
 
    function goto(garde) {
        $("#content").load("page.php");           
    }

</script>

</html>
