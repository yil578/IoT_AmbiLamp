  <!DOCTYPE html>
  <html> 
  <head> 
    <title>AmbiLamp</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <script src="jscolor.js"></script>

  </head>

  <body>

  <?php
    include "header.php";
    include "GPIO.php";

    $color = "EFFFC9";
    if (isset($_POST['set_color'])) {
   	$color = $_POST['color'];
    }
  ?>

  <!-- JSCOLOR PICKER -->
  <input type="button" class="jscolor" id="picker" onchange="update(this.jscolor)" onfocusout="apply()" value="<?php echo "'" + $color + "'" ?> >
  
  <!-- FORM -->
  <form method="POST">
      <input type="text" id="color" name="color"> 
      <input type="submit" value="Set as Default" id="set_default">
      <input type="submit" id="smt" name="set_color" hidden>
  </form>

  <!-- CANVASES (CHARTS) -->
  <div id="charts-container">
    <canvas id="temp-chart" class="chart" height="350" width="550"></canvas>
    <canvas id="sound-chart" class="chart" height="350" width="550"></canvas>
  </div>

  <!-- ABOUT -->
  <div id="about">
    <h1>About</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras imperdiet molestie sollicitudin. Sed malesuada, dolor in ullamcorper viverra, erat felis aliquam quam, quis placerat nunc magna sed augue. Vivamus euismod posuere nisi. Integer egestas fermentum ante non elementum. Duis sit amet sem sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus vitae lectus rutrum, blandit ante id, feugiat nisl. Duis et orci id urna fermentum tempus at at nunc. Donec mollis vitae diam at consequat. Vestibulum eget eleifend eros, eu vehicula felis. Aliquam at interdum leo. Ut hendrerit sagittis enim. Aliquam vulputate vitae urna quis congue. Aenean nec sem tempus, pulvinar lacus vel, volutpat ligula.</p>

    <p>Fusce faucibus dapibus arcu vitae iaculis. Etiam iaculis nunc non lorem semper mattis. Curabitur faucibus vitae tortor a condimentum. Suspendisse dictum tellus eget risus maximus, quis congue tortor laoreet. Donec a libero at mi tempor hendrerit sit amet in orci. Integer accumsan faucibus tincidunt. Aliquam cursus eget magna at lacinia. Sed sollicitudin arcu quis quam laoreet, ac cursus mauris ornare. Sed non eros lobortis, tristique tortor id, convallis felis. Sed et tincidunt augue, porttitor sollicitudin lorem. Nam ac lacus augue. Maecenas iaculis, ligula dictum iaculis pellentesque, neque massa dapibus quam, ac faucibus erat lorem quis nisl. Nunc vehicula et odio eget pellentesque. Etiam at porta quam. In tempor sollicitudin leo, id cursus mi.</p>

    <p>Sed sodales justo cursus arcu dictum, ac euismod ante accumsan. Sed et porta libero. Phasellus gravida posuere felis, et sollicitudin mauris. Morbi viverra nisl quis eros molestie venenatis. Maecenas metus mauris, tempor sit amet tellus sit amet, interdum efficitur nunc. Donec mattis lectus at augue vehicula tempus. Nam sollicitudin lacinia viverra. Nullam ornare eget enim sed posuere. Quisque sit amet pellentesque tortor. Cras porttitor neque metus, ut viverra dolor congue lobortis.</p>

    <p>Nulla sed placerat quam, eget lacinia risus. Aenean ut pharetra sapien. Aliquam massa nulla, elementum nec convallis id, commodo vel felis. Phasellus sagittis at dolor iaculis lacinia. Vestibulum luctus mi vestibulum, consequat ante a, bibendum libero. Sed rhoncus molestie nisi, in condimentum erat tempus vitae. Sed quis convallis quam. Aenean accumsan accumsan ante, at dictum dolor vehicula lobortis. Vivamus urna diam, semper non blandit vitae, auctor sit amet ipsum. Integer erat velit, scelerisque sit amet luctus et, feugiat sit amet lacus. Quisque accumsan tellus et turpis iaculis faucibus. Vestibulum vel venenatis ligula, vel porta eros. Integer ultrices auctor sagittis. Sed faucibus eu sem sed placerat.</p>
</div>



  <script type="text/javascript" src="assets/js/index.js"></script>
 
  </body>

  </html>
