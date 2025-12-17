<?php

declare(strict_types=1);

defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'obsthuegelland_newsletter',
    'Configuration/TypoScript',
    'Obsthuegelland Newsletter (direct_mail, tables)'
);
