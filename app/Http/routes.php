<?php

use App\Jobs\MemeJob;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('lol', function (Request $request) {
    $text = $request->get('text');

    if (!$text) {
        throw new BadRequestHttpException('No meme text provided!');
    }

    if (preg_match('/^[a-z0-9 .\-]+$/i', $text) !== 1) {
        throw new BadRequestHttpException('Invalid meme text provided!');
    }

    if (strlen($text) > 128) {
        throw new BadRequestHttpException('Meme text too long!');
    }

    $task = str_random(16);

    dispatch(new MemeJob($task, $text));

    return new JsonResponse([
        'success' => ['message' => 'Memes are to follow!'],
        'data'    => ['task' => $task],
    ], 202);
});
