<?php

namespace SimpleSquid\Vend\Resources\TwoDotZero;

use Carbon\Carbon;
use SimpleSquid\Vend\Resources\CastsDates;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Brand
 *
 * @package SimpleSquid\Vend\Resources\TwoDotZero
 */
class Brand extends DataTransferObject
{
    use CastsDates;

    /**
     * Deletion timestamp in UTC.
     *
     * @var Carbon|null
     */
    public $deleted_at;

    /**
     * Auto-generated object ID.
     *
     * @var string|null
     */
    public $id;

    /**
     * The brand name.
     *
     * @var string
     */
    public $name;

    /**
     * Auto-incrementing object version number.
     *
     * @var int|null
     */
    public $version;

}
