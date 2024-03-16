<?php

/*
 * This file is part of the SOAPGenerator package.
 * (c) SOAPGenerator.
 */

use VCR\VCR;

require_once __DIR__.'/../vendor/autoload.php';

VCR::configure()
  ->setCassettePath('tests/fixtures/vcr')
  ->setMode('once');
VCR::turnOn();
