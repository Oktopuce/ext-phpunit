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

require_once(PATH_typo3 . 'template.php');
$GLOBALS['LANG']->includeLLFile('EXT:phpunit/Resources/Private/Language/locallang_backend.xml');

/**
 * Testcase for the Tx_Phpunit_BackEnd_Module class.
 *
 * @package TYPO3
 * @subpackage tx_phpunit
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class Tx_Phpunit_BackEnd_ModuleTest extends Tx_Phpunit_TestCase {
	/**
	 * @var Tx_Phpunit_BackEnd_Module
	 */
	private $fixture;

	/**
	 * @var t3lib_beUserAuth
	 */
	private $backEndUserBackup = NULL;

	/**
	 * backup of $_POST
	 *
	 * @var array
	 */
	private $postBackup = array();

	/**
	 * backup of $_GET
	 *
	 * @var array
	 */
	private $getBackup = array();

	/**
	 * the output of the module
	 *
	 * @var string
	 */
	private $output = '';

	public function setUp() {
		$this->backEndUserBackup = $GLOBALS['BE_USER'];
		$this->postBackup = $_POST;
		$this->getBackup = $_GET;
		$_POST = array();
		$_GET = array();

		$this->fixture = $this->getMock(
			$this->createAccessibleProxy(), array('output')
		);
		$this->fixture->expects($this->any())->method('output')
			->will($this->returnCallback(array($this, 'outputCallback')));
	}

	public function tearDown() {
		$this->fixture->__destruct();

		$_POST = $this->postBackup;
		$_GET = $this->getBackup;

		$GLOBALS['BE_USER'] = $this->backEndUserBackup;

		unset($this->fixture, $this->backEndUserBackup);
	}

	/*
	 * Utility functions
	 */

	/**
	 * Creates a subclass Tx_Phpunit_BackEnd_Module with the protected functions
	 * made public.
	 *
	 * @return string the name of the accessible proxy class
	 */
	private function createAccessibleProxy() {
		$className = 'Tx_Phpunit_BackEnd_ModuleAccessibleProxy';
		if (!class_exists($className, FALSE)) {
			eval(
				'class ' . $className . ' extends Tx_Phpunit_BackEnd_Module {' .
				'  public function getTestFinder() {' .
				'    return parent::getTestFinder();' .
				'  }' .
				'  public function runTests_render() {' .
				'    parent::runTests_render();' .
				'  }' .
				'  public function runTests_renderIntro() {' .
				'    parent::runTests_renderIntro();' .
				'  }' .
				'  public function createExtensionSelector() {' .
				'    return parent::createExtensionSelector();' .
				'  }' .
				'  public function createTestCaseSelector(array $extensionsWithTestSuites = array(), $extensionKey = \'\') {' .
				'    return parent::createTestCaseSelector($extensionsWithTestSuites, $extensionKey);' .
				'  }' .
				'  public function findTestCasesInDir($directory) {' .
				'    return parent::findTestCasesInDir($directory);' .
				'  }' .
				'  public function loadRequiredTestClasses(array $paths) {' .
				'    parent::loadRequiredTestClasses($paths);' .
				'  }' .
				'  public function isExtensionLoaded($extensionKey) {' .
				'    return parent::isExtensionLoaded($extensionKey);' .
				'  }' .
				'  public function createIconStyle($extensionKey) {' .
				'    return parent::createIconStyle($extensionKey);' .
				'  }' .
				'  public function output($output) {' .
				'    parent::output($output);' .
				'  }' .
				'  public function isAcceptedTestSuitClass($class) {' .
				'    return parent::isAcceptedTestSuitClass($class);' .
				'  }' .
				'}'
			);
		}

		return $className;
	}

	/**
	 * Callback function for collecting the output of the module.
	 *
	 * @param string $text the output to collect, may also be empty
	 *
	 * @return void
	 */
	public function outputCallback($text) {
		$this->output .= $text;
	}

	/**
	 * @test
	 */
	public function createAccessibleProxyCreatesModuleSubclass() {
		$className = $this->createAccessibleProxy();

		$this->assertInstanceOf(
			'Tx_Phpunit_BackEnd_Module',
			new $className()
		);
	}

	/**
	 * @test
	 */
	public function outputCallbackCollectsOutput() {
		$this->outputCallback('Hello world!');

		$this->assertSame(
			'Hello world!',
			$this->output
		);
	}

	/**
	 * @test
	 */
	public function outputCallbackCollectsOutputInAddingOrder() {
		$this->outputCallback('1');
		$this->outputCallback('2');

		$this->assertSame(
			'12',
			$this->output
		);
	}


	/*
	 * Unit tests
	 */

	/**
	 * @test
	 */
	public function getTestFinderReturnsTestFinderInstance() {
		$this->assertInstanceOf(
			'Tx_Phpunit_Service_TestFinder',
			$this->fixture->getTestFinder()
		);
	}

	/**
	 * @test
	 */
	public function mainForNoAdminBackEndUserShowsAdminRightsNeeded() {
		$GLOBALS['BE_USER']->user['admin'] = FALSE;

		$this->fixture->main();

		$this->assertContains(
			$GLOBALS['LANG']->getLL('admin_rights_needed'),
			$this->output
		);
	}

	/**
	 * @test
	 */
	public function mainForAdminBackEndUserRunsTests() {
		$GLOBALS['BE_USER']->user['admin'] = TRUE;

		$fixture = $this->getMock(
			$this->createAccessibleProxy(), array('output', 'runTests_render')
		);
		$fixture->expects($this->any())->method('output')
			->will($this->returnCallback(array($this, 'outputCallback')));
		$fixture->expects($this->once())->method('runTests_render');

		$fixture->main();
	}

	/**
	 * @test
	 */
	public function runTests_renderForEmptyCommandRendersIntro() {
		$fixture = $this->getMock(
			$this->createAccessibleProxy(),
			array('runTests_renderIntro', 'runTests_renderRunningTest', 'output')
		);
		$fixture->MOD_SETTINGS = array('extSel' => 'phpunit');

		$fixture->expects($this->once())->method('runTests_renderIntro');

		$_GET['command'] = '';

		$fixture->runTests_render();
	}

	/**
	 * @test
	 */
	public function runTests_renderForEmptyCommandNotRunsTests() {
		$fixture = $this->getMock(
			$this->createAccessibleProxy(),
			array('runTests_renderIntro', 'runTests_renderRunningTest', 'output')
		);
		$fixture->MOD_SETTINGS = array('extSel' => 'phpunit');

		$fixture->expects($this->never())->method('runTests_renderRunningTest');

		$_GET['command'] = '';

		$fixture->runTests_render();
	}

	/**
	 * @test
	 */
	public function runTests_renderForInvalidCommandRendersIntro() {
		$fixture = $this->getMock(
			$this->createAccessibleProxy(),
			array('runTests_renderIntro', 'runTests_renderRunningTest', 'output')
		);
		$fixture->MOD_SETTINGS = array('extSel' => 'phpunit');

		$fixture->expects($this->once())->method('runTests_renderIntro');

		$_GET['command'] = 'invalid';

		$fixture->runTests_render();
	}

	/**
	 * @test
	 */
	public function runTests_renderForInvalidCommandNotRunsTests() {
		$fixture = $this->getMock(
			$this->createAccessibleProxy(),
			array('runTests_renderIntro', 'runTests_renderRunningTest', 'output')
		);
		$fixture->MOD_SETTINGS = array('extSel' => 'phpunit');

		$fixture->expects($this->never())->method('runTests_renderRunningTest');

		$_GET['command'] = 'invalid';

		$fixture->runTests_render();
	}

	/**
	 * @test
	 */
	public function runTests_renderForRunAllTestsCommandRendersIntroAndTests() {
		$fixture = $this->getMock(
			$this->createAccessibleProxy(),
			array('runTests_renderIntro', 'runTests_renderRunningTest', 'output')
		);
		$fixture->MOD_SETTINGS = array('extSel' => 'phpunit');

		$fixture->expects($this->once())->method('runTests_renderIntro');
		$fixture->expects($this->once())->method('runTests_renderRunningTest');

		$_GET['command'] = 'runalltests';

		$fixture->runTests_render();
	}

	/**
	 * @test
	 */
	public function runTests_renderForRunTestCaseFileCommandRendersIntroAndTests() {
		$fixture = $this->getMock(
			$this->createAccessibleProxy(),
			array('runTests_renderIntro', 'runTests_renderRunningTest', 'output')
		);
		$fixture->MOD_SETTINGS = array('extSel' => 'phpunit');

		$fixture->expects($this->once())->method('runTests_renderIntro');
		$fixture->expects($this->once())->method('runTests_renderRunningTest');

		$_GET['command'] = 'runTestCaseFile';

		$fixture->runTests_render();
	}

	/**
	 * @test
	 */
	public function runTests_renderForRunSingleTestCommandRendersIntroAndTests() {
		$fixture = $this->getMock(
			$this->createAccessibleProxy(),
			array('runTests_renderIntro', 'runTests_renderRunningTest', 'output')
		);
		$fixture->MOD_SETTINGS = array('extSel' => 'phpunit');

		$fixture->expects($this->once())->method('runTests_renderIntro');
		$fixture->expects($this->once())->method('runTests_renderRunningTest');

		$_GET['command'] = 'runsingletest';

		$fixture->runTests_render();
	}

	/**
	 * @test
	 */
	public function runTests_renderIntroForNoExtensionsWithTestSuitesShowsErrorMessage() {
		$testFinder = $this->getMock('Tx_Phpunit_Service_TestFinder');
		$testFinder->expects($this->any())->method('existsTestableCodeForAnything')
			->will($this->returnValue(FALSE));

		$fixture = $this->getMock(
			$this->createAccessibleProxy(),
			array(
				'getExtensionsWithTestSuites', 'createExtensionSelector', 'createTestCaseSelector',
				'createCheckboxes', 'createTestSelector', 'output', 'getTestFinder'
			)
		);
		$fixture->expects($this->any())->method('output')
			->will($this->returnCallback(array($this, 'outputCallback')));
		$fixture->expects($this->any())->method('getTestFinder')->will($this->returnValue($testFinder));
		$fixture->expects($this->any())->method('getExtensionsWithTestSuites')
			->will($this->returnValue(array()));

		$fixture->MOD_SETTINGS = array('extSel' => 'phpunit');

		$fixture->runTests_renderIntro();

		$this->assertContains(
			$GLOBALS['LANG']->getLL('could_not_find_exts_with_tests'),
			$this->output
		);
	}

	/**
	 * @test
	 */
	public function runTests_renderIntroForNoExtensionsWithTestSuitesNotRendersExtensionSelector() {
		$testFinder = $this->getMock('Tx_Phpunit_Service_TestFinder');
		$testFinder->expects($this->any())->method('existsTestableCodeForAnything')
			->will($this->returnValue(FALSE));

		$fixture = $this->getMock(
			$this->createAccessibleProxy(),
			array(
				'getExtensionsWithTestSuites', 'createExtensionSelector', 'createTestCaseSelector',
				'createCheckboxes', 'createTestSelector', 'output', 'getTestFinder'
			)
		);
		$fixture->expects($this->any())->method('output')
			->will($this->returnCallback(array($this, 'outputCallback')));
		$fixture->expects($this->any())->method('getTestFinder')->will($this->returnValue($testFinder));
		$fixture->expects($this->any())->method('getExtensionsWithTestSuites')
			->will($this->returnValue(array()));
		$fixture->expects($this->never())->method('createExtensionSelector')
			->will($this->returnValue('extension selector'));

		$fixture->MOD_SETTINGS = array('extSel' => 'phpunit');

		$fixture->runTests_renderIntro();
	}

	/**
	 * @test
	 */
	public function runTests_renderIntroForExistingExtensionsWithTestSuitesRendersExtensionSelector() {
		$fixture = $this->getMock(
			$this->createAccessibleProxy(),
			array(
				'getExtensionsWithTestSuites', 'createExtensionSelector', 'createTestCaseSelector',
				'createCheckboxes', 'createTestSelector', 'output'
			)
		);
		$fixture->expects($this->any())->method('output')
			->will($this->returnCallback(array($this, 'outputCallback')));
		$fixture->expects($this->once())->method('getExtensionsWithTestSuites')
			->will($this->returnValue(array('phpunit' => 'phpunit')));
		$fixture->expects($this->once())->method('createExtensionSelector')
			->will($this->returnValue('extension selector'));

		$fixture->MOD_SETTINGS = array('extSel' => 'phpunit');

		$fixture->runTests_renderIntro();

		$this->assertContains(
			'extension selector',
			$this->output
		);
	}

	/**
	 * @test
	 */
	public function runTests_renderIntroForSelectedExtensionRendersTestCaseSelector() {
		$extensionsWithTests = array('phpunit' => 'phpunit');
		$selectedExtension = 'phpunit';

		$fixture = $this->getMock(
			$this->createAccessibleProxy(),
			array(
				'getExtensionsWithTestSuites', 'createExtensionSelector', 'createTestCaseSelector',
				'createCheckboxes', 'createTestSelector', 'output'
			)
		);
		$fixture->MOD_SETTINGS = array('extSel' => $selectedExtension);

		$fixture->expects($this->any())->method('output')
			->will($this->returnCallback(array($this, 'outputCallback')));
		$fixture->expects($this->once())->method('getExtensionsWithTestSuites')
			->will($this->returnValue($extensionsWithTests));
		$fixture->expects($this->once())->method('createTestCaseSelector')
			->with($extensionsWithTests, $selectedExtension)->will($this->returnValue('test case selector'));

		$fixture->runTests_renderIntro();

		$this->assertContains(
			'test case selector',
			$this->output
		);
	}

	/**
	 * @test
	 */
	public function runTests_renderIntroForSelectedExtensionRendersTestSelector() {
		$extensionsWithTests = array('phpunit' => 'phpunit');
		$selectedExtension = 'phpunit';

		$fixture = $this->getMock(
			$this->createAccessibleProxy(),
			array(
				'getExtensionsWithTestSuites', 'createExtensionSelector', 'createTestCaseSelector',
				'createCheckboxes', 'createTestSelector', 'output'
			)
		);
		$fixture->MOD_SETTINGS = array('extSel' => $selectedExtension);

		$fixture->expects($this->any())->method('output')
			->will($this->returnCallback(array($this, 'outputCallback')));
		$fixture->expects($this->once())->method('getExtensionsWithTestSuites')
			->will($this->returnValue($extensionsWithTests));
		$fixture->expects($this->once())->method('createTestSelector')
			->with($extensionsWithTests, $selectedExtension)->will($this->returnValue('test selector'));

		$fixture->runTests_renderIntro();

		$this->assertContains(
			'test selector',
			$this->output
		);
	}

	/**
	 * @test
	 */
	public function runTests_renderIntroForSelectedExtensionRendersCheckboxes() {
		$extensionsWithTests = array('phpunit' => 'phpunit');
		$selectedExtension = 'phpunit';

		$fixture = $this->getMock(
			$this->createAccessibleProxy(),
			array(
				'getExtensionsWithTestSuites', 'createExtensionSelector', 'createTestCaseSelector',
				'createCheckboxes', 'createTestSelector', 'output'
			)
		);
		$fixture->MOD_SETTINGS = array('extSel' => $selectedExtension);

		$fixture->expects($this->any())->method('output')
			->will($this->returnCallback(array($this, 'outputCallback')));
		$fixture->expects($this->once())->method('getExtensionsWithTestSuites')
			->will($this->returnValue($extensionsWithTests));
		$fixture->expects($this->once())->method('createTestSelector')
			->with($extensionsWithTests, $selectedExtension)->will($this->returnValue('test selector'));

		$fixture->runTests_renderIntro();

		$this->assertContains(
			'test selector',
			$this->output
		);
	}

	/**
	 * @test
	 */
	public function findTestCasesInDirReturnsEmptyArrayIfDirectoryDoesNotExist() {
		vfsStreamWrapper::register();
		vfsStreamWrapper::setRoot(new vfsStreamDirectory('Foo'));
		$notExistingDirectory = 'vfs://Foo/bar';

		$this->assertSame(
			array(),
			$this->fixture->findTestCasesInDir($notExistingDirectory)
		);
	}

	/**
	 * @test
	 */
	public function findTestCasesInDirCallsFindTestCasesInDirectoryOfTestFinderObject() {
		vfsStreamWrapper::register();
		vfsStreamWrapper::setRoot(new vfsStreamDirectory('Foo'));
		$directory = 'vfs://Foo/';

		$testFinderMock = $this->getMock(
			'Tx_Phpunit_Service_TestFinder', array('findTestCasesInDirectory')
		);
		$testFinderMock->expects($this->once())->method('findTestCasesInDirectory')->with($directory);

		$fixture = $this->getMock(
			$this->createAccessibleProxy(), array('getTestFinder')
		);
		$fixture->expects($this->once())->method('getTestFinder')
			->will($this->returnValue($testFinderMock));

		$fixture->findTestCasesInDir($directory);
	}

	/**
	 * @test
	 */
	public function findTestCasesInDirReturnsArrayWithFoundTestCaseFiles() {
		vfsStreamWrapper::register();
		vfsStreamWrapper::setRoot(new vfsStreamDirectory('Foo'));
		$directory = 'vfs://Foo/';
		$testFiles = array('class.test1Test.php', 'class.test2Test.php');

		$testFinderMock = $this->getMock(
			'Tx_Phpunit_Service_TestFinder',
			array('findTestCasesInDirectory')
		);
		$testFinderMock->expects($this->once())->method('findTestCasesInDirectory')
			->will($this->returnValue($testFiles));

		$fixture = $this->getMock(
			$this->createAccessibleProxy(), array('getTestFinder')
		);
		$fixture->expects($this->once())->method('getTestFinder')
			->will($this->returnValue($testFinderMock));

		$this->assertSame(
			array($directory => $testFiles),
			$fixture->findTestCasesInDir($directory)
		);
	}

	/**
	 * @test
	 */
	public function loadRequiredTestClassesLoadsFileInFirstPath() {
		$this->fixture->loadRequiredTestClasses(
			array(
				t3lib_extMgm::extPath('phpunit') . 'Tests/Unit/BackEnd/Fixtures/' => array(
					'LoadMe.php',
				),
			)
		);

		$this->assertTrue(
			class_exists('Tx_Phpunit_BackEnd_Fixtures_LoadMe', FALSE)
		);
	}

	/**
	 * @test
	 */
	public function loadRequiredTestClassesLoadsSecondFileInFirstPath() {
		$this->fixture->loadRequiredTestClasses(
			array(
				t3lib_extMgm::extPath('phpunit') . 'Tests/Unit/BackEnd/Fixtures/' => array(
					'LoadMe.php',
					'LoadMeToo.php',
				),
			)
		);

		$this->assertTrue(
			class_exists('Tx_Phpunit_BackEnd_Fixtures_LoadMeToo', FALSE)
		);
	}

	/**
	 * @test
	 */
	public function loadRequiredTestClassesLoadsFileInSecondPath() {
		$this->fixture->loadRequiredTestClasses(
			array(
				t3lib_extMgm::extPath('phpunit') . 'Tests/Unit/BackEnd/Fixtures/' => array(
					'LoadMe.php',
				),
				t3lib_extMgm::extPath('phpunit') . 'Tests/Unit/Fixtures/' => array(
					'LoadMe.php',
				),
			)
		);

		$this->assertTrue(
			class_exists('Tx_Phpunit_Fixtures_LoadMe', FALSE)
		);
	}

	/**
	 * @test
	 */
	public function isExtensionLoadedEmptyKeyReturnsFalse() {
		$this->assertFalse(
			$this->fixture->isExtensionLoaded('')
		);
	}

	/**
	 * @test
	 */
	public function isExtensionLoadedForLoadedExtensionReturnsTrue() {
		$this->assertTrue(
			$this->fixture->isExtensionLoaded('phpunit')
		);
	}

	/**
	 * @test
	 */
	public function isExtensionLoadedForNotLoadedExtensionReturnsFalse() {
		$this->assertFalse(
			$this->fixture->isExtensionLoaded('not_loaded_extension')
		);
	}

	/**
	 * @test
	 */
	public function isExtensionLoadedForCoreWithExistingTestsReturnsTrue() {
		$testFinder = t3lib_div::makeInstance('Tx_Phpunit_Service_TestFinder');
		if (!$testFinder->hasCoreTests()) {
			$this->markTestSkipped('This test can only be run if the TYPO3 Core unit tests are present.');
		}

		$this->assertTrue(
			$this->fixture->isExtensionLoaded(Tx_Phpunit_TestableCode::CORE_KEY)
		);
	}

	/**
	 * @test
	 */
	public function isExtensionLoadedForCoreWithoutExistingTestsReturnsFalse() {
		$testFinder = t3lib_div::makeInstance('Tx_Phpunit_Service_TestFinder');
		if ($testFinder->hasCoreTests()) {
			$this->markTestSkipped('This test can only be run if no TYPO3 Core unit tests are present.');
		}

		$this->assertFalse(
			$this->fixture->isExtensionLoaded(Tx_Phpunit_TestableCode::CORE_KEY)
		);
	}

	/**
	 * @test
	 */
	public function createIconStyleForLoadedExtensionReturnsExtensionIcon() {
		$this->assertContains(
			'url(' . t3lib_extMgm::extRelPath('phpunit') . 'ext_icon.gif)',
			$this->fixture->createIconStyle('phpunit')
		);
	}

	/**
	 * @test
	 */
	public function createIconStyleForCoreReturnsTypo3Icon() {
		$testFinder = t3lib_div::makeInstance('Tx_Phpunit_Service_TestFinder');
		if (!$testFinder->hasCoreTests()) {
			$this->markTestSkipped('This test can only be run if the TYPO3 Core unit tests are present.');
		}

		$this->assertContains(
			'url(' . t3lib_extMgm::extRelPath('phpunit') . 'Resources/Public/Icons/Typo3.png)',
			$this->fixture->createIconStyle(Tx_Phpunit_TestableCode::CORE_KEY)
		);
	}

	/**
	 * @test
	 *
	 * @expectedException Tx_Phpunit_Exception_NoTestsDirectory
	 */
	public function createIconStyleForNotLoadedExtensionThrowsException() {
		$this->fixture->createIconStyle('not_loaded_extension');
	}

	/**
	 * @test
	 *
	 * @expectedException Tx_Phpunit_Exception_NoTestsDirectory
	 */
	public function createIconStyleForEmptyExtensionKeyThrowsException() {
		$this->fixture->createIconStyle('');
	}

	/**
	 * @test
	 */
	public function outputOutputsOutput() {
		$className = $this->createAccessibleProxy();
		$fixture = new $className();

		$output = 'Hello world!';

		ob_start();
		$fixture->output($output);

		$this->assertSame(
			$output,
			ob_get_contents()
		);

		ob_end_clean();
	}

	/**
	 * @test
	 */
	public function isAcceptedTestSuitClassReturnsTrueForNonSpecialClass() {
		$this->assertTrue(
			$this->fixture->isAcceptedTestSuitClass('foo')
		);
	}

	/**
	 * @test
	 */
	public function isAcceptedTestSuitClassReturnsTrueForTestCaseSubClass() {
		$this->assertTrue(
			$this->fixture->isAcceptedTestSuitClass(get_class($this))
		);
	}

	/**
	 * @test
	 */
	public function isAcceptedTestSuitClassReturnsFalseForPhpunitTestCase() {
		$this->assertFalse(
			$this->fixture->isAcceptedTestSuitClass('Tx_Phpunit_TestCase')
		);
	}

	/**
	 * @test
	 */
	public function isAcceptedTestSuitClassReturnsFalseForPhpunitDatabaseTestCase() {
		$this->assertFalse(
			$this->fixture->isAcceptedTestSuitClass('Tx_Phpunit_Database_TestCase')
		);
	}

	/**
	 * @test
	 */
	public function isAcceptedTestSuitClassReturnsFalseForPhpunitSeleniumTestCase() {
		$this->assertFalse(
			$this->fixture->isAcceptedTestSuitClass('Tx_Phpunit_Selenium_TestCase')
		);
	}


	/*
	 * Tests concerning createExtensionSelector
	 */

	/**
	 * @test
	 */
	public function createExtensionSelectorCreatesForm() {
		$this->assertContains(
			'<form',
			$this->fixture->createExtensionSelector()
		);
	}

	/**
	 * @test
	 */
	public function createExtensionSelectorCreatesOptionForExtensionWithTests() {
		$selectedExtension = 'aaa';

		$className = $this->createAccessibleProxy();
		$fixture = new $className();
		$fixture->MOD_SETTINGS = array('extSel' => $selectedExtension);

		$this->assertRegExp(
			'/<option[^>]*value="phpunit"/',
			$fixture->createExtensionSelector()
		);
	}

	/**
	 * @test
	 */
	public function createExtensionSelectorContainsExtensionKeyOfExtensionWithTests() {
		$testableCode = new Tx_Phpunit_TestableCode();
		$testableCode->setKey('t3dd11');

		$testFinderMock = $this->getMock(
			'Tx_Phpunit_Service_TestFinder', array('getTestableCodeForEverything')
		);
		$testFinderMock->expects($this->once())->method('getTestableCodeForEverything')
			->will($this->returnValue(array($testableCode)));

		$fixture = $this->getMock(
			$this->createAccessibleProxy(), array('getTestFinder')
		);
		$fixture->expects($this->once())->method('getTestFinder')
			->will($this->returnValue($testFinderMock));

		$this->assertRegExp(
			'#<option [^>]*value="t3dd11">t3dd11</option>#',
			$fixture->createExtensionSelector()
		);
	}

	/**
	 * @test
	 */
	public function createExtensionSelectorContainsIconPathKeyOfExtensionWithTests() {
		$this->assertContains(
			'background: url(../typo3conf/ext/phpunit/ext_icon.gif)',
			$this->fixture->createExtensionSelector()
		);
	}

	/**
	 * @test
	 */
	public function createExtensionSelectorMarksSelectedExtensionAsSelected() {
		$this->fixture->MOD_SETTINGS['extSel'] = 'phpunit';

		$this->assertRegExp(
			'#<option [^>]* selected="selected">phpunit</option>#',
			$this->fixture->createExtensionSelector()
		);

	}

	/**
	 * @test
	 */
	public function createExtensionSelectorMarksNotSelectedExtensionAsNotSelected() {
		$this->fixture->MOD_SETTINGS['extSel'] = 't3dd11';

		$this->assertNotRegExp(
			'#<option [^>]*selected="selected">phpunit</option>#',
			$this->fixture->createExtensionSelector()
		);
	}

	/**
	 * @test
	 */
	public function createExtensionSelectorContainsKeyForAllExtensions() {
		$this->assertRegExp(
			'/<option [^>]*value="uuall"/',
			$this->fixture->createExtensionSelector()
		);
	}

	/**
	 * @test
	 */
	public function createExtensionSelectorForAllSelectedMarksAllAsSelected() {
		$this->fixture->MOD_SETTINGS['extSel'] = Tx_Phpunit_TestableCode::ALL_EXTENSIONS;

		$this->assertRegExp(
			'/<option [^>]* value="' . Tx_Phpunit_TestableCode::ALL_EXTENSIONS . '" selected="selected">/',
			$this->fixture->createExtensionSelector()
		);

	}

	/**
	 * @test
	 */
	public function createExtensionSelectorForOtherExtensionSelectedMarksAllAsNotSelected() {
		$this->fixture->MOD_SETTINGS['extSel'] = 't3dd11';

		$this->assertNotRegExp(
			'/<option [^>]* value="uuall" selected="selected">/',
			$this->fixture->createExtensionSelector()
		);
	}


	/*
	 * Tests concerning createTestCaseSelector
	 */

	/**
	 * @test
	 */
	public function createTestCaseSelectorCreatesForm() {
		$selectedExtension = 'phpunit';
		$this->fixture->MOD_SETTINGS = array('extSel' => $selectedExtension);

		$this->assertContains(
			'<form',
			$this->fixture->createTestCaseSelector(array($selectedExtension => array()), $selectedExtension)
		);
	}

	/**
	 * @test
	 */
	public function createTestCaseSelectorForNoExtensionSelectedReturnsEmptyString() {
		$selectedExtension = '';
		$this->fixture->MOD_SETTINGS = array('extSel' => $selectedExtension);

		$this->assertSame(
			'',
			$this->fixture->createTestCaseSelector(array('phpunit' => array()), $selectedExtension)
		);
	}

	/**
	 * @test
	 */
	public function createTestCaseSelectorForAllExtensionSelectedReturnsEmptyString() {
		$selectedExtension = Tx_Phpunit_TestableCode::ALL_EXTENSIONS;
		$this->fixture->MOD_SETTINGS = array('extSel' => $selectedExtension);

		$this->assertSame(
			'',
			$this->fixture->createTestCaseSelector(array('phpunit' => array()), $selectedExtension)
		);
	}

	/**
	 * @test
	 */
	public function createTestCaseSelectorCreatesOptionForExistingTestcaseFromSelectedExtension() {
		$selectedExtension = 'phpunit';
		$this->fixture->MOD_SETTINGS = array('extSel' => $selectedExtension);

		$this->assertRegExp(
			'/<option[^>]*value="Tx_Phpunit_BackEnd_ModuleTest"/',
			$this->fixture->createTestCaseSelector(array($selectedExtension => array()), $selectedExtension)
		);
	}

	/**
	 * @test
	 */
	public function createTestCaseSelectorNotCreatesOptionForExistingTestcaseFromNotSelectedExtension() {
		if (!t3lib_extMgm::isLoaded('oelib')) {
			$this->markTestSkipped('This tests requires the "oelib" extension to be loaded.');
		}

		$selectedExtension = 'phpunit';
		$this->fixture->MOD_SETTINGS = array('extSel' => $selectedExtension);

		$this->assertNotContains(
			'value="tx_oelib_DataMapperTest"',
			$this->fixture->createTestCaseSelector(array($selectedExtension => array()), $selectedExtension)
		);
	}

	/**
	 * @test
	 */
	public function createTestCaseSelectorContainsIconPathKeyOfExtensionWithTests() {
		$selectedExtension = 'phpunit';
		$this->fixture->MOD_SETTINGS = array('extSel' => $selectedExtension);

		$this->assertContains(
			'background: url(../typo3conf/ext/phpunit/ext_icon.gif)',
			$this->fixture->createTestCaseSelector(array($selectedExtension => array()), $selectedExtension)
		);
	}

	/**
	 * @test
	 */
	public function createTestCaseSelectorMarksSelectedTestCaseAsSelected() {
		$selectedExtension = 'phpunit';
		$this->fixture->MOD_SETTINGS = array('extSel' => $selectedExtension);
		$_GET['testCaseFile'] = 'Tx_Phpunit_Service_TestFinderTest';

		$this->assertRegExp(
			'#<option [^>]* selected="selected">Tx_Phpunit_Service_TestFinderTest</option>#',
			$this->fixture->createTestCaseSelector(array($selectedExtension => array()), $selectedExtension)
		);
	}

	/**
	 * @test
	 */
	public function createTestCaseSelectorMarksForOtherTestCaseSelectedTestCaseAsNotSelected() {
		$selectedExtension = 'phpunit';
		$this->fixture->MOD_SETTINGS = array('extSel' => $selectedExtension);
		$_GET['testCaseFile'] = 'Tx_Phpunit_Service_TestFinderTest';

		$this->assertNotRegExp(
			'#<option [^>]* selected="selected">Tx_Phpunit_BackEnd_ModuleTest</option>#',
			$this->fixture->createTestCaseSelector(array($selectedExtension => array()), $selectedExtension)
		);
	}

	/**
	 * @test
	 */
	public function createTestCaseSelectorMarksNoTestCaseSelectedTestCaseAsNotSelected() {
		$selectedExtension = 'phpunit';
		$this->fixture->MOD_SETTINGS = array('extSel' => $selectedExtension);
		$_GET['testCaseFile'] = '';

		$this->assertNotRegExp(
			'#<option [^>]* selected="selected">Tx_Phpunit_BackEnd_ModuleTest</option>#',
			$this->fixture->createTestCaseSelector(array($selectedExtension => array()), $selectedExtension)
		);
	}
}
?>