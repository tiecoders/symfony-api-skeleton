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

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/**
 * TieCoders's Property
 *
 * (c) Ahmed HANNACHI <a.hannachi@tiecoders.com>
 *
 * Class DtoConverter
 * @package App\DTO
 */
class DtoConverter implements ParamConverterInterface
{
    /**
     * Stores the object in the request.
     *
     * @param Request $request
     * @param ParamConverter $configuration Contains the name, class and options of the object
     *
     * @return True if the object has been successfully set, else false
     * @throws DtoConversionException
     */
    public function apply(Request $request, ParamConverter $configuration)
    {
        $name = $configuration->getName();
        $class = $configuration->getClass();
        $requestData = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new BadRequestHttpException();
        }
        /** @var ParamConvertible $object */
        $object = new $class();
        $object->setParams($requestData);
        $request->attributes->set($name, $object);
        return true;
    }
    /**
     * Checks if the object is supported.
     *
     * @param ParamConverter $configuration
     * @return bool True if the object is supported, else false
     */
    public function supports(ParamConverter $configuration)
    {
        $class = $configuration->getClass();
        return is_subclass_of($class, ParamConvertible::class);
    }
}