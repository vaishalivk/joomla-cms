<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Model
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test class for JModelItem.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Model
 *
 * @since       3.4
 */
class JModelItemTest extends TestCase
{
	/**
	 * @var    JModelItem
	 * @since  3.4
	 */
	public $object;

	/**
	 * Setup each test.
	 *
	 * @since   3.4
	 *
	 * @return  void
	 */
	public function setUp()
	{
		// Create mock of abstract class JModelForm to test concrete methods in there
		$this->object = $this->getMockForAbstractClass('JModelItem');
	}

	/**
	 * Tests the getStoreId method.
	 *
	 * @since   3.4
	 *
	 * @return  void
	 */
	public function testCorrectStoreIdIsReturned()
	{
		$method = new ReflectionMethod('JModelItem', 'getStoreId');
		$method->setAccessible(true);

		$this->assertEquals(md5('teststring'), $method->invokeArgs($this->object, array('teststring')));
	}
}