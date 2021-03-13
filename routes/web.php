<?php

use App\Models\Subscriber;
use App\Models\Message;
use App\Jobs\SendEmail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    $subscribers = Subscriber::cursor();
    $message = Message::value('message');

    return view('welcome', compact('subscribers', 'message'));
});

Route::post('/send-broadcast', function(Request $request) {
    Message::find(1)->update([
        'message' => $request->message
    ]);

    $subscribers = new SendEmail($request->subscribers);
    dispatch($subscribers);

    return back();
});
