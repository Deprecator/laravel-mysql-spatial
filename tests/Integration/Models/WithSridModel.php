<?php

use Deprecator\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WithSridModel.
 *
 * @property int                                          id
 * @property \Deprecator\LaravelMysqlSpatial\Types\Point      location
 * @property \Deprecator\LaravelMysqlSpatial\Types\LineString line
 * @property \Deprecator\LaravelMysqlSpatial\Types\LineString shape
 */
class WithSridModel extends Model
{
    use SpatialTrait;

    protected $table = 'with_srid';

    protected $spatialFields = ['location', 'line'];

    public $timestamps = false;
}
