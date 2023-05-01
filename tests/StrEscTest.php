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
use Stringable;

/**
 * StrEscTest tests
 */
class StrEscTest extends TestCase
{
    public function testEsc()
    {
        $string = Str::esc(
            string: '<p>lorem</p>', // string|Stringable
            flags: ENT_QUOTES, // default
            encoding: 'UTF-8', // default
            double_encode: true // default
        );
        
        $this->assertSame('&lt;p&gt;lorem&lt;/p&gt;', $string);
    }
    
    public function testEscWithStringable()
    {
        $class = new class() implements Stringable {
            public function __toString(): string
            {
                return '<p>lorem</p>';
            }
        };
        
        $string = Str::esc(
            string: $class,
        );
        
        $this->assertSame('&lt;p&gt;lorem&lt;/p&gt;', $string);
    }
}