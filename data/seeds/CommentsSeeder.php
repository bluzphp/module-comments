<?php

use Phinx\Seed\AbstractSeed;

class CommentsSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'content' => 'Run Method',
                'created' => date('Y-m-d H:i:s'),
                'userId' => 1,
                'postId' => 1
            ],
            [
                'content' => 'Write your database seeder using this method',
                'created' => date('Y-m-d H:i:s'),
                'userId' => 1,
                'postId' => 1
            ],
            [
                'content' => 'More information on writing seeders is available here',
                'created' => date('Y-m-d H:i:s'),
                'userId' => 1,
                'postId' => 1
            ]
        ];

        $pages = $this->table('comments');
        $pages->insert($data)
            ->save();
    }
}
