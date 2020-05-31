<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsSeeder extends Seeder
{
    public function run()
    {
        $postsArray = [
            [
                'week' => 1,
                'question' => ['Was your first week what you expected?', 'week 1 question 2 ', 'week 1 question 3'],
                'answer' => [' week 1 Answer 1 ', 'week 1 answer 2 ', 'week 1 answer 3']
            ],
            [
                'week' => 2,
                'question' => ['week 2 question 1', 'week 2 question 2', 'week 2 question 3'],
                'answer' => ['week 2 answer 1', 'week 2 answer 2', 'week 2 answer 3']
            ]
        ];
        // foreach($postsArray as &$Post) {
        //    Post::create($Post);

        foreach ($postsArray as &$PostsObj) {
            $i = 0;
            foreach ($PostsObj['question'] as &$Question) {
          
                    Post::create([
                        'week' => $PostsObj['week'],
                        'question' => $Question,
                        'answer' => $PostsObj['answer'][$i]
                    ]);
                    $i++;
                
            }
        }
    }
}
