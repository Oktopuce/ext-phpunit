<?php
/***************************************************************
* Copyright notice
*
* (c) 2011-2012 Oliver Klee (typo3-coding@oliverklee.de)
* All rights reserved
*
* This script is part of the TYPO3 project. The TYPO3 project is
* free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

require_once(PATH_site . 'typo3/classes/class.typo3ajax.php');

/**
 * Testcase for the Tx_Phpunit_BackEnd_Ajax class.
 *
 * @package TYPO3
 * @subpackage tx_phpunit
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class Tx_Phpunit_BackEnd_AjaxTest extends Tx_Phpunit_TestCase {
	/**
	 * @var Tx_Phpunit_BackEnd_Ajax
	 */
	private $fixture = NULL;

	/**
	 * @var Tx_Phpunit_TestingDataContainer
	 */
	protected $userSettingsService = NULL;

	/**
	 * backup of $_POST
	 *
	 * @var array
	 */
	private $postBackup = array();

	public function setUp() {
		$this->postBackup = $_POST;
		$_POST = array();

		$this->fixture = new Tx_Phpunit_BackEnd_Ajax(FALSE);

		$this->userSettingsService = new Tx_Phpunit_TestingDataContainer();
		$this->fixture->injectUserSettingsService($this->userSettingsService);
	}

	public function tearDown() {
		$_POST = $this->postBackup;

		unset($this->fixture, $this->postBackup, $this->userSettingsService);
	}

	/**
	 * @test
	 */
	public function ajaxBrokerForFailureCheckboxParameterAndStateTrueSavesTrueStateToUserSettings() {
		$_POST['checkbox'] = 'failure';
		$_POST['state'] = '1';

		/** @var $ajax TYPO3AJAX|PHPUnit_Framework_MockObject_MockObject  */
		$ajax = $this->getMock('TYPO3AJAX');
		$this->fixture->ajaxBroker(array(), $ajax);

		$this->assertTrue(
			$this->userSettingsService->getAsBoolean('failure')
		);
	}

	/**
	 * @test
	 */
	public function ajaxBrokerForFailureCheckboxParameterAndMissingStateSavesFalseStateToUserSettings() {
		$_POST['checkbox'] = 'failure';

		/** @var $ajax TYPO3AJAX|PHPUnit_Framework_MockObject_MockObject  */
		$ajax = $this->getMock('TYPO3AJAX');
		$this->fixture->ajaxBroker(array(), $ajax);

		$this->assertFalse(
			$this->userSettingsService->getAsBoolean('failure')
		);
	}

	/**
	 * @test
	 */
	public function ajaxBrokerForFailureCheckboxParameterAddsSuccessContent() {
		$_POST['checkbox'] = 'failure';

		/** @var $ajax TYPO3AJAX|PHPUnit_Framework_MockObject_MockObject */
		$ajax = $this->getMock('TYPO3AJAX');
		$ajax->expects($this->once())->method('addContent')->with('success', TRUE);
		$ajax->expects($this->never())->method('setError');

		$this->fixture->ajaxBroker(array(), $ajax);
	}

	/**
	 * @test
	 */
	public function ajaxBrokerForSuccessCheckboxParameterAddsSuccessContent() {
		$_POST['checkbox'] = 'success';

		/** @var $ajax TYPO3AJAX|PHPUnit_Framework_MockObject_MockObject */
		$ajax = $this->getMock('TYPO3AJAX');
		$ajax->expects($this->once())->method('addContent')->with('success', TRUE);
		$ajax->expects($this->never())->method('setError');

		$this->fixture->ajaxBroker(array(), $ajax);
	}

	/**
	 * @test
	 */
	public function ajaxBrokerForErrorCheckboxParameterAddsSuccessContent() {
		$_POST['checkbox'] = 'error';

		/** @var $ajax TYPO3AJAX|PHPUnit_Framework_MockObject_MockObject */
		$ajax = $this->getMock('TYPO3AJAX');
		$ajax->expects($this->once())->method('addContent')->with('success', TRUE);
		$ajax->expects($this->never())->method('setError');

		$this->fixture->ajaxBroker(array(), $ajax);
	}

	/**
	 * @test
	 */
	public function ajaxBrokerForSkippedCheckboxParameterAddsSuccessContent() {
		$_POST['checkbox'] = 'skipped';

		/** @var $ajax TYPO3AJAX|PHPUnit_Framework_MockObject_MockObject */
		$ajax = $this->getMock('TYPO3AJAX');
		$ajax->expects($this->once())->method('addContent')->with('success', TRUE);
		$ajax->expects($this->never())->method('setError');

		$this->fixture->ajaxBroker(array(), $ajax);
	}

	/**
	 * @test
	 */
	public function ajaxBrokerForIncompleteCheckboxParameterAddsSuccessContent() {
		$_POST['checkbox'] = 'incomplete';

		/** @var $ajax TYPO3AJAX|PHPUnit_Framework_MockObject_MockObject */
		$ajax = $this->getMock('TYPO3AJAX');
		$ajax->expects($this->once())->method('addContent')->with('success', TRUE);
		$ajax->expects($this->never())->method('setError');

		$this->fixture->ajaxBroker(array(), $ajax);
	}

	/**
	 * @test
	 */
	public function ajaxBrokerForTestDoxCheckboxParameterAddsSuccessContent() {
		$_POST['checkbox'] = 'testdox';

		/** @var $ajax TYPO3AJAX|PHPUnit_Framework_MockObject_MockObject */
		$ajax = $this->getMock('TYPO3AJAX');
		$ajax->expects($this->once())->method('addContent')->with('success', TRUE);
		$ajax->expects($this->never())->method('setError');

		$this->fixture->ajaxBroker(array(), $ajax);
	}

	/**
	 * @test
	 */
	public function ajaxBrokerForCodeCoverageCheckboxParameterAddsSuccessContent() {
		$_POST['checkbox'] = 'codeCoverage';

		/** @var $ajax TYPO3AJAX|PHPUnit_Framework_MockObject_MockObject */
		$ajax = $this->getMock('TYPO3AJAX');
		$ajax->expects($this->once())->method('addContent')->with('success', TRUE);
		$ajax->expects($this->never())->method('setError');

		$this->fixture->ajaxBroker(array(), $ajax);
	}

	/**
	 * @test
	 */
	public function ajaxBrokerForShowMemoryAndTimeCheckboxParameterAddsSuccessContent() {
		$_POST['checkbox'] = 'showMemoryAndTime';

		/** @var $ajax TYPO3AJAX|PHPUnit_Framework_MockObject_MockObject */
		$ajax = $this->getMock('TYPO3AJAX');
		$ajax->expects($this->once())->method('addContent')->with('success', TRUE);
		$ajax->expects($this->never())->method('setError');

		$this->fixture->ajaxBroker(array(), $ajax);
	}

	/**
	 * @test
	 */
	public function ajaxBrokerForRunSeleniumTestsCheckboxParameterAddsSuccessContent() {
		$_POST['checkbox'] = 'runSeleniumTests';

		/** @var $ajax TYPO3AJAX|PHPUnit_Framework_MockObject_MockObject */
		$ajax = $this->getMock('TYPO3AJAX');
		$ajax->expects($this->once())->method('addContent')->with('success', TRUE);
		$ajax->expects($this->never())->method('setError');

		$this->fixture->ajaxBroker(array(), $ajax);
	}

	/**
	 * @test
	 */
	public function ajaxBrokerForMissingCheckboxParameterSetsError() {
		/** @var $ajax TYPO3AJAX|PHPUnit_Framework_MockObject_MockObject */
		$ajax = $this->getMock('TYPO3AJAX');
		$ajax->expects($this->once())->method('setError');

		$this->fixture->ajaxBroker(array(), $ajax);
	}

	/**
	 * @test
	 */
	public function ajaxBrokerForInvalidCheckboxParameterSetsError() {
		$_POST['checkbox'] = 'anything else';

		/** @var $ajax TYPO3AJAX|PHPUnit_Framework_MockObject_MockObject */
		$ajax = $this->getMock('TYPO3AJAX');
		$ajax->expects($this->once())->method('setError');

		$this->fixture->ajaxBroker(array(), $ajax);
	}
}
?>