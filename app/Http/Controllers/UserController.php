<?php namespace App\Http\Controllers;

use App\Infrastructure\Logging\Logger;

class UserController extends Controller
{
    /**
     * @var Logger
     */
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function index(Request $request)
    {
        $this
            ->logger
            ->debug('My awesome log!');

        return $request
            ->response()
            ->json([
                'code'    => 'OK',
                'message' => 'Hello World'
            ]);
    }
}