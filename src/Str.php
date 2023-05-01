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

use Stringable;

/**
 * String helper methods
 */
class Str
{
    /**
     * The cache of snake cased words.
     *
     * @var array
     */
    protected static array $snakeCache = [];

    /**
     * Escapes string with htmlspecialchars.
     * 
     * @param string|Stringable $string
     * @param int $flags
     * @param string $encoding
     * @param bool $double_encode
     * @return string
     */
    public static function esc(
        string|Stringable $string,
        int $flags = ENT_QUOTES,
        string $encoding = 'UTF-8',
        bool $double_encode = true
    ): string {
        if ($string instanceof Stringable) {
            $string = $string->__toString();
        }
        
        return htmlspecialchars($string, $flags, $encoding, $double_encode);
    }
    
    /**
     * Convert the given string to lower case.
     *
     * @param string $value
     * @return string
     */
    public static function lower(string $value): string
    {
        return mb_strtolower($value, 'UTF-8');
    }
    
    /**
     * Convert a string to snake case.
     *
     * @param string $value
     * @param string $delimiter
     * @return string
     */
    public static function snake(string $value, string $delimiter = '_'): string
    {
        $key = $value;

        if (isset(static::$snakeCache[$key][$delimiter]))
        {
            return static::$snakeCache[$key][$delimiter];
        }

        if (! ctype_lower($value))
        {
            $value = preg_replace('/\s+/u', '', ucwords($value));

            $value = static::lower(preg_replace('/(.)(?=[A-Z0-9])/u', '$1'.$delimiter, $value));
        }

        return static::$snakeCache[$key][$delimiter] = $value;
    }

    /**
     * Convert a string to a slug.
     *
     * @param string $value
     * @return string $separator
     */
    public static function slug(string $value, string $separator = '-'): string
    {
        $from = explode(',', "ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,Ä,ë,ï,ö,Ö,ü,Ü,ÿ,â,ê,î,ô,û,å,e,i,ø,u,(,),[,],'");
        $to = explode(',', 'c,ae,oe,a,e,i,o,u,a,e,i,o,u,ae,ae,e,i,oe,oe,ue,ue,y,a,e,i,o,u,a,e,i,o,u,,,,,,');
        // do the replacements, and convert all other non-alphanumeric characters to spaces
        $value = preg_replace('~[^\w\d-]+~', $separator, str_replace($from, $to, trim($value)));
        return static::lower(trim($value, $separator));       
    }
}