<?php
    class Queen
    {
      function xy_axistest ($queen,$piece)
      {
          if ($queen == $piece) {
            return true;
          }
      }

      function diagonalTest ($piecex, $piecey, $queenx, $queeny)
      {
        for ($i=1; $i < 50; $i++) {
          if (($queenx + $i == $piecex) && ($queeny +$i == $piecey))
          {
          return true;
          } elseif (($queenx + $i == $piecex) && ($queeny - $i == $piecey))
          {
          return true;
          } elseif (($queenx - $i == $piecex) && ($queeny + $i == $piecey))
          {
          return true;
          } elseif (($queenx - $i == $piecex) && ($queeny - $i == $piecey))
          {
          return true;
          }
        }
      return false;
    }
  }

?>
