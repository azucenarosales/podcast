<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Podcast</title>
  <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/styles.css">

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="/podcast/js/scripts.js"></script>

</head>
<body>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper container">
        <a href="/podcast/" class="brand-logo"><i class="large material-icons">queue_music</i></a>                

        <div class="right">
          <ul style="display:none;" id="controls" style="text-align:center;">
            <li id="title" class="hide-on-med-and-down"></li>
            <?php if($player): ?>
            <li><a id="play"><i class="material-icons">play_arrow</i></a></li>
            <li><a id="pause"><i class="material-icons">pause</i></a></li>
            <li><a id="restart" ><i class="material-icons">loop</i></a></li>            
            <?php endif; ?>

          </ul>
        

        </div>

        

      </div>    
      
    </nav>
  </div>

 