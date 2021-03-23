<?php

namespace Modules\Core\Http\Controllers\Api;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Modules\Core\Exceptions\NotImplementedException;
use Modules\Core\Services\BaseServiceInterface;
use Modules\Core\Traits\CustomResponseStructure;
use Modules\Core\Traits\RestApiActionMethods;

abstract class BaseApiController extends Controller
{
    use DispatchesJobs, ValidatesRequests;
    use CustomResponseStructure;
    use RestApiActionMethods;

    /**
     * @param BaseServiceInterface $service
     * @param string $dtoClass
     * @throws NotImplementedException
     */
    public function __construct(BaseServiceInterface $service, string $dtoClass)
    {
        if (!isset($service)) {
            throw new NotImplementedException('You should inject service interface into your controller.');
        }

        $this->service = $service;
        $this->dtoClass = $dtoClass;
    }

}
