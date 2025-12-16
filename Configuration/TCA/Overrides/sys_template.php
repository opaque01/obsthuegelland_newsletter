<?php

defined('TYPO3') or die();

call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'obsthuegelland_newsletter',
        'Configuration/TypoScript',
        'Obsthuegelland Newsletter (direct_mail, tables)'
    );
});
