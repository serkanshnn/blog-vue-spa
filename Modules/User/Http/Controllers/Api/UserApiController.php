<?php

namespace Modules\User\Http\Controllers\Api;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Core\Http\Controllers\Api\BaseApiController;
use Modules\User\DTO\UserDTO;
use Modules\User\Services\UserServiceInterface;

class UserApiController extends BaseApiController
{
    public function __construct(UserServiceInterface $userService)
    {
        $this->service = $userService;
        $this->dtoClass = UserDTO::class;
    }
}
