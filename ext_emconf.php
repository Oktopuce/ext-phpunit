<?php

########################################################################
# Extension Manager/Repository config file for ext: "phpunit"
#
# Auto generated 07-04-2008 09:07
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'PHPUnit',
	'description' => 'TYPO3 unit testing UI based on PHPUnit ver. 3.2 by Sebastian Bergmann. Part of the ECT effort (Extension Coordination Team).',
	'category' => 'module',
	'shy' => 0,
	'version' => '3.2.16',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Kasper Ligaard',
	'author_email' => 'ligaard@systime.dk',
	'author_company' => 'GT3',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.1-0.0.0',
			'typo3' => '4.1-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'pear' => '2.3.5-0.0.0',
			'oelib' => '0.4.0-0.0.0',
		),
	),
	'_md5_values_when_last_written' => 'a:404:{s:9:"Changelog";s:4:"d41d";s:4:"NEWS";s:4:"f3f5";s:4:"TODO";s:4:"1d22";s:38:"class.tx_phpunit_database_testcase.php";s:4:"a7a7";s:29:"class.tx_phpunit_testcase.php";s:4:"14c3";s:33:"class.tx_phpunit_testlistener.php";s:4:"ab3c";s:21:"ext_conf_template.txt";s:4:"5bdc";s:12:"ext_icon.gif";s:4:"5f50";s:17:"ext_localconf.php";s:4:"b2b1";s:14:"ext_tables.php";s:4:"2fe8";s:36:"PHPUnit-3.2.18/PHPUnit/Framework.php";s:4:"b119";s:46:"PHPUnit-3.2.18/PHPUnit/Samples/FailureTest.php";s:4:"6693";s:60:"PHPUnit-3.2.18/PHPUnit/Samples/BankAccountDB/BankAccount.php";s:4:"b113";s:66:"PHPUnit-3.2.18/PHPUnit/Samples/BankAccountDB/BankAccountDBTest.php";s:4:"a609";s:71:"PHPUnit-3.2.18/PHPUnit/Samples/BankAccountDB/BankAccountDBTestMySQL.php";s:4:"e0ae";s:83:"PHPUnit-3.2.18/PHPUnit/Samples/BankAccountDB/_files/bank-account-after-deposits.xml";s:4:"c0c4";s:86:"PHPUnit-3.2.18/PHPUnit/Samples/BankAccountDB/_files/bank-account-after-new-account.xml";s:4:"2f81";s:86:"PHPUnit-3.2.18/PHPUnit/Samples/BankAccountDB/_files/bank-account-after-withdrawals.xml";s:4:"b8fd";s:73:"PHPUnit-3.2.18/PHPUnit/Samples/BankAccountDB/_files/bank-account-seed.xml";s:4:"344f";s:58:"PHPUnit-3.2.18/PHPUnit/Samples/BankAccount/BankAccount.php";s:4:"9701";s:62:"PHPUnit-3.2.18/PHPUnit/Samples/BankAccount/BankAccountTest.php";s:4:"f506";s:47:"PHPUnit-3.2.18/PHPUnit/Samples/Money/IMoney.php";s:4:"7eb8";s:46:"PHPUnit-3.2.18/PHPUnit/Samples/Money/Money.php";s:4:"3ca1";s:49:"PHPUnit-3.2.18/PHPUnit/Samples/Money/MoneyBag.php";s:4:"02a0";s:50:"PHPUnit-3.2.18/PHPUnit/Samples/Money/MoneyTest.php";s:4:"ce92";s:48:"PHPUnit-3.2.18/PHPUnit/Runner/BaseTestRunner.php";s:4:"c6e5";s:58:"PHPUnit-3.2.18/PHPUnit/Runner/IncludePathTestCollector.php";s:4:"7615";s:57:"PHPUnit-3.2.18/PHPUnit/Runner/StandardTestSuiteLoader.php";s:4:"a474";s:47:"PHPUnit-3.2.18/PHPUnit/Runner/TestCollector.php";s:4:"35c5";s:49:"PHPUnit-3.2.18/PHPUnit/Runner/TestSuiteLoader.php";s:4:"923d";s:41:"PHPUnit-3.2.18/PHPUnit/Runner/Version.php";s:4:"74fd";s:37:"PHPUnit-3.2.18/PHPUnit/Util/Class.php";s:4:"92aa";s:44:"PHPUnit-3.2.18/PHPUnit/Util/CodeCoverage.php";s:4:"53bf";s:45:"PHPUnit-3.2.18/PHPUnit/Util/Configuration.php";s:4:"26fd";s:44:"PHPUnit-3.2.18/PHPUnit/Util/ErrorHandler.php";s:4:"90d9";s:42:"PHPUnit-3.2.18/PHPUnit/Util/Fileloader.php";s:4:"29f6";s:42:"PHPUnit-3.2.18/PHPUnit/Util/Filesystem.php";s:4:"2e73";s:38:"PHPUnit-3.2.18/PHPUnit/Util/Filter.php";s:4:"c8b8";s:46:"PHPUnit-3.2.18/PHPUnit/Util/FilterIterator.php";s:4:"1661";s:38:"PHPUnit-3.2.18/PHPUnit/Util/Getopt.php";s:4:"fb28";s:39:"PHPUnit-3.2.18/PHPUnit/Util/Metrics.php";s:4:"e6b9";s:35:"PHPUnit-3.2.18/PHPUnit/Util/PDO.php";s:4:"c146";s:39:"PHPUnit-3.2.18/PHPUnit/Util/Printer.php";s:4:"6f5a";s:38:"PHPUnit-3.2.18/PHPUnit/Util/Report.php";s:4:"bf0e";s:40:"PHPUnit-3.2.18/PHPUnit/Util/Skeleton.php";s:4:"70e0";s:40:"PHPUnit-3.2.18/PHPUnit/Util/Template.php";s:4:"0997";s:36:"PHPUnit-3.2.18/PHPUnit/Util/Test.php";s:4:"77b9";s:49:"PHPUnit-3.2.18/PHPUnit/Util/TestSuiteIterator.php";s:4:"cb91";s:37:"PHPUnit-3.2.18/PHPUnit/Util/Timer.php";s:4:"57a1";s:36:"PHPUnit-3.2.18/PHPUnit/Util/Type.php";s:4:"45dc";s:35:"PHPUnit-3.2.18/PHPUnit/Util/XML.php";s:4:"089b";s:43:"PHPUnit-3.2.18/PHPUnit/Util/Report/Node.php";s:4:"9b4a";s:53:"PHPUnit-3.2.18/PHPUnit/Util/Report/Node/Directory.php";s:4:"ff9a";s:48:"PHPUnit-3.2.18/PHPUnit/Util/Report/Node/File.php";s:4:"9cbb";s:54:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/butter.png";s:4:"521e";s:57:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/chameleon.png";s:4:"24ab";s:57:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/close12_1.gif";s:4:"770d";s:60:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/container-min.js";s:4:"322d";s:57:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/container.css";s:4:"9f41";s:58:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/directory.html";s:4:"1f29";s:53:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/file.html";s:4:"75cd";s:60:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/file_no_yui.html";s:4:"0396";s:53:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/glass.png";s:4:"d0bc";s:53:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/item.html";s:4:"e9f0";s:60:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/method_item.html";s:4:"02b8";s:59:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/scarlet_red.png";s:4:"e7e9";s:52:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/snow.png";s:4:"3d0f";s:53:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/style.css";s:4:"8af7";s:62:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/yahoo-dom-event.js";s:4:"02f0";s:55:"PHPUnit-3.2.18/PHPUnit/Util/Report/Template/yui_item.js";s:4:"32c5";s:39:"PHPUnit-3.2.18/PHPUnit/Util/Log/CPD.php";s:4:"9fd1";s:44:"PHPUnit-3.2.18/PHPUnit/Util/Log/Database.php";s:4:"6371";s:44:"PHPUnit-3.2.18/PHPUnit/Util/Log/GraphViz.php";s:4:"0014";s:40:"PHPUnit-3.2.18/PHPUnit/Util/Log/JSON.php";s:4:"8412";s:43:"PHPUnit-3.2.18/PHPUnit/Util/Log/Metrics.php";s:4:"40d2";s:40:"PHPUnit-3.2.18/PHPUnit/Util/Log/PEAR.php";s:4:"282c";s:39:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD.php";s:4:"a3fd";s:39:"PHPUnit-3.2.18/PHPUnit/Util/Log/TAP.php";s:4:"3ad9";s:39:"PHPUnit-3.2.18/PHPUnit/Util/Log/XML.php";s:4:"0f8b";s:50:"PHPUnit-3.2.18/PHPUnit/Util/Log/Database/MySQL.sql";s:4:"5dac";s:52:"PHPUnit-3.2.18/PHPUnit/Util/Log/Database/SQLite3.sql";s:4:"d9b0";s:44:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule.php";s:4:"50a2";s:50:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Class.php";s:4:"bca4";s:49:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/File.php";s:4:"f686";s:53:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Function.php";s:4:"3f22";s:52:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Project.php";s:4:"d7e3";s:73:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Class/DepthOfInheritanceTree.php";s:4:"7d97";s:67:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Class/EfferentCoupling.php";s:4:"1e32";s:71:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Class/ExcessiveClassLength.php";s:4:"fca7";s:71:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Class/ExcessivePublicCount.php";s:4:"1a04";s:64:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Class/TooManyFields.php";s:4:"985a";s:58:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Function/CRAP.php";s:4:"a87b";s:66:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Function/CodeCoverage.php";s:4:"cc53";s:74:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Function/CyclomaticComplexity.php";s:4:"3b71";s:75:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Function/ExcessiveMethodLength.php";s:4:"7a38";s:76:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Function/ExcessiveParameterList.php";s:4:"7e5f";s:69:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Function/NPathComplexity.php";s:4:"5ff6";s:57:"PHPUnit-3.2.18/PHPUnit/Util/Log/PMD/Rule/Project/CRAP.php";s:4:"1974";s:57:"PHPUnit-3.2.18/PHPUnit/Util/Log/CodeCoverage/Database.php";s:4:"73d6";s:52:"PHPUnit-3.2.18/PHPUnit/Util/Log/CodeCoverage/XML.php";s:4:"6548";s:61:"PHPUnit-3.2.18/PHPUnit/Util/Skeleton/IncompleteTestMethod.tpl";s:4:"f965";s:50:"PHPUnit-3.2.18/PHPUnit/Util/Skeleton/TestClass.tpl";s:4:"8a33";s:51:"PHPUnit-3.2.18/PHPUnit/Util/Skeleton/TestMethod.tpl";s:4:"6141";s:55:"PHPUnit-3.2.18/PHPUnit/Util/Skeleton/TestMethodBool.tpl";s:4:"9a09";s:61:"PHPUnit-3.2.18/PHPUnit/Util/Skeleton/TestMethodBoolStatic.tpl";s:4:"9fa0";s:60:"PHPUnit-3.2.18/PHPUnit/Util/Skeleton/TestMethodException.tpl";s:4:"c08f";s:66:"PHPUnit-3.2.18/PHPUnit/Util/Skeleton/TestMethodExceptionStatic.tpl";s:4:"c021";s:57:"PHPUnit-3.2.18/PHPUnit/Util/Skeleton/TestMethodStatic.tpl";s:4:"4b31";s:45:"PHPUnit-3.2.18/PHPUnit/Util/Metrics/Class.php";s:4:"81b0";s:44:"PHPUnit-3.2.18/PHPUnit/Util/Metrics/File.php";s:4:"dee8";s:48:"PHPUnit-3.2.18/PHPUnit/Util/Metrics/Function.php";s:4:"f567";s:47:"PHPUnit-3.2.18/PHPUnit/Util/Metrics/Project.php";s:4:"a782";s:54:"PHPUnit-3.2.18/PHPUnit/Util/TestDox/NamePrettifier.php";s:4:"d44f";s:53:"PHPUnit-3.2.18/PHPUnit/Util/TestDox/ResultPrinter.php";s:4:"36ed";s:58:"PHPUnit-3.2.18/PHPUnit/Util/TestDox/ResultPrinter/HTML.php";s:4:"20ea";s:58:"PHPUnit-3.2.18/PHPUnit/Util/TestDox/ResultPrinter/Text.php";s:4:"0ea9";s:43:"PHPUnit-3.2.18/PHPUnit/Framework/Assert.php";s:4:"94a1";s:57:"PHPUnit-3.2.18/PHPUnit/Framework/AssertionFailedError.php";s:4:"5092";s:54:"PHPUnit-3.2.18/PHPUnit/Framework/ComparisonFailure.php";s:4:"62ba";s:47:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint.php";s:4:"1d36";s:42:"PHPUnit-3.2.18/PHPUnit/Framework/Error.php";s:4:"031f";s:63:"PHPUnit-3.2.18/PHPUnit/Framework/ExpectationFailedException.php";s:4:"4431";s:51:"PHPUnit-3.2.18/PHPUnit/Framework/IncompleteTest.php";s:4:"d5f4";s:56:"PHPUnit-3.2.18/PHPUnit/Framework/IncompleteTestError.php";s:4:"d1a4";s:43:"PHPUnit-3.2.18/PHPUnit/Framework/Notice.php";s:4:"dd2d";s:51:"PHPUnit-3.2.18/PHPUnit/Framework/SelfDescribing.php";s:4:"361d";s:48:"PHPUnit-3.2.18/PHPUnit/Framework/SkippedTest.php";s:4:"6693";s:53:"PHPUnit-3.2.18/PHPUnit/Framework/SkippedTestError.php";s:4:"338c";s:58:"PHPUnit-3.2.18/PHPUnit/Framework/SkippedTestSuiteError.php";s:4:"f00e";s:41:"PHPUnit-3.2.18/PHPUnit/Framework/Test.php";s:4:"c7e7";s:45:"PHPUnit-3.2.18/PHPUnit/Framework/TestCase.php";s:4:"25f3";s:48:"PHPUnit-3.2.18/PHPUnit/Framework/TestFailure.php";s:4:"ab52";s:49:"PHPUnit-3.2.18/PHPUnit/Framework/TestListener.php";s:4:"b45b";s:47:"PHPUnit-3.2.18/PHPUnit/Framework/TestResult.php";s:4:"126f";s:46:"PHPUnit-3.2.18/PHPUnit/Framework/TestSuite.php";s:4:"c4eb";s:44:"PHPUnit-3.2.18/PHPUnit/Framework/Warning.php";s:4:"d795";s:60:"PHPUnit-3.2.18/PHPUnit/Framework/ComparisonFailure/Array.php";s:4:"947d";s:61:"PHPUnit-3.2.18/PHPUnit/Framework/ComparisonFailure/Object.php";s:4:"bdd8";s:61:"PHPUnit-3.2.18/PHPUnit/Framework/ComparisonFailure/Scalar.php";s:4:"5f8d";s:61:"PHPUnit-3.2.18/PHPUnit/Framework/ComparisonFailure/String.php";s:4:"f594";s:59:"PHPUnit-3.2.18/PHPUnit/Framework/ComparisonFailure/Type.php";s:4:"9fae";s:58:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Invocation.php";s:4:"9d32";s:64:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/InvocationMocker.php";s:4:"7280";s:57:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Invokable.php";s:4:"a312";s:55:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Matcher.php";s:4:"5538";s:52:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Mock.php";s:4:"4b92";s:58:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/MockObject.php";s:4:"b6cf";s:52:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Stub.php";s:4:"3bbf";s:58:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Verifiable.php";s:4:"fc57";s:71:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Matcher/AnyInvokedCount.php";s:4:"f5d9";s:69:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Matcher/AnyParameters.php";s:4:"8de4";s:66:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Matcher/Invocation.php";s:4:"2df1";s:70:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Matcher/InvokedAtIndex.php";s:4:"2287";s:74:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Matcher/InvokedAtLeastOnce.php";s:4:"e60e";s:68:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Matcher/InvokedCount.php";s:4:"5597";s:71:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Matcher/InvokedRecorder.php";s:4:"0315";s:66:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Matcher/MethodName.php";s:4:"59ed";s:66:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Matcher/Parameters.php";s:4:"00b4";s:75:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Matcher/StatelessInvocation.php";s:4:"0561";s:64:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Builder/Identity.php";s:4:"e259";s:72:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Builder/InvocationMocker.php";s:4:"de67";s:61:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Builder/Match.php";s:4:"9dc4";s:71:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Builder/MethodNameMatch.php";s:4:"342c";s:65:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Builder/Namespace.php";s:4:"7ec7";s:71:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Builder/ParametersMatch.php";s:4:"15c6";s:60:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Builder/Stub.php";s:4:"16cd";s:69:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Stub/ConsecutiveCalls.php";s:4:"b403";s:62:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Stub/Exception.php";s:4:"8db6";s:70:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Stub/MatcherCollection.php";s:4:"381b";s:59:"PHPUnit-3.2.18/PHPUnit/Framework/MockObject/Stub/Return.php";s:4:"5ea5";s:51:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/And.php";s:4:"a2e9";s:59:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/ArrayHasKey.php";s:4:"bb28";s:57:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/Attribute.php";s:4:"fee7";s:65:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/ClassHasAttribute.php";s:4:"2ad1";s:71:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/ClassHasStaticAttribute.php";s:4:"1bd2";s:58:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/FileExists.php";s:4:"0bb8";s:59:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/GreaterThan.php";s:4:"f0ed";s:58:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/IsAnything.php";s:4:"7bf8";s:55:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/IsEqual.php";s:4:"8434";s:59:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/IsIdentical.php";s:4:"b8d8";s:60:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/IsInstanceOf.php";s:4:"d3ef";s:54:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/IsType.php";s:4:"fe19";s:56:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/LessThan.php";s:4:"3c89";s:51:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/Not.php";s:4:"b2b8";s:66:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/ObjectHasAttribute.php";s:4:"fa10";s:50:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/Or.php";s:4:"1316";s:57:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/PCREMatch.php";s:4:"38da";s:62:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/StringContains.php";s:4:"09a3";s:67:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/TraversableContains.php";s:4:"7683";s:71:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/TraversableContainsOnly.php";s:4:"b01f";s:51:"PHPUnit-3.2.18/PHPUnit/Framework/Constraint/Xor.php";s:4:"a79b";s:55:"PHPUnit-3.2.18/PHPUnit/Extensions/ExceptionTestCase.php";s:4:"5c34";s:52:"PHPUnit-3.2.18/PHPUnit/Extensions/OutputTestCase.php";s:4:"9308";s:57:"PHPUnit-3.2.18/PHPUnit/Extensions/PerformanceTestCase.php";s:4:"4711";s:50:"PHPUnit-3.2.18/PHPUnit/Extensions/PhptTestCase.php";s:4:"1b39";s:51:"PHPUnit-3.2.18/PHPUnit/Extensions/PhptTestSuite.php";s:4:"26aa";s:50:"PHPUnit-3.2.18/PHPUnit/Extensions/RepeatedTest.php";s:4:"f874";s:54:"PHPUnit-3.2.18/PHPUnit/Extensions/SeleniumTestCase.php";s:4:"04ed";s:51:"PHPUnit-3.2.18/PHPUnit/Extensions/TestDecorator.php";s:4:"1067";s:47:"PHPUnit-3.2.18/PHPUnit/Extensions/TestSetup.php";s:4:"7b80";s:61:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/AbstractTester.php";s:4:"6682";s:60:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DefaultTester.php";s:4:"5d53";s:54:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/ITester.php";s:4:"f24d";s:55:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/TestCase.php";s:4:"3586";s:66:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Operation/Composite.php";s:4:"1fce";s:63:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Operation/Delete.php";s:4:"9a85";s:66:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Operation/DeleteAll.php";s:4:"50a1";s:66:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Operation/Exception.php";s:4:"520e";s:64:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Operation/Factory.php";s:4:"99f0";s:75:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Operation/IDatabaseOperation.php";s:4:"a8f9";s:63:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Operation/Insert.php";s:4:"2cfb";s:61:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Operation/Null.php";s:4:"2538";s:64:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Operation/Replace.php";s:4:"f3fa";s:65:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Operation/RowBased.php";s:4:"c45d";s:65:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Operation/Truncate.php";s:4:"79b7";s:63:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Operation/Update.php";s:4:"5d34";s:70:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/AbstractDataSet.php";s:4:"00a6";s:68:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/AbstractTable.php";s:4:"aa39";s:76:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/AbstractTableMetaData.php";s:4:"9840";s:73:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/AbstractXmlDataSet.php";s:4:"701e";s:68:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/DataSetFilter.php";s:4:"2c62";s:69:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/DefaultDataSet.php";s:4:"79f6";s:67:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/DefaultTable.php";s:4:"4940";s:75:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/DefaultTableIterator.php";s:4:"b282";s:75:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/DefaultTableMetaData.php";s:4:"16f2";s:69:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/FlatXmlDataSet.php";s:4:"ea60";s:63:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/IDataSet.php";s:4:"ce7a";s:61:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/ITable.php";s:4:"76cc";s:69:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/ITableIterator.php";s:4:"b274";s:69:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/ITableMetaData.php";s:4:"3465";s:66:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/TableFilter.php";s:4:"67be";s:74:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/TableMetaDataFilter.php";s:4:"4059";s:65:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DataSet/XmlDataSet.php";s:4:"4bfe";s:57:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/DataSet.php";s:4:"4cbd";s:75:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/DefaultDatabaseConnection.php";s:4:"3752";s:65:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/FilteredDataSet.php";s:4:"3f8e";s:69:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/IDatabaseConnection.php";s:4:"af6f";s:59:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/IMetaData.php";s:4:"2b4e";s:58:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/MetaData.php";s:4:"4f44";s:64:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/ResultSetTable.php";s:4:"cda9";s:55:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/Table.php";s:4:"1e4d";s:63:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/TableIterator.php";s:4:"3a6d";s:63:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/TableMetaData.php";s:4:"83cf";s:76:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/MetaData/InformationSchema.php";s:4:"f01f";s:64:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/MetaData/MySQL.php";s:4:"26a0";s:62:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/MetaData/Oci.php";s:4:"7dff";s:64:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/MetaData/PgSQL.php";s:4:"a588";s:65:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/DB/MetaData/Sqlite.php";s:4:"5a6b";s:72:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Constraint/DataSetIsEqual.php";s:4:"3523";s:70:"PHPUnit-3.2.18/PHPUnit/Extensions/Database/Constraint/TableIsEqual.php";s:4:"a604";s:57:"PHPUnit-3.2.18/PHPUnit/Extensions/PhptTestCase/Logger.php";s:4:"2fe6";s:61:"PHPUnit-3.2.18/PHPUnit/Extensions/SeleniumTestCase/append.php";s:4:"7f04";s:71:"PHPUnit-3.2.18/PHPUnit/Extensions/SeleniumTestCase/phpunit_coverage.php";s:4:"3d38";s:62:"PHPUnit-3.2.18/PHPUnit/Extensions/SeleniumTestCase/prepend.php";s:4:"fb42";s:41:"PHPUnit-3.2.18/PHPUnit/TextUI/Command.php";s:4:"8eed";s:47:"PHPUnit-3.2.18/PHPUnit/TextUI/ResultPrinter.php";s:4:"c216";s:44:"PHPUnit-3.2.18/PHPUnit/TextUI/TestRunner.php";s:4:"6000";s:41:"PHPUnit-3.2.18/PHPUnit/Tests/AllTests.php";s:4:"1c44";s:55:"PHPUnit-3.2.18/PHPUnit/Tests/TestConfiguration.php.dist";s:4:"54e9";s:48:"PHPUnit-3.2.18/PHPUnit/Tests/Runner/AllTests.php";s:4:"9308";s:58:"PHPUnit-3.2.18/PHPUnit/Tests/Runner/BaseTestRunnerTest.php";s:4:"e852";s:46:"PHPUnit-3.2.18/PHPUnit/Tests/Util/AllTests.php";s:4:"e191";s:47:"PHPUnit-3.2.18/PHPUnit/Tests/Util/TimerTest.php";s:4:"51a6";s:54:"PHPUnit-3.2.18/PHPUnit/Tests/Util/TestDox/AllTests.php";s:4:"2058";s:64:"PHPUnit-3.2.18/PHPUnit/Tests/Util/TestDox/NamePrettifierTest.php";s:4:"8414";s:51:"PHPUnit-3.2.18/PHPUnit/Tests/Framework/AllTests.php";s:4:"da71";s:53:"PHPUnit-3.2.18/PHPUnit/Tests/Framework/AssertTest.php";s:4:"e47a";s:64:"PHPUnit-3.2.18/PHPUnit/Tests/Framework/ComparisonFailureTest.php";s:4:"e40f";s:57:"PHPUnit-3.2.18/PHPUnit/Tests/Framework/ConstraintTest.php";s:4:"cb99";s:57:"PHPUnit-3.2.18/PHPUnit/Tests/Framework/MockObjectTest.php";s:4:"16cc";s:52:"PHPUnit-3.2.18/PHPUnit/Tests/Framework/SuiteTest.php";s:4:"4854";s:55:"PHPUnit-3.2.18/PHPUnit/Tests/Framework/TestCaseTest.php";s:4:"d03f";s:62:"PHPUnit-3.2.18/PHPUnit/Tests/Framework/TestImplementorTest.php";s:4:"1ba3";s:59:"PHPUnit-3.2.18/PHPUnit/Tests/Framework/TestListenerTest.php";s:4:"ec1f";s:52:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/AllTests.php";s:4:"861b";s:62:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/OutputTestCaseTest.php";s:4:"dd2a";s:67:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/PerformanceTestCaseTest.php";s:4:"4691";s:60:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/RepeatedTestTest.php";s:4:"8046";s:64:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/SeleniumTestCaseTest.php";s:4:"2420";s:61:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/AllTests.php";s:4:"3d12";s:71:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/Operation/AllTests.php";s:4:"6b1e";s:77:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/Operation/OperationsTest.php";s:4:"989c";s:75:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/Operation/RowBasedTest.php";s:4:"1909";s:69:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/DataSet/AllTests.php";s:4:"f341";s:71:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/DataSet/FilterTest.php";s:4:"dd16";s:76:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/DataSet/XmlDataSetsTest.php";s:4:"ffa6";s:94:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/DeleteAllOperationTest.xml";s:4:"fb1c";s:93:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/DeleteOperationResult.xml";s:4:"d076";s:91:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/DeleteOperationTest.xml";s:4:"e1a9";s:94:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/FilteredTestComparison.xml";s:4:"1f27";s:91:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/FilteredTestFixture.xml";s:4:"184a";s:86:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/FlatXmlDataSet.xml";s:4:"2b8f";s:93:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/InsertOperationResult.xml";s:4:"8156";s:91:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/InsertOperationTest.xml";s:4:"89c5";s:93:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/OperationsTestFixture.xml";s:4:"1f27";s:94:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/ReplaceOperationResult.xml";s:4:"845c";s:92:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/ReplaceOperationTest.xml";s:4:"68cb";s:87:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/RowBasedExecute.xml";s:4:"1b80";s:93:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/UpdateOperationResult.xml";s:4:"4917";s:91:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/UpdateOperationTest.xml";s:4:"134a";s:82:"PHPUnit-3.2.18/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/XmlDataSet.xml";s:4:"c2d2";s:51:"PHPUnit-3.2.18/PHPUnit/Tests/_files/AnInterface.php";s:4:"1933";s:52:"PHPUnit-3.2.18/PHPUnit/Tests/_files/BankAccount.json";s:4:"5d0b";s:55:"PHPUnit-3.2.18/PHPUnit/Tests/_files/BankAccount.metrics";s:4:"68b3";s:51:"PHPUnit-3.2.18/PHPUnit/Tests/_files/BankAccount.pmd";s:4:"68b3";s:51:"PHPUnit-3.2.18/PHPUnit/Tests/_files/BankAccount.tap";s:4:"0c52";s:51:"PHPUnit-3.2.18/PHPUnit/Tests/_files/BankAccount.xml";s:4:"4bbc";s:68:"PHPUnit-3.2.18/PHPUnit/Tests/_files/ClassWithNonPublicAttributes.php";s:4:"e6ed";s:54:"PHPUnit-3.2.18/PHPUnit/Tests/_files/DoubleTestCase.php";s:4:"bc72";s:45:"PHPUnit-3.2.18/PHPUnit/Tests/_files/Error.php";s:4:"820b";s:47:"PHPUnit-3.2.18/PHPUnit/Tests/_files/Failure.php";s:4:"503e";s:57:"PHPUnit-3.2.18/PHPUnit/Tests/_files/InheritedTestCase.php";s:4:"f18f";s:50:"PHPUnit-3.2.18/PHPUnit/Tests/_files/MockRunner.php";s:4:"9f66";s:57:"PHPUnit-3.2.18/PHPUnit/Tests/_files/NoArgTestCaseTest.php";s:4:"23eb";s:55:"PHPUnit-3.2.18/PHPUnit/Tests/_files/NoTestCaseClass.php";s:4:"6f79";s:51:"PHPUnit-3.2.18/PHPUnit/Tests/_files/NoTestCases.php";s:4:"ffc1";s:49:"PHPUnit-3.2.18/PHPUnit/Tests/_files/NonStatic.php";s:4:"cdfc";s:57:"PHPUnit-3.2.18/PHPUnit/Tests/_files/NotPublicTestCase.php";s:4:"ed3b";s:55:"PHPUnit-3.2.18/PHPUnit/Tests/_files/NotVoidTestCase.php";s:4:"b436";s:51:"PHPUnit-3.2.18/PHPUnit/Tests/_files/OneTestCase.php";s:4:"c292";s:54:"PHPUnit-3.2.18/PHPUnit/Tests/_files/OutputTestCase.php";s:4:"0035";s:56:"PHPUnit-3.2.18/PHPUnit/Tests/_files/OverrideTestCase.php";s:4:"c066";s:51:"PHPUnit-3.2.18/PHPUnit/Tests/_files/SampleClass.php";s:4:"763d";s:52:"PHPUnit-3.2.18/PHPUnit/Tests/_files/SetupFailure.php";s:4:"e907";s:45:"PHPUnit-3.2.18/PHPUnit/Tests/_files/Sleep.php";s:4:"06cc";s:46:"PHPUnit-3.2.18/PHPUnit/Tests/_files/Struct.php";s:4:"39de";s:47:"PHPUnit-3.2.18/PHPUnit/Tests/_files/Success.php";s:4:"dbd8";s:55:"PHPUnit-3.2.18/PHPUnit/Tests/_files/TearDownFailure.php";s:4:"3a23";s:52:"PHPUnit-3.2.18/PHPUnit/Tests/_files/TestIterator.php";s:4:"35de";s:62:"PHPUnit-3.2.18/PHPUnit/Tests/_files/ThrowExceptionTestCase.php";s:4:"1448";s:64:"PHPUnit-3.2.18/PHPUnit/Tests/_files/ThrowNoExceptionTestCase.php";s:4:"44ca";s:48:"PHPUnit-3.2.18/PHPUnit/Tests/_files/TornDown.php";s:4:"7d96";s:49:"PHPUnit-3.2.18/PHPUnit/Tests/_files/TornDown2.php";s:4:"713e";s:49:"PHPUnit-3.2.18/PHPUnit/Tests/_files/TornDown3.php";s:4:"9cc5";s:49:"PHPUnit-3.2.18/PHPUnit/Tests/_files/TornDown4.php";s:4:"2694";s:49:"PHPUnit-3.2.18/PHPUnit/Tests/_files/TornDown5.php";s:4:"0186";s:46:"PHPUnit-3.2.18/PHPUnit/Tests/_files/WasRun.php";s:4:"ea9f";s:43:"PHPUnit-3.2.18/PHPUnit/Tests/_files/bar.xml";s:4:"1581";s:43:"PHPUnit-3.2.18/PHPUnit/Tests/_files/foo.xml";s:4:"6dc4";s:14:"doc/manual.sxw";s:4:"3b2f";s:27:"tests/database_testcase.php";s:4:"bf3e";s:35:"tests/database_testcase_dataset.xml";s:4:"0651";s:34:"tests/tx_phpunit_test_testcase.php";s:4:"92e4";s:30:"tests/tx_phpunit_testsuite.php";s:4:"94a7";s:33:"tests/tx_t3unit_test_testcase.php";s:4:"645e";s:23:"tests/res/ccc/ChangeLog";s:4:"6901";s:24:"tests/res/ccc/README.txt";s:4:"ee2d";s:28:"tests/res/ccc/ext_emconf.php";s:4:"1dc9";s:26:"tests/res/ccc/ext_icon.gif";s:4:"1bdc";s:28:"tests/res/ccc/ext_tables.php";s:4:"7b15";s:28:"tests/res/ccc/ext_tables.sql";s:4:"ed29";s:34:"tests/res/ccc/icon_tx_ccc_data.gif";s:4:"475a";s:34:"tests/res/ccc/icon_tx_ccc_test.gif";s:4:"475a";s:30:"tests/res/ccc/locallang_db.xml";s:4:"4f69";s:21:"tests/res/ccc/tca.php";s:4:"eb30";s:33:"tests/res/ccc/doc/wizard_form.dat";s:4:"5b6a";s:34:"tests/res/ccc/doc/wizard_form.html";s:4:"79f5";s:23:"tests/res/aaa/ChangeLog";s:4:"661e";s:24:"tests/res/aaa/README.txt";s:4:"ee2d";s:28:"tests/res/aaa/ext_emconf.php";s:4:"c526";s:26:"tests/res/aaa/ext_icon.gif";s:4:"1bdc";s:28:"tests/res/aaa/ext_tables.php";s:4:"6a79";s:28:"tests/res/aaa/ext_tables.sql";s:4:"1764";s:34:"tests/res/aaa/icon_tx_aaa_test.gif";s:4:"475a";s:30:"tests/res/aaa/locallang_db.xml";s:4:"9d47";s:21:"tests/res/aaa/tca.php";s:4:"ddf9";s:33:"tests/res/aaa/doc/wizard_form.dat";s:4:"1855";s:34:"tests/res/aaa/doc/wizard_form.html";s:4:"a38d";s:23:"tests/res/bbb/ChangeLog";s:4:"1da2";s:24:"tests/res/bbb/README.txt";s:4:"ee2d";s:28:"tests/res/bbb/ext_emconf.php";s:4:"00bd";s:26:"tests/res/bbb/ext_icon.gif";s:4:"1bdc";s:28:"tests/res/bbb/ext_tables.php";s:4:"84d0";s:28:"tests/res/bbb/ext_tables.sql";s:4:"717c";s:34:"tests/res/bbb/icon_tx_bbb_test.gif";s:4:"475a";s:30:"tests/res/bbb/locallang_db.xml";s:4:"7f20";s:21:"tests/res/bbb/tca.php";s:4:"f9d2";s:33:"tests/res/bbb/doc/wizard_form.dat";s:4:"12fb";s:34:"tests/res/bbb/doc/wizard_form.html";s:4:"37bf";s:23:"tests/res/ddd/ChangeLog";s:4:"661e";s:24:"tests/res/ddd/README.txt";s:4:"ee2d";s:28:"tests/res/ddd/ext_emconf.php";s:4:"e6a7";s:26:"tests/res/ddd/ext_icon.gif";s:4:"1bdc";s:28:"tests/res/ddd/ext_tables.php";s:4:"eed5";s:28:"tests/res/ddd/ext_tables.sql";s:4:"df94";s:34:"tests/res/ddd/icon_tx_ddd_test.gif";s:4:"475a";s:30:"tests/res/ddd/locallang_db.xml";s:4:"0b54";s:21:"tests/res/ddd/tca.php";s:4:"7e17";s:33:"tests/res/ddd/doc/wizard_form.dat";s:4:"4baa";s:34:"tests/res/ddd/doc/wizard_form.html";s:4:"7033";s:33:"mod1/class.tx_phpunit_module1.php";s:4:"cf4f";s:38:"mod1/class.tx_phpunit_module1_ajax.php";s:4:"da67";s:45:"mod1/class.tx_phpunit_module1_mikkelricky.php";s:4:"b3bb";s:13:"mod1/conf.php";s:4:"a873";s:14:"mod1/index.php";s:4:"b4a4";s:18:"mod1/locallang.xml";s:4:"c9b4";s:22:"mod1/locallang_mod.php";s:4:"4d5c";s:19:"mod1/moduleicon.gif";s:4:"9d0b";s:19:"mod1/phpunit-be.css";s:4:"0954";s:16:"mod1/phpunit.gif";s:4:"ea4a";s:15:"mod1/runner.gif";s:4:"9644";s:15:"mod1/styles.css";s:4:"6ad0";s:26:"mod1/tx_phpunit_module1.js";s:4:"7013";s:25:"lib/JsonPrettyPrinter.php";s:4:"22fd";}',
	'suggests' => array(
	),
);

?>