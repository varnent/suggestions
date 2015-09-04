<?php
// Start the session
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Ask not what the Wikimedia Foundation can do for you, but what you can do for the Wikimedia Foundation">
<meta name="keywords" content="Wikipedia,Wikimedia,Foundation,HTML,Programming,Editing,Content,Article,Wiki">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>What can I do for Wikimedia?</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- CSS Internal -->
<link href="../style.css" rel="stylesheet">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67198370-1', 'auto');
  ga('send', 'pageview');

</script>

</head>
  <body>

    <div class="container">
      <div class="idea">
        <h2>Do you prefer...</h2>
<br/>
<br/>
<?php
if (empty($_SESSION['zones']))
{ 
$_SESSION['zones'] = file('https://raw.githubusercontent.com/wikimedia-asknot/suggestions/master/zones.txt');
shuffle($_SESSION['zones']);
}
echo "<h1>" . array_shift($_SESSION['zones']) . "</h1>";

$f_contents = file("https://raw.githubusercontent.com/wikimedia-asknot/suggestions/master/buttons-nope.txt");
$line = $f_contents[array_rand($f_contents)];
$nope = $line;

echo "<br/>";
echo "<br/>";
echo "<button type='button' onClick='window.location.reload();' class='btn btn-warning btn-lg'>" . $nope . "</button> <a href='/'><button type='button' class='btn btn-info btn-lg'>Back</button></a>";
?>
      </div>
    </div><!-- /.container -->

    <footer class="footer">
      <div class="container">
<br/>
        <p class="text-muted"><small>Created by: <a href='https://en.wikipedia.org/wiki/User:Samtar'>[[User:samtar]]</a>, with some help from <a href='https://github.com/wikimedia-asknot/suggestions/graphs/contributors'>some others</a> &middot; <a href='https://phabricator.wikimedia.org/T91633'>Discussion</a> &middot; <a href='https://github.com/wikimedia-asknot/suggestions'>Edit lists</a> &middot; Not officially affiliated with the Wikimedia Foundation &middot; <img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/80x15.png" /></small></p>
      </div>
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
