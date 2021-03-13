<?php

namespace Database\Seeders;

use App\Models\Subscriber;
use App\Models\Message;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    protected $subscribers = ['abimgatya@gmail.com', 'qodr.achidh@gmail.com'];
    protected $message = "default message";

    public function run()
    {
        foreach ($this->subscribers as $subscriber) {
            Subscriber::create([
                'email' => $subscriber
            ]);
        }

        Message::create([
            'message' => $this->message
        ]);
    }
}
