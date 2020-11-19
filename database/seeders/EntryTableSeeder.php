<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entries')->insert([
            'title' => 'JavaScript Basics',
            'created_at' => '2020-03-04 05:52',
            'hours' => 3,
            'minutes' => 17,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/javascript-basics'
        ]);
        DB::table('entries')->insert([
            'title' => 'JavaScript Numbers',
            'created_at' => '2020-03-09 10:47',
            'hours' => 0,
            'minutes' => 56,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/javascript-numbers'
        ]);
        DB::table('entries')->insert([
            'title' => 'JavaScript Functions',
            'created_at' => '2020-03-10 14:40',
            'hours' => 1,
            'minutes' => 19,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/javascript-functions'
        ]);
        DB::table('entries')->insert([
            'title' => 'The Landscape of JavaScript',
            'created_at' => '2020-03-11 11:07',
            'hours' => 0,
            'minutes' => 31,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/the-landscape-of-javascript'
        ]);
        DB::table('entries')->insert([
            'title' => 'JavaScript and the DOM',
            'created_at' => '2020-03-12 21:07',
            'hours' => 2,
            'minutes' => 58,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/javascript-and-the-dom-2'
        ]);
        DB::table('entries')->insert([
            'title' => 'JavaScript and the DOM',
            'created_at' => '2020-03-12 21:07',
            'hours' => 2,
            'minutes' => 58,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/javascript-and-the-dom-2'
        ]);
        DB::table('entries')->insert([
            'title' => 'AJAX Basics',
            'created_at' => '2020-03-13 11:14',
            'hours' => 1,
            'minutes' => 34,
            'category_id' => 8,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/ajax-basics-2'
        ]);
        DB::table('entries')->insert([
            'title' => 'Callback Functions in JavaScript',
            'created_at' => '2020-03-13 13:03',
            'hours' => 0,
            'minutes' => 50,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/callback-functions-in-javascript'
        ]);
        DB::table('entries')->insert([
            'title' => 'Introduction to HTML and CSS',
            'created_at' => '2020-03-13 16:27',
            'hours' => 1,
            'minutes' => 11,
            'category_id' => 6,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/introduction-to-html-and-css'
        ]);
        DB::table('entries')->insert([
            'title' => 'JavaScript Quickstart',
            'created_at' => '2020-03-13 19:02',
            'hours' => 0,
            'minutes' => 51,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/-javascript-quickstart'
        ]);
        DB::table('entries')->insert([
            'title' => 'DOM Scripting By Example',
            'created_at' => '2020-03-13 20:59',
            'hours' => 1,
            'minutes' => 55,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/dom-scripting-by-example'
        ]);
        DB::table('entries')->insert([
            'title' => 'Asynchronous Programming with JavaScript',
            'created_at' => '2020-03-14 11:01',
            'hours' => 1,
            'minutes' => 54,
            'category_id' => 8,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/asynchronous-programming-with-javascript'
        ]);
        DB::table('entries')->insert([
            'title' => 'Object-Oriented JavaScript',
            'created_at' => '2020-03-14 19:16',
            'hours' => 1,
            'minutes' => 15,
            'category_id' => 8,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/objectoriented-javascript-2'
        ]);
        DB::table('entries')->insert([
            'title' => 'HTTP Basics',
            'created_at' => '2020-03-15 02:45',
            'hours' => 1,
            'minutes' => 10,
            'category_id' => 5,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/http-basics'
        ]);
        DB::table('entries')->insert([
            'title' => 'Node.js Basics',
            'created_at' => '2020-03-16 10:28',
            'hours' => 1,
            'minutes' => 39,
            'category_id' => 8,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/nodejs-basics-2'
        ]);
        DB::table('entries')->insert([
            'title' => 'Build a Simple Dynamic Site with Node.js',
            'created_at' => '2020-03-16 13:21',
            'hours' => 2,
            'minutes' => 8,
            'category_id' => 8,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/build-a-simple-dynamic-site-with-nodejs'
        ]);
        DB::table('entries')->insert([
            'title' => 'Introduction to the Terminal',
            'created_at' => '2020-03-16 18:23',
            'hours' => 1,
            'minutes' => 21,
            'category_id' => 5,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/introduction-to-the-terminal'
        ]);
        DB::table('entries')->insert([
            'title' => 'Introduction to Git',
            'created_at' => '2020-03-16 23:26',
            'hours' => 1,
            'minutes' => 36,
            'category_id' => 5,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/introduction-to-git'
        ]);
        DB::table('entries')->insert([
            'title' => 'Git Branches and Merging',
            'created_at' => '2020-03-17 15:01',
            'hours' => 1,
            'minutes' => 43,
            'category_id' => 5,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/git-branches-and-merging'
        ]);
        DB::table('entries')->insert([
            'title' => 'Laravel Basics',
            'created_at' => '2020-10-01 20:59',
            'hours' => 1,
            'minutes' => 54,
            'category_id' => 9,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/laravel-basics-2'
        ]);
        DB::table('entries')->insert([
            'title' => 'Build a REST API with Laravel',
            'created_at' => '2020-10-03 20:37',
            'hours' => 2,
            'minutes' => 58,
            'category_id' => 9,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/build-a-rest-api-with-laravel'
        ]);
        DB::table('entries')->insert([
            'title' => 'Java Basics',
            'created_at' => '2020-10-06 16:41',
            'hours' => 1,
            'minutes' => 20,
            'category_id' => 7,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/java-basics'
        ]);
        DB::table('entries')->insert([
            'title' => 'Java Objects',
            'created_at' => '2020-10-07 17:25',
            'hours' => 4,
            'minutes' => 35,
            'category_id' => 7,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/java-objects-2'
        ]);
        DB::table('entries')->insert([
            'title' => 'Java Arrays',
            'created_at' => '2020-10-11 15:52',
            'hours' => 1,
            'minutes' => 35,
            'category_id' => 7,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/java-arrays'
        ]);
        DB::table('entries')->insert([
            'title' => 'Inheritance in Java',
            'created_at' => '2020-10-11 16:38',
            'hours' => 0,
            'minutes' => 43,
            'category_id' => 7,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/inheritance-in-java'
        ]);
        DB::table('entries')->insert([
            'title' => 'Interfaces in Java',
            'created_at' => '2020-10-11 17:26',
            'hours' => 0,
            'minutes' => 21,
            'category_id' => 7,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/interfaces-in-java'
        ]);
        DB::table('entries')->insert([
            'title' => 'Introducing IntelliJ and Unpacking Packages',
            'created_at' => '2020-10-11 17:55',
            'hours' => 0,
            'minutes' => 25,
            'category_id' => 7,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/introducing-intellij-and-unpacking-packages'
        ]);
        DB::table('entries')->insert([
            'title' => 'Generics in Java',
            'created_at' => '2020-10-12 16:53',
            'hours' => 0,
            'minutes' => 18,
            'category_id' => 7,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/generics-in-java'
        ]);
        DB::table('entries')->insert([
            'title' => 'Java Lists',
            'created_at' => '2020-10-12 17:10',
            'hours' => 0,
            'minutes' => 14,
            'category_id' => 7,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/java-lists'
        ]);
        DB::table('entries')->insert([
            'title' => 'Java Maps',
            'created_at' => '2020-10-12 17:23',
            'hours' => 0,
            'minutes' => 12,
            'category_id' => 7,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/java-maps'
        ]);
        DB::table('entries')->insert([
            'title' => 'JavaScript Loops',
            'created_at' => '2020-10-12 21:49',
            'hours' => 0,
            'minutes' => 53,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/javascript-loops'
        ]);
        DB::table('entries')->insert([
            'title' => 'JavaScript Arrays',
            'created_at' => '2020-10-13 17:59',
            'hours' => 1,
            'minutes' => 34,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/javascript-arrays'
        ]);
        DB::table('entries')->insert([
            'title' => 'JavaScript Objects',
            'created_at' => '2020-10-14 00:57',
            'hours' => 0,
            'minutes' => 51,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/javascript-objects-2'
        ]);
        DB::table('entries')->insert([
            'title' => 'Local Development Environments',
            'created_at' => '2020-10-18 23:53',
            'hours' => 2,
            'minutes' => 54,
            'category_id' => 7,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/local-development-environments'
        ]);
        DB::table('entries')->insert([
            'title' => 'Unit Testing in Java',
            'created_at' => '2020-10-31 11:36',
            'hours' => 2,
            'minutes' => 15,
            'category_id' => 7,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/unit-testing-in-java'
        ]);
        DB::table('entries')->insert([
            'title' => 'Introduction to Functional Programming',
            'created_at' => '2020-11-03 22:36',
            'hours' => 5,
            'minutes' => 28,
            'category_id' => 7,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/introduction-to-functional-programming'
        ]);
        DB::table('entries')->insert([
            'title' => 'Java Annotations',
            'created_at' => '2020-11-07 14:48',
            'hours' => 1,
            'minutes' => 46,
            'category_id' => 7,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/java-annotations'
        ]);
        DB::table('entries')->insert([
            'title' => 'JavaScript Array Iteration Methods',
            'created_at' => '2020-11-07 20:54',
            'hours' => 2,
            'minutes' => 35,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/javascript-array-iteration-methods'
        ]);
        DB::table('entries')->insert([
            'title' => 'GitHub Basics',
            'created_at' => '2020-11-08 03:59',
            'hours' => 1,
            'minutes' => 37,
            'category_id' => 5,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/github-basics'
        ]);
        DB::table('entries')->insert([
            'title' => 'Introduction to Regular Expressions',
            'created_at' => '2020-11-08 18:40',
            'hours' => 0,
            'minutes' => 47,
            'category_id' => 5,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/introduction-to-regular-expressions-2'
        ]);
        DB::table('entries')->insert([
            'title' => 'Introduction to REST APIs',
            'created_at' => '2020-11-08 19:10',
            'hours' => 0,
            'minutes' => 28,
            'category_id' => 5,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/introduction-to-rest-apis'
        ]);
        DB::table('entries')->insert([
            'title' => 'Markdown Basics',
            'created_at' => '2020-11-08 20:14',
            'hours' => 0,
            'minutes' => 57,
            'category_id' => 5,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/markdown-basics'
        ]);
        DB::table('entries')->insert([
            'title' => 'Scrum Basics',
            'created_at' => '2020-11-08 22:14',
            'hours' => 1,
            'minutes' => 5,
            'category_id' => 5,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/scrum-basics'
        ]);
        DB::table('entries')->insert([
            'title' => 'Introduction to Algorithms',
            'created_at' => '2020-11-09 01:14',
            'hours' => 2,
            'minutes' => 37,
            'category_id' => 2,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/introduction-to-algorithms'
        ]);
        DB::table('entries')->insert([
            'title' => 'Introduction to Data Structures',
            'created_at' => '2020-11-09 12:17',
            'hours' => 2,
            'minutes' => 28,
            'category_id' => 2,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/introduction-to-data-structures'
        ]);
        DB::table('entries')->insert([
            'title' => 'Algorithms: Sorting and Searching',
            'created_at' => '2020-11-09 21:24',
            'hours' => 1,
            'minutes' => 19,
            'category_id' => 2,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/algorithms-sorting-and-searching'
        ]);
        DB::table('entries')->insert([
            'title' => 'Accessibility For Web Developers',
            'created_at' => '2020-11-09 22:56',
            'hours' => 1,
            'minutes' => 21,
            'category_id' => 6,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/accessibility-for-web-developers'
        ]);
        DB::table('entries')->insert([
            'title' => 'Intro to Java Web Development with Spark',
            'created_at' => '2020-11-13 00:29',
            'hours' => 2,
            'minutes' => 48,
            'category_id' => 7,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/intro-to-java-web-development-with-spark'
        ]);
        DB::table('entries')->insert([
            'title' => 'Spring Basics',
            'created_at' => '2020-11-14 19:19',
            'hours' => 3,
            'minutes' => 40,
            'category_id' => 7,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/spring-basics'
        ]);
        DB::table('entries')->insert([
            'title' => 'SQL Basics',
            'created_at' => '2020-11-14 22:13',
            'hours' => 1,
            'minutes' => 38,
            'category_id' => 4,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/sql-basics'
        ]);
        DB::table('entries')->insert([
            'title' => 'Modifying Data with SQL',
            'created_at' => '2020-11-15 18:09',
            'hours' => 0,
            'minutes' => 46,
            'category_id' => 4,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/modifying-data-with-sql'
        ]);
        DB::table('entries')->insert([
            'title' => 'Hibernate Basics',
            'created_at' => '2020-11-16 23:43',
            'hours' => 2,
            'minutes' => 32,
            'category_id' => 7,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/hibernate-basics'
        ]);
        DB::table('entries')->insert([
            'title' => 'Spring with Hibernate',
            'created_at' => '2020-11-17 17:52',
            'hours' => 4,
            'minutes' => 22,
            'category_id' => 7,
            'difficulty' => 'Intermediate',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/spring-with-hibernate'
        ]);
        DB::table('entries')->insert([
            'title' => 'jQuery Basics',
            'created_at' => '2020-11-18 1:58',
            'hours' => 3,
            'minutes' => 25,
            'category_id' => 8,
            'difficulty' => 'Beginner',
            'comments' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo ac felis vitae luctus. Etiam et felis et erat tempus interdum non ut nunc. Ut euismod, eros sit amet pulvinar luctus, nisi nisi fringilla diam, id pellentesque elit mauris ac massa. Mauris id velit aliquam, commodo velit a, placerat quam. Sed bibendum ante quis pulvinar eleifend. Sed a risus in lectus imperdiet laoreet. Vivamus vel laoreet ligula, commodo rutrum nunc. Quisque posuere augue massa, ac volutpat quam gravida sed. Pellentesque iaculis blandit diam convallis vulputate. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus massa est, varius id rhoncus at, sollicitudin nec magna. Aliquam pretium nibh mauris, nec viverra ex sollicitudin vitae. Vestibulum a malesuada nunc. Duis eget dui venenatis quam tincidunt facilisis in interdum lacus.',
            'url' => 'https://teamtreehouse.com/library/jquery-basics-2'
        ]);
    }
}
