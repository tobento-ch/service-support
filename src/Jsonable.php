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
 * Jsonable interface
 */
interface Jsonable
{
    /**
     * Object to json
     *
     * @param int $options
     * @return string
     */    
    public function toJson(int $options = 0): string;    
}