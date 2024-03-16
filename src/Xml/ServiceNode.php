<?php

/*
 * This file is part of the SOAPGenerator package.
 * (c) SOAPGenerator.
 */

namespace SOAPGenerator\Xml;

/**
 * An XML node which represents a SOAP service.
 */
class ServiceNode extends DocumentedNode
{
    /**
     * Returns the name of the service.
     *
     * @return string the service name
     */
    public function getName()
    {
        return $this->element->getAttribute('name');
    }
}
