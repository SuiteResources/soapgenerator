<?php

/*
 * This file is part of the SOAPGenerator package.
 * (c) SOAPGenerator.
 */

namespace SOAPGenerator;

use SOAPGenerator\PhpSource\PhpClass;

/**
 * Interface for classes where instances be used can generate a PHP class.
 */
interface ClassGenerator
{
    /**
     * Returns the object represented as a PHP class.
     *
     * @return PhpClass
     */
    public function getClass();
}
