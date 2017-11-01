<?php

namespace Training\PHPUnit\SampleSetup\demo;

class AdditionObject
{

    /**
     * Dummy method that always returns true.
     *
     * @return bool
     */
    public function getTrue()
    {
        return true;
    }
    
    public function addthese($string1, $string2)
    {
		return $string1 + $string2;
	}
}
