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
}