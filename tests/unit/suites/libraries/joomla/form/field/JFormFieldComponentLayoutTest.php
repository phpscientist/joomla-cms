<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Form
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Test class for JFormFieldComponentLayout.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Form
 */
class JFormFieldComponentLayoutTest extends TestCaseDatabase
{
	/**
	 * Gets the data set to be loaded into the database during setup
	 *
	 * @return  PHPUnit_Extensions_Database_DataSet_CsvDataSet
	 */
	protected function getDataSet()
	{
		$dataSet = new PHPUnit_Extensions_Database_DataSet_CsvDataSet(',', "'", '\\');

		$dataSet->addTable('jos_extensions', JPATH_TEST_DATABASE . '/jos_extensions.csv');
		$dataSet->addTable('jos_template_styles', JPATH_TEST_DATABASE . '/jos_template_styles.csv');

		return $dataSet;
	}

	/**
	 * Test the getInput method.
	 */
	public function testGetInput()
	{
		$field = new JFormFieldComponentlayout();

		$this->assertTrue(
			$field->setup(
				new SimpleXmlElement('<field name="componentlayout" type="componentlayout" extension="com_content" client_id="0" view="blog" />'),
				'value'
			)
		);

		$this->assertNotEmpty(
			$field->input
		);
	}
}
