<?php
namespace Modules\User\Services;

use Modules\Core\Services\BaseService;
use Modules\User\DTO\UserDTO;
use Modules\User\Repositories\UserRepositoryInterface;

/**
 * Class UserService
 * @package Modules\User\Services
 */
class UserService extends BaseService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private UserRepositoryInterface $userRepository;

    /**
     * UserService constructor.
     * @param UserRepositoryInterface $repository
     */
    public function __construct(UserRepositoryInterface $repository)
    {
        parent::__construct($repository, UserDTO::class);
    }


}
