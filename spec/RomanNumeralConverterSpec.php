<?php

namespace spec\Braddle;

use Braddle\RomanNumeralConverter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RomanNumeralConverterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RomanNumeralConverter::class);
    }

    function it_converts_I_to_one()
    {
        $this->convert("I")->shouldReturn(1);
    }

    function it_converts_V_to_five()
    {
        $this->convert("V")->shouldReturn(5);
    }

    function it_converts_X_to_ten()
    {
        $this->convert("X")->shouldReturn(10);
    }

    function it_converts_L_to_fifty()
    {
        $this->convert("L")->shouldReturn(50);
    }

    function it_converts_C_to_hundred()
    {
        $this->convert("C")->shouldReturn(100);
    }

    function it_converts_D_to_five_hundred()
    {
        $this->convert("D")->shouldReturn(500);
    }

    function it_converts_M_to_thousand()
    {
        $this->convert("M")->shouldReturn(1000);
    }

    function it_converts_all_lowercase_single_numeral()
    {
        $this->convert("i")->shouldReturn(1);
        $this->convert("v")->shouldReturn(5);
        $this->convert("x")->shouldReturn(10);
        $this->convert("l")->shouldReturn(50);
        $this->convert("c")->shouldReturn(100);
        $this->convert("d")->shouldReturn(500);
        $this->convert("m")->shouldReturn(1000);
    }

    function it_add_values_where_numeral_are_the_same()
    {
        $this->convert("II")->shouldReturn(2);
        $this->convert("CCC")->shouldReturn(300);
        $this->convert("MMMM")->shouldReturn(4000);
    }

    function it_adds_values_where_previous_number_is_larger()
    {
        $this->convert("VI")->shouldReturn(6);
        $this->convert("XV")->shouldReturn(15);
        $this->convert("MD")->shouldReturn(1500);
        $this->convert("VII")->shouldReturn(7);
        $this->convert("LXX")->shouldReturn(70);
        $this->convert("MDC")->shouldReturn(1600);
    }

    function it_subtracts_values_where_previous_is_smaller()
    {
        $this->convert("IV")->shouldReturn(4);
        $this->convert("VL")->shouldReturn(45);
        $this->convert("CM")->shouldReturn(900);
    }
}
