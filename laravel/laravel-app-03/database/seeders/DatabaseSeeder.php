<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        DB::table('conversation_user')->truncate();
        DB::table('conversations')->truncate();
        DB::table('messages')->truncate();
        DB::table('users')->truncate();

        Schema::enableForeignKeyConstraints();

        // #1
        $users = User::factory(10)->create();

        // #2
        $conversation = Conversation::factory(5)->create([
            'created_by' => fn() => $users->random()->id,
        ]);

        // #3
        $conversation->each(function ($conversation) use ($users) {
            // chọn ngẫu nhiên từ 2 -> 5 users tham gia vô conversation
            $conversation->users()
                ->attach($users->random(rand(2, 5))
                    ->pluck('id')->toArray());
        });

        // #4
        $conversation->each(function ($conversation) use ($users) {
            Message::factory(rand(5, 15))->create([
                'conversation_id' => $conversation->id,
                'user_id' => $conversation->$users->random()->id,
            ]);
        });
    }
}
