<?php

use Illuminate\Database\Seeder;
use App\BlogPost;

class BlogPostsSeeder extends Seeder
{
    public function run()
    {
        $postsArray = [
            [
                'week' => 1,
                'post' => ['Question 1 ', '  Answer 1 ', 'Shred chicken into bit-sized pieces. ', '  Place chicken thighs in a 9x13 pan. Sprinkle with powdered ginger and paprika. Pour in coconut aminos. ', 'Place broccoli in a steamer basket in a large pot of boiling water; steam for 5-10 min until crisp-tender. ', '  Simmer rice in 4 C water for 20 min. ', '  Serve broccoli and chicken in bowls over rice; add more coconut aminos as desired.'],
            ],
            [
                'week' => 3,
                'post' => ['Preheat the oven to 325°', 'Mix melted butter with almond flour. Press into pie dish and bake at 325° for 15 min. or until golden brown. Let cool.', 'Beat eggs in a large bowl; add remaining ingredients. Bake at 350° for 45 min.']
            ]
        ];
        // Direction::create($directionsArray[0]);
        foreach ($postsArray as &$PostsObj) {
            foreach ($PostsObj['post'] as &Post) {
                Post::create([
                    'week' => $PostsObj['week'],
                    'post' => $Post
                ]);
            }
        }
    }
}


foreach ($PostsObj['answer'] as &$Answer) {
    Post::create([
        'answer' => $PostsObj['answer']
        ]);
    }
}
}
}

$blogPostArray = [
[
'week' => 'Pre-work Week 1'],
'question' => ['First question'],
'answer' => ['Answer 1']
],
[
'week' => 'Pre-work Week 2'],
'question' => ['First question'],
'answer' => ['Answer 1']
],
[
'week' => 'Pre-work Week 3'],
'question' => ['First question'],
'answer' => ['Answer 1']
]
];

// foreach ($blogPostArray as &$blogPostsObj) {


foreach($blogPostArray as &$BlogPost) {
BlogPost::create($BlogPost);
}
// foreach ($blogPostsObj['answer'] as &$Answer) {
//     BlogPost::create([
//         'answer' => $Answer
//         ]);
// }
// }
}
