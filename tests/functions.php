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
        $this->assertEquals($expected, $case);
    }

    public function testFailureDisplaySetCollection() {
        $expected = 'Incorrect SQL data entered; check database';
        $input = [['Yu-Gi-Oh set']];
        $case = displaySetCollection($input);
        $this->assertEquals($expected, $case);
    }

    public function testMalformedDisplaySetCollection() {
        $input = 'Ixalan, 289, 2018-04-27';
        $this->expectException(TypeError::class);
        displaySetCollection($input);
    }

//    check user input tests to be done

    public function testSuccessCheckUserInput() {
        $expected = ($valid = true);
        $input = ['name'=>'Ixalan', 'cards'=>289, 'released'=>'2018-04-27'];
        $case = checkUserInput($input);
        $this->assertEquals($expected, $case);
    }

    public function testFailureCheckUserInput() {
        $expected = ($valid = false);
        $input = [['Yu-Gi-Oh set']];
        $case = checkUserInput($input);
        $this->assertEquals($expected, $case);
    }

    public function testMalformedCheckUserInput() {
        $input = 'Ixalan, 289, 2018-04-27';
        $this->expectException(TypeError::class);
        checkUserInput($input);
    }

}