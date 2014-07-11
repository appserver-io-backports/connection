<?php

/**
 * \TechDivision\Connection\DummyTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Library
 * @package   TechDivision_Connection
 * @author    Johann Zelger <jz@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_Connection
 */

namespace TechDivision\Connection;

/**
 * Interface ConnectionRequestInterface
 *
 * @category  Library
 * @package   TechDivision_Connection
 * @author    Johann Zelger <jz@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_Connection
 */
class DummyTest extends \PHPUnit_Framework_TestCase
{

    /**
     * This is a dummy test implementation.
     *
     * @return void
     */
    public function testDummy()
    {
        $this->assertTrue(true);
    }
}