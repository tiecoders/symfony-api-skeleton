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

/**
 * TieCoders's Property
 *
 * (c) Ahmed HANNACHI <a.hannachi@tiecoders.com>
 *
 * Class ParamConvertible
 * @package App\DTO
 */
class ParamConvertible
{
    /**
     * @param array $params
     * @return void
     * @throws DtoConversionException
     */
    public function setParams(array $params)
    {
        foreach ($params as $name => $value) {
            if (!property_exists($this, $name)) {
                throw new DtoConversionException($name);
            }
            $this->$name = $value;
        }
    }
}