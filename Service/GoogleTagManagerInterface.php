<?php
/*
 * This file is part of the GoogleTagManagerBundle project
 *
 * (c) Philipp Braeutigam <philipp.braeutigam@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xynnn\GoogleTagManagerBundle\Service;

/**
 * Interface GoogleTagManagerInterface
 *
 * @package Xynnn\GoogleTagManagerBundle\Service
 */
interface GoogleTagManagerInterface
{
    /**
     * @param $key
     * @param $value
     */
    public function addData($key, $value);

    /**
     * @return bool
     */
    public function isEnabled();

    /**
     * @return string
     */
    public function getId();

    /**
     * @return array
     */
    public function getData();

    /**
     * @return bool
     */
    public function hasData();
}
