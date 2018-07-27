<?php

namespace App;

use Illuminate\Auth\DatabaseUserProvider;
use Illuminate\Contracts\Auth\Authenticatable as ApiAuth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class ApiUser extends Model implements ApiAuth
{
    //
//    use Authenticatable;

    protected $rememberTokenName = 'remember_token';

    protected $table = "users";

    public function getKeyName()
    {
        return parent::getKeyName(); // TODO: Change the autogenerated stub
    }

    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifier() method.

        return $this->getKeyName();
    }

    public function getAuthIdentifier()
    {
        //
        return $this->{$this->getAuthIdentifierName()};
    }

    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
        return $this->{$this->getRememberTokenName()};
    }

    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
        if (! empty($this->getRememberTokenName())) {
            return (string) $this->{$this->getRememberTokenName()};
        }
    }

    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
        if (! empty($this->getRememberTokenName())) {
            $this->{$this->getRememberTokenName()} = $value;
        }

    }

    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
        return $this->rememberTokenName;
    }


}