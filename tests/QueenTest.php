<?php
    require_once __DIR__."/../src/Queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {
        function test_yaxis()
        {
            $test_ydetector = new Queen;
            $input = 3;
            $input2 = 3;

            $result = $test_ydetector->ytest($input,$input2);

            $this->assertEquals(true, $result);
        }
    }

 ?>
