<?php
    require_once __DIR__."/../src/Queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {
        function test_xy_axis()
        {
            $test_xy_detector = new Queen;
            $input = 3;
            $input2 = 3;

            $result = $test_xy_detector->xy_axistest($input,$input2);

            $this->assertEquals(true, $result);
        }

        function test_diagonal()
        {
            $test_diag_detector = new Queen;
            $queenx = 2;
            $queeny = 5;
            $piecex = 5;
            $piecey = 2;

            $result = $test_diag_detector->diagonalTest($piecex, $piecey, $queenx, $queeny);

            $this->assertEquals(true, $result);
        }
    }
 ?>
