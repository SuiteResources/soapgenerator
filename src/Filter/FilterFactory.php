<?php

/*
 * This file is part of the SOAPGenerator package.
 * (c) SOAPGenerator.
 */

namespace SOAPGenerator\Filter;

use SOAPGenerator\ConfigInterface;

/**
 * Factory class for retrieving filters.
 */
class FilterFactory
{
    /**
     * Returns a filter matching the provided configuration.
     *
     * @param ConfigInterface $config the configuration to create a filter for
     *
     * @return FilterInterface a matching filter
     */
    public function create(ConfigInterface $config)
    {
        $operationNames = $config->get('operationNames');
        if (!empty($operationNames)) {
            return new ServiceOperationFilter($config);
        } else {
            return new DefaultFilter();
        }
    }
}
