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

namespace App\DTO\Security;

use App\DTO\ParamConvertible;

/**
 * TieCoders's Property
 *
 * (c) Ahmed HANNACHI <a.hannachi@tiecoders.com>
 *
 * Class SignUpDTO
 * @package App\DTO\Security
 */
class SignUpDTO extends ParamConvertible
{
    protected $email;
    protected $username;
    protected $password;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
}