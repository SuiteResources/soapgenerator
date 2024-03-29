<?php

/*
 * This file is part of the SOAPGenerator package.
 * (c) SOAPGenerator.
 */

namespace SOAPGenerator\Xml;

/**
 * An XmlNode which contains documentation of itself.
 */
abstract class DocumentedNode extends XmlNode
{
    /**
     * Retrieves the documentation for the node.
     *
     * @return string the documentation
     */
    public function getDocumentation()
    {
        $documentation      = null;
        $documentationNodes = $this->element->getElementsByTagName('documentation');
        if ($documentationNodes->length > 0) {
            $documentation = $documentationNodes->item(0)->nodeValue;
        }

        return $documentation;
    }
}
