<?php

require_once ('../functions.php');
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testSuccessDisplaySetCollection() {
        $expected = '<div class="set"> <h1>value</h1>
                    <h2> Release Date: value</h2>
                    <h2>value cards</h2>
                    </div>';
        $input = [['name'=>'value', 'released'=>'value', 'cards'=>'value']];
        $case = displaySetCollection($input);
        $this->assertEquals($case, $expected);
    }

    public function testFailureDisplaySetCollection() {
        $expected = 'Incorrect datatype; check input';
        $input = [['Yu-Gi-Oh set']];
        $case = displaySetCollection($input);
        $this->assertEquals($case, $expected);
    }

    public function testMalformedDisplaySetCollection() {
        $input = 'Ixalan, 289, 2018-04-27';
        $this->expectException(TypeError::class);
        displaySetCollection($input);
    }

}