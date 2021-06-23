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

namespace Tobento\Service\Support;

/**
 * Renderable interface
 */
interface Renderable
{
    /**
     * Get the evaluated contents of the object.
     *
     * @return string
     */    
    public function render(): string;    
}