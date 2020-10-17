<?php

namespace Schema;

use BaseTestCase;
use Deprecator\LaravelMysqlSpatial\MysqlConnection;
use Deprecator\LaravelMysqlSpatial\Schema\Blueprint;
use Deprecator\LaravelMysqlSpatial\Schema\Builder;
use Mockery;

class BuilderTest extends BaseTestCase
{
    public function testReturnsCorrectBlueprint()
    {
        $connection = Mockery::mock(MysqlConnection::class);
        $connection->shouldReceive('getSchemaGrammar')->once()->andReturn(null);

        $mock = Mockery::mock(Builder::class, [$connection]);
        $mock->makePartial()->shouldAllowMockingProtectedMethods();
        $blueprint = $mock->createBlueprint('test', function () {
        });

        $this->assertInstanceOf(Blueprint::class, $blueprint);
    }
}
