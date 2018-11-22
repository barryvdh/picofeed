<?php

namespace PicoFeed\Parser;

use PHPUnit_Framework_TestCase;

class FeedTest extends PHPUnit_Framework_TestCase
{
    public function testLangRTL()
    {
        $item = new Feed;
        $item->language = 'fr_FR';
        $this->assertFalse($item->isRTL());

        $item->language = 'ur';
        $this->assertTrue($item->isRTL());

        $item->language = 'syr-**';
        $this->assertTrue($item->isRTL());

        $item->language = 'ru';
        $this->assertFalse($item->isRTL());
    }
}