<?php declare(strict_types=1);

namespace App\Users\Adapters\Http\Responses;

class DataResponse{
    static function fromData(array $data): array{
        return [
            'data' => $data
        ];
    }
}