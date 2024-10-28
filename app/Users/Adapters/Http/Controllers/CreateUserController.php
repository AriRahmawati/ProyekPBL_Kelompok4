<?php declare(strict_types=1);

namespace App\Users\Adapters\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Users\Adapters\Http\Responses\DataResponse;
use Symfony\Component\HttpFoundation\Response;
class CreateUserController extends Controller{
    public function __invoke($email)
    {
        return response()->json(DataResponse::fromData([
                'email' => $email
            ]),Response::HTTP_CREATED);
    }
}