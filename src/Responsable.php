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

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Responsable interface.
 */
interface Responsable
{
    /**
     * To Response
     *
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */    
    public function toResponse(ServerRequestInterface $request): ResponseInterface;    
}