<?php

require_once ('../functions.php');
use PHPUnit\Framework\TestCase;

class StackTest extends TextCase
{
    public function testSuccessDisplaySetData() {
        $expected = '<div class="set"> <h1>' . $set['name'] . '</h1>
                     <h2> Release Date: ' . $set['released'] . '</h2>
                     <h2>' . $set['cards'] . ' cards</h2>
                     </div>';
        $input = [['field'=>'value',]];
        $case = displaySetCollection($input);
        $this->assertEquals($case, $expected);
    }

    public function testFailureDisplaySetData() {
        $expected = ;
        $input = ;
        $case = displaySetCollection($input);
        $this->assertEquals($case, $expected);
    }

    public function testMalformDisplaySetData() {
        $expected = ;
        $input = ;
        $case = displaySetCollection($input);
        $this->assertEquals($case, $expected);
    }
}


    }

    public function testFailureDisplayCollection() {
        $inputTestCollection = ['Yo Waddup'];
        $expectedOutput = 'Error generating HTML from collection';

        $case = displayCollection($inputTestCollection);
        $this->assertEquals($case, $expectedOutput);
    }

    public function testMalformedDisplayCollection() {
        $input = "hello";
        $this->expectException(TypeError::class);
        $case = displayCollection($input);

