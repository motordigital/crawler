<?php
namespace AOE\Crawler\Utility;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 AOE GmbH <dev@aoe.com>
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

/**
 * Class SchedulerUtility
 * @package AOE\Crawler\Utility
 */
class SchedulerUtility
{
    /**
     * @param $extKey
     *
     * @return void
     */
    public static function registerSchedulerTasks($extKey)
    {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['tx_crawler_scheduler_im'] = array(
            'extension'        => $extKey,
            'title'            => 'LLL:EXT:' . $extKey . '/locallang_db.xml:crawler_im.name',
            'description'      => 'LLL:EXT:' . $extKey . '/locallang_db.xml:crawler_im.description',
            'additionalFields' => 'tx_crawler_scheduler_imAdditionalFieldProvider'
        );

        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['tx_crawler_scheduler_crawl'] = array(
            'extension'        => $extKey,
            'title'            => 'LLL:EXT:' . $extKey . '/locallang_db.xml:crawler_crawl.name',
            'description'      => 'LLL:EXT:' . $extKey . '/locallang_db.xml:crawler_crawl.description',
            'additionalFields' => 'tx_crawler_scheduler_crawlAdditionalFieldProvider'
        );

        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['tx_crawler_scheduler_crawlMultiProcess'] = array(
            'extension'        => $extKey,
            'title'            => 'LLL:EXT:' . $extKey . '/locallang_db.xml:crawler_crawlMultiProcess.name',
            'description'      => 'LLL:EXT:' . $extKey . '/locallang_db.xml:crawler_crawl.description',
            'additionalFields' => 'tx_crawler_scheduler_crawlMultiProcessAdditionalFieldProvider'
        );

        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['tx_crawler_scheduler_flush'] = array(
            'extension'        => $extKey,
            'title'            => 'LLL:EXT:' . $extKey . '/locallang_db.xml:crawler_flush.name',
            'description'      => 'LLL:EXT:' . $extKey . '/locallang_db.xml:crawler_flush.description',
            'additionalFields' => 'tx_crawler_scheduler_flushAdditionalFieldProvider'
        );
    
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['AOE\Crawler\Tasks\ProcessCleanupTask'] = array(
            'extension'        => $extKey,
            'title'            => 'LLL:EXT:' . $extKey . '/locallang_db.xml:crawler_processCleanup.name',
            'description'      => 'LLL:EXT:' . $extKey . '/locallang_db.xml:crawler_processCleanup.description',
        );
    }
}