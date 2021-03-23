<?php

namespace Modules\User\DTO;

use Modules\Core\DTO\BaseDTO;

/**
 * Class UserDTO
 */
class UserDTO extends BaseDTO
{

    /**
     * UserDTO constructor.
     * @param array $parameters
     * @param string $type
     */
    public function __construct(array $parameters = [], $type = self::class)
    {
        parent::__construct($parameters, $type);
    }

    /**
     * @var int
     */
    public int $id;

    /**
     * @param $dto
     * @param array $originalData
     * @return UserDTO
     */
    public function mapToDTO($dto, array $originalData): self
    {
        //you can make a change for each field on
        return $dto;
    }

    /**
     * @param array $parameters
     * @param bool $updateMode
     * @return array
     */
    public function validate(array $parameters, bool $updateMode)
    {
        return $this->validator($parameters, [
            //'title' => 'required|string'
        ]);
    }
}
