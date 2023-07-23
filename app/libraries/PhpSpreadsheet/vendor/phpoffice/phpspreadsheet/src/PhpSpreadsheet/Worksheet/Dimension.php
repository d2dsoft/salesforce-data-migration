<?php

/**
 * D2dSoft
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL v3.0) that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL: https://d2d-soft.com/license/AFL.txt
 *
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade this extension/plugin/module to newer version in the future.
 *
 * @author     D2dSoft Developers <developer@d2d-soft.com>
 * @copyright  Copyright (c) 2021 D2dSoft (https://d2d-soft.com)
 * @license    https://d2d-soft.com/license/AFL.txt
 */

namespace PhpOffice\PhpSpreadsheet\Worksheet;

use PhpOffice\PhpSpreadsheet\Exception as PhpSpreadsheetException;

abstract class Dimension
{
    /**
     * Visible?
     *
     * @var bool
     */
    private $visible = true;

    /**
     * Outline level.
     *
     * @var int
     */
    private $outlineLevel = 0;

    /**
     * Collapsed.
     *
     * @var bool
     */
    private $collapsed = false;

    /**
     * Index to cellXf. Null value means row has no explicit cellXf format.
     *
     * @var null|int
     */
    private $xfIndex;

    /**
     * Create a new Dimension.
     *
     * @param int $initialValue Numeric row index
     */
    public function __construct($initialValue = null)
    {
        // set dimension as unformatted by default
        $this->xfIndex = $initialValue;
    }

    /**
     * Get Visible.
     */
    public function getVisible(): bool
    {
        return $this->visible;
    }

    /**
     * Set Visible.
     *
     * @return $this
     */
    public function setVisible(bool $visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get Outline Level.
     */
    public function getOutlineLevel(): int
    {
        return $this->outlineLevel;
    }

    /**
     * Set Outline Level.
     * Value must be between 0 and 7.
     *
     * @return $this
     */
    public function setOutlineLevel(int $level)
    {
        if ($level < 0 || $level > 7) {
            throw new PhpSpreadsheetException('Outline level must range between 0 and 7.');
        }

        $this->outlineLevel = $level;

        return $this;
    }

    /**
     * Get Collapsed.
     */
    public function getCollapsed(): bool
    {
        return $this->collapsed;
    }

    /**
     * Set Collapsed.
     *
     * @return $this
     */
    public function setCollapsed(bool $collapsed)
    {
        $this->collapsed = $collapsed;

        return $this;
    }

    /**
     * Get index to cellXf.
     *
     * @return int
     */
    public function getXfIndex(): ?int
    {
        return $this->xfIndex;
    }

    /**
     * Set index to cellXf.
     *
     * @return $this
     */
    public function setXfIndex(int $XfIndex)
    {
        $this->xfIndex = $XfIndex;

        return $this;
    }
}