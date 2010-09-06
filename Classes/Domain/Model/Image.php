<?php

/***************************************************************
*  Copyright notice
*
*  (c) 2010 Niels Seelhöfer , HOCHZWEI
*  			Sebastian Michaelsen 
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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

/**
 * Tx_Flexgal_Domain_Model_Image
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

 class Tx_Flexgal_Domain_Model_Image  extends Tx_Extbase_DomainObject_AbstractEntity   {


	/**
	* 
	* file
	* 
	* @var string
	*/
	private $file;

	/**
	* 
	* title
	* 
	* @var string
	*/
	private $title;

	/**
	* 
	* description
	* 
	* @var string
	*/
	private $description;



	/**
	* 
	* Returns the file
	* 
	* @return string $file
	*/
	public function getFile( ){
		return $this->file; 
	}

	/**
	* 
	* Sets the file
	* 
	* @param string $file
	* @return void
	*/
	public function setFile(string $file ){
		$this->file = $file; 
	}

	/**
	* 
	* Returns the title
	* 
	* @return string $title
	*/
	public function getTitle( ){
		return $this->title; 
	}

	/**
	* 
	* Sets the title
	* 
	* @param string $title
	* @return void
	*/
	public function setTitle(string $title ){
		$this->title = $title; 
	}

	/**
	* 
	* Returns the description
	* 
	* @return string $description
	*/
	public function getDescription( ){
		return $this->description; 
	}

	/**
	* 
	* Sets the description
	* 
	* @param string $description
	* @return void
	*/
	public function setDescription(string $description ){
		$this->description = $description; 
	}

	/**
	* 
	* The constructor of this Image
	* 
	* @return
	*/
	public function __constructor( ){
		$this->initSplObjects(); 
	}

	/**
	* 
	* Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	* 
	* @return
	*/
	protected function initSplObjects( ){
 
	}

}

?>