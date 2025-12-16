<?php

declare(strict_types=1);

namespace OpaqueDesignWalterKruml\Obsthuegelland\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Returns an array of non-empty lines from a string (split by \r\n / \n / \r).
 *
 * Usage:
 *   {namespace nl=OpaqueDesignWalterKruml\Obsthuegelland\ViewHelpers}
 *   <f:for each="{nl:splitLines(value: data.bodytext)}" as="item">...</f:for>
 */
final class SplitLinesViewHelper extends AbstractViewHelper
{
    public function initializeArguments(): void
    {
        $this->registerArgument('value', 'string', 'String to split', true);
        $this->registerArgument('trim', 'bool', 'Trim each line', false, true);
        $this->registerArgument('removeEmpty', 'bool', 'Remove empty lines', false, true);
    }

    /**
     * @return array<int, string>
     */
    public function render(): array
    {
        $value = (string)$this->arguments['value'];
        $trim = (bool)$this->arguments['trim'];
        $removeEmpty = (bool)$this->arguments['removeEmpty'];

        if ($value === '') {
            return [];
        }

        $lines = preg_split('/\R/u', $value) ?: [];
        $result = [];

        foreach ($lines as $line) {
            $line = (string)$line;
            if ($trim) {
                $line = trim($line);
            }
            if ($removeEmpty && $line === '') {
                continue;
            }
            $result[] = $line;
        }

        return $result;
    }
}
