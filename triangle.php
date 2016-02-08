<?php

    class Triangle
    {
      private $side1;
      private $side2;
      private $side3;

      function __construct ($curSide1,$curSide2,$curSide3)

      {
        $this->side1 = $curSide1;
        $this->side2 = $curSide2;
        $this->side3 = $curSide3;

      }

      function getSide1 ()
      {
        return $this->side1;
      }

      function getSide2 ()
      {
        return $this->side2;
      }

      function getSide3 ()
      {
        return $this->side3;
      }

      function getTriangleType () {
        if ($this->side1 + $this->side2 > $this->side3 && $this->side1 + $this->side3 > $this->side2 && $this->side2 + $this->side3 > $this->side1){
          if ( $this->side1 == $this->side2 && $this->side1 == $this->side3){
            return  "eqilateral";
          } elseif  ( $this->side1 != $this->side2 && $this->side1 != $this->side3 && $this->side2 != $this->side3){
           return "scalene";
          } else {
           return "isosceles";
         }
       } else {
         return FALSE;
       }

    }
  }
      $triangle = new Triangle($_GET["side1"],$_GET["side2"],$_GET["side3"]);
  ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <body>
      <form action="triangle.php">
        <label for="side1">Side 1</label>
        <input name="side1" id="side1" type="number">
        <label for="side2">Side 1</label>
        <input name="side2" id="side2" type="number">
        <label for="side3">Side 1</label>
        <input name="side3" id="side3" type="number">
        <button type="submit">What kind of triangle?</button>
      </form>
      <div>
      <h4>The triangle is:</h4>
      <?php
            $curTriangle = $triangle->getTriangleType();
            if ($curTriangle){
            echo "<p>$curTriangle</p>";
          } else {
            echo "<p>This is not a triangle</p>";
          }
      ?>
      </div>
    <script type='text/javascript' id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.11.1.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
  </body>
</html>
