<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Daniel Dorndorf <dorndorf@dreipunktnull.com>, dreipunktnull
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'dreipunktnull Glossar',
	'description' => 'Modern Extbase and namespaced Glossary extension',
	'category' => 'plugin',
	'author' => 'Daniel Dorndorf',
	'author_email' => 'dorndorf@dreipunktnull.com',
	'author_company' => 'dreipunktnull',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'version' => '2.2.3',
	'constraints' => array(
		'depends' => array(
			'extbase' => '6.0',
			'fluid' => '6.0',
			'typo3' => '6.1.0-7.2.99',
			'php' => '5.4.0'
		),
		'conflicts' => array(),
		'suggests' => array()
	)
);