<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'title' => 'Man must explore, and this is exploration at its greatest',
            'subtitle' => 'Problems look mighty small from 150 miles up',
            'content' => '<p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman\'s earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>
<p>Science cuts two ways, of course; its products can be used for both good and evil. But there\'s no turning back from science. The early warnings about technological dangers also come from science.</p>
<p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>',
            'image' => 'https://il8.picdn.net/shutterstock/videos/6961699/thumb/1.jpg',
            'category' => 'Travel',
            'tags' => 'Nature, Space, Awesome',
            'user' => 'ThemeAxe'
        ]);
    }
}
