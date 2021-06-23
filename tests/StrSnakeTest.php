<?php

/**
 * TOBENTO
 *
 * @copyright   Tobias Strub, TOBENTO
 * @license     MIT License, see LICENSE file distributed with this source code.
 * @author      Tobias Strub
 * @link        https://www.tobento.ch
 */

declare(strict_types=1);

namespace Tobento\Service\Support\Test;

use PHPUnit\Framework\TestCase;
use Tobento\Service\Support\Str;

/**
 * StrSnakeTest tests
 */
class StrSnakeTest extends TestCase
{    
    public function testSnakeWithoutSpaces()
    {
        $this->assertSame('lorem_ipsum', Str::snake('LoremIpsum'));
    }
    
    public function testSnakeWithSpaces()
    {
        $this->assertSame('lorem_ipsum', Str::snake('Lorem Ipsum'));
        $this->assertSame('lorem_ipsum_foo_bar', Str::snake('Lorem Ipsum foo Bar'));
    }
    
    public function testSnakeWithNumber()
    {
        $this->assertSame('3_lorem_5_ipsum', Str::snake('3Lorem 5 Ipsum'));
    }

    public function testSnakeWithAnotherDelimiter()
    {
        $this->assertSame('lorem-ipsum', Str::snake('LoremIpsum', '-'));
    }
}