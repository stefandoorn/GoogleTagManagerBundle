<?php
/*
 * This file is part of the GoogleTagManagerBundle project
 *
 * (c) Philipp Braeutigam <philipp.braeutigam@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xynnn\GoogleTagManagerBundle\Helper;

use Symfony\Component\Templating\Helper\Helper;
use Xynnn\GoogleTagManagerBundle\Service\GoogleTagManagerInterface;

/**
 * Class GoogleTagManagerHelper
 *
 * @package Xynnn\GoogleTagManagerBundle\Helper
 */
class GoogleTagManagerHelper extends Helper
{
    /** @var GoogleTagManagerInterface $service */
    private $service;

    /**
     * @return GoogleTagManagerInterface
     */
    private function getService()
    {
        return $this->service;
    }

    /**
     * @param GoogleTagManagerInterface $service
     */
    public function __construct(GoogleTagManagerInterface $service)
    {
        $this->service = $service;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        $service = $this->getService();

        return $service->isEnabled();
    }

    /**
     * @return string
     */
    public function getId()
    {
        $service = $this->getService();

        return $service->getId();
    }

    /**
     * @return array
     */
    public function getData()
    {
        $service = $this->getService();

        return $service->getData();
    }

    /**
     * @return bool
     */
    public function hasData()
    {
        return is_array($this->getData())
            && count($this->getData()) > 0;
    }

    public function getName()
    {
        return 'google_tag_manager';
    }
}
