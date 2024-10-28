<?php

namespace Tests\Unit\Adapters\Http\Responses;

use App\Users\Adapters\Http\Responses\DataResponse;
use PHPUnit\Framework\TestCase;

class DataResponseTest extends TestCase{
    /**
     * @test
     */
    public function shouldCreate(){
        $data = ['test' => 'test'];
        $dataResponse = DataResponse::fromData($data);
    }
}