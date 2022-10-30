<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

      DB::table('blog_posts')->insert(
        [
            'title' => 'summy first ',
            'body' => 'tttttt first '
        ],[
            'title' => 'summy333 second',
            'body' => 'tttttt3333 second'
        ]
        );
        

    }
}
