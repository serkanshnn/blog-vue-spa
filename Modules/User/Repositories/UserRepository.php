<?php

namespace Modules\User\Repositories;

use App\Models\User;
use Modules\Core\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(User::class);
    }
}
