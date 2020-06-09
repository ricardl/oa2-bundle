<?php

declare(strict_types=1);

namespace Trikoder\Bundle\OAuth2Bundle\Manager\Doctrine;

use Doctrine\ORM\EntityManagerInterface;
use Trikoder\Bundle\OAuth2Bundle\Manager\UserManagerInterface;
use Trikoder\Bundle\OAuth2Bundle\Model\UserEntity;

final class UserManager implements UserManagerInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param string $username
     * @return UserEntity|null
     * @throws NonUniqueResultException
     */
    public function findOneByUsername(string $username): ?UserEntity
    {
        return $this->entityManager->getRepository(UserEntity::class)
            ->createQueryBuilder('u')
            ->andWhere('u.username = :val')
            ->setParameter('val', $username)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
}
