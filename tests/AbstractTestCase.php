<?php

/**
 * This file is part of Laravel Contact by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GrahamCampbell\Tests\Contact;

use GrahamCampbell\TestBench\Classes\AbstractLaravelTestCase;

/**
 * This is the abstract test case class.
 *
 * @package    Laravel-Contact
 * @author     Graham Campbell
 * @copyright  Copyright 2014 Graham Campbell
 * @license    https://github.com/GrahamCampbell/Laravel-Contact/blob/master/LICENSE.md
 * @link       https://github.com/GrahamCampbell/Laravel-Contact
 */
abstract class AbstractTestCase extends AbstractLaravelTestCase
{
    /**
     * Get the application base path.
     *
     * @return string
     */
    protected function getBasePath()
    {
        return __DIR__.'/../src';
    }

    /**
     * Get the required service providers.
     *
     * @return array
     */
    protected function getRequiredServiceProviders()
    {
        return array(
            'GrahamCampbell\Core\CoreServiceProvider',
            'GrahamCampbell\Queuing\QueuingServiceProvider',
            'GrahamCampbell\Security\SecurityServiceProvider',
            'GrahamCampbell\Binput\BinputServiceProvider',
            'GrahamCampbell\Throttle\ThrottleServiceProvider'
        );
    }

    /**
     * Get the service provider class.
     *
     * @return string
     */
    protected function getServiceProviderClass()
    {
        return 'GrahamCampbell\Contact\ContactServiceProvider';
    }
}