<?php
namespace TYPO3\Q8yRssmanager\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 
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

/**
 *
 *
 * @package q8y_rssmanager
 * @author d.towkacz@quintinity.de
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
 
class User extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser {


	protected $uid;
	
	protected $feed_uid;
	
	


	public function getFeedUid() {
		return $this->feed_uid;
	}


	public function setFeedUid($uid) {
		$this->feed_uid = $uid;
	}



}
?>