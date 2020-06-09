<?php

declare(strict_types=1);

namespace Trikoder\Bundle\OAuth2Bundle\Manager;

use Trikoder\Bundle\OAuth2Bundle\Model\UserEntity;

interface UserManagerInterface
{
    public function findOneByUsername(string $username): ?UserEntity;
}
