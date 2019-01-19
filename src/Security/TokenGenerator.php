<?php


namespace Security;


use Entity\User;

class TokenGenerator implements TokenGeneratorInterface
{
    const TOKEN_LIFE_TIME_IN_SECOND = 3600;

    public function generate(User $user): Token
    {
        return new Token(
            md5(uniqid(rand(), true)),
            $user,
            self::TOKEN_LIFE_TIME_IN_SECOND);
    }

}