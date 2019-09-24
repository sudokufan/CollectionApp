<?php

require_once ('../functions.php');
use PHPUnit\Framework\TestCase;

class StackTest extends TextCase
{
    public function testSuccessDisplaySetCollection() {
        $expected = '<div class="set"> <h1>' . $set['name'] . '</h1>
                     <h2> Release Date: ' . $set['released'] . '</h2>
                     <h2>' . $set['cards'] . ' cards</h2>
                     </div>';
        $input = [['field'=>'value',]];
        $case = displaySetCollection($input);
        $this->assertEquals($case, $expected);
    }

    public function testFailureDisplaySetCollection() {
        $expected = 'Error generating HTML';
        $input = ['Yu-Gi-Oh set'];
        $case = displaySetCollection($input);
        $this->assertEquals($case, $expected);
    }

    public function testMalformedDisplaySetCollection() {
        $input = 'Ixalan, 289, 2018-04-27';
        $this->expectException(TypeError::class);
        displaySetCollection($input);
    }

}