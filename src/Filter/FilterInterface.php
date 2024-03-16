<?php

/*
 * This file is part of the SOAPGenerator package.
 * (c) SOAPGenerator.
 */

namespace SOAPGenerator\Filter;

use SOAPGenerator\Service;

/**
 * A filter implementation allows modification of a service.
 *
 * This can be used the alter which classes will be generated.
 */
interface FilterInterface
{
    /**
     * Filter a service.
     *
     * @param Service $service the initial service
     *
     * @return Service the altered service
     */
    public function filter(Service $service);
}
