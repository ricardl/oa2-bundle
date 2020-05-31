<?php

declare(strict_types=1);

namespace Trikoder\Bundle\OAuth2Bundle\League\Entity;

use League\OAuth2\Server\Entities\AccessTokenEntityInterface;
use League\OAuth2\Server\Entities\Traits\EntityTrait;
use League\OAuth2\Server\Entities\Traits\TokenEntityTrait;
use Trikoder\Bundle\OAuth2Bundle\League\Entity\Traits\AccessTokenTrait;
use Trikoder\Bundle\OAuth2Bundle\League\Entity\Traits\CustomClaimTrait;

final class AccessToken implements AccessTokenEntityInterface, CustomClaimInterface
{
    use AccessTokenTrait;
    use CustomClaimTrait;
    use EntityTrait;
    use TokenEntityTrait;
}
