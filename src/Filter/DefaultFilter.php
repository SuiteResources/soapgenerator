<?php

/*
 * This file is part of the SOAPGenerator package.
 * (c) SOAPGenerator.
 */

namespace SOAPGenerator\Filter;

use SOAPGenerator\Service;

/**
 * Default filter implementation.
 *
 * It does not do anything.
 */
class DefaultFilter implements FilterInterface
{
    /**
     * {@inheritdoc}
     */
    public function filter(Service $service)
    {
        return $service;
    }
}
