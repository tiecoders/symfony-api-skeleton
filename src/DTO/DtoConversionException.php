<?php
/**
 * TieCoders's Property
 *
 * (c) Ahmed HANNACHI <a.hannachi@tiecoders.com>
 *
 * This file is part of the project-skeleton package.
 *
 * Created: 12/10/2019
 */

namespace App\DTO;

use Exception;
use Throwable;

/**
 * TieCoders's Property
 *
 * (c) Ahmed HANNACHI <a.hannachi@tiecoders.com>
 *
 * Class DtoConversionException
 * @package App\DTO
 */
class DtoConversionException extends Exception
{
    /**
     * @var string
     */
    public $message = "DTO_CONVERSION_UNMATCHED_ATTRIBUTE({attribute})";

    /**
     * DtoConversionException constructor.
     * @param string $attribute
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $attribute = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct(str_replace('{attribute}', $attribute, $this->message), $code, $previous);
    }
}