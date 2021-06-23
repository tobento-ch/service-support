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
 * StrSlugTest tests
 */
class StrSlugTest extends TestCase
{    
    public function testSlugWithoutSpaces()
    {
        $this->assertSame('loremipsum', Str::slug('LoremIpsum'));
    }
    
    public function testSlugWithSpaces()
    {
        $this->assertSame('lorem-ipsum', Str::slug('Lorem Ipsum'));
    }

    public function testSlugWithSpecialchars()
    {
        $this->assertSame('lorem-ipsum', Str::slug('Lorem / Ipsum ?'));
    }    
}