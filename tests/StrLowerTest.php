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
 * StrLowerTest tests
 */
class StrLowerTest extends TestCase
{    
    public function testLower()
    {
        $this->assertSame('lorem ipsum', Str::lower('Lorem ipsum'));
    }
    
    public function testLowerWithNumbers()
    {
        $this->assertSame('2 cars', Str::lower('2 Cars'));
    }    
}