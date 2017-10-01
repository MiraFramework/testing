<?php

namespace Mira\Testing;

trait ModelTesting
{
    // public function __construct($model)
    // {
    //     $this->model = new $model;
    // }

    public function testDatabaseConnection()
    {
        $this->assertEquals(isset($this->model), true);
    }

    public function testModelAll()
    {
        $this->assertTrue(is_array($this->model->all()));
    }

    public function testReturnsJson()
    {
        json_decode($this->model->json()->all());

        $this->assertEquals(json_last_error(), JSON_ERROR_NONE);
    }

    
    public function testCacheSeconds()
    {
        $cache = $this->model->cache(0)->seconds()->all();

        $this->assertTrue(is_array($cache));
    }

    public function testCacheMinutes()
    {
        $cache = $this->model->cache(0)->minutes()->all();

        $this->assertTrue(is_array($cache));
    }

    public function testCacheHours()
    {
        $cache = $this->model->cache(0)->hours()->all();

        $this->assertTrue(is_array($cache));
    }
    
    public function testCacheDays()
    {
        $cache = $this->model->cache(0)->days()->all();

        $this->assertTrue(is_array($cache));
    }

    public function testCacheMonths()
    {
        $cache = $this->model->cache(0)->months()->all();

        $this->assertTrue(is_array($cache));
    }

    public function testOrder()
    {
        $this->assertTrue(is_array($this->model->order('-id')->all()));
    }

    
    public function testsetDatabase()
    {
        $this->assertTrue($this->model->setDatabase('content'));
    }
}
