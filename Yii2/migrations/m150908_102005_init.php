<?php

use yii\db\Migration;
use yii\db\Schema;

class m150908_102005_init extends Migration
{
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'name' => $this->string(50)->notNull(),
            'slug' => $this->string(50)->notNull(),
            'post_count' => $this->string(50)->notNull()
        ]);

        $this->createTable('comments', [
            'id' => Schema::TYPE_PK,
            'post_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'mail' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'created' => Schema::TYPE_DATETIME . ' NOT NULL',
        ]);

        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer(10)->notNull(),
            'user_id' => $this->integer(10)->notNull(),
            'name' => $this->string(255)->notNull(),
            'slug' => $this->string(255)->notNull(),
            'content' => $this->text()->notNull(),
            'created' => $this->dateTime()->notNull()
        ]);

         $this->createTable('users', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . ' not null',
            'password' => Schema::TYPE_STRING . ' not null',
         ]);

        $this->insert('categories', [
            'id' => 1,
            'name' => 'Category #1',
            'slug' => 'category-1',
            'post_count' => 2
        ]);

        $this->insert('categories', [
            'id' => 2,
            'name' => 'Category #2',
            'slug' => 'category-2',
            'post_count' => 2
        ]);

        $this->insert('categories', [
            'id' => 3,
            'name' => 'Category #3',
            'slug' => 'category-3',
            'post_count' => 2
        ]);

        $this->insert('users', [
            'username' => 'admin',
            'password' => '$2y$13$XdKHJYjp.QG2tkBZvtO/YO2jsetw1CyC1nQRLNCgn9rqJ0dceY6MK',
        ]);

        $this->insert('posts', [
            'id' => 1,
            'category_id' => 1,
            'user_id' => 1,
            'name' => 'Space Pilot 3000',
            'slug' => 'space-pilot-3000',
            'content' => 'I don\'t want to be rescued. So I really am important? How I feel when I\'m drunk is correct? Leela\'s gonna kill me. It\'s a T. It goes "tuh". File not found. She also liked to shut up!\r\n\r\n## The Why of Fry\r\n\r\nI love this planet! I\'ve got wealth, fame, and access to the depths of sleaze that those things bring. You won\'t have time for sleeping, soldier, not with all the bed making you\'ll be doing. Alright, let\'s mafia things up a bit. Joey, burn down the ship. Clamps, burn down the crew.\r\n\r\n*   So I really am important? How I feel when I\'m drunk is correct?\r\n*   No! The cat shelter\'s on to me.\r\n*   No, she\'ll probably make me do it.\r\n\r\n### My Three Suns\r\n\r\nOK, this has gotta stop. I\'m going to remind Fry of his humanity the way only a woman can. Why yes! Thanks for noticing. Now, now. Perfectly symmetrical violence never solved anything.\r\n\r\n#### A Clockwork Origin\r\n\r\nYou can see how I lived before I met you. Can we have Bender Burgers again? I guess because my parents keep telling me to be more ladylike. As though! Hey! I\'m a porno-dealing monster, what do I care what you think? You know, I was God once.\r\n\r\n1.  You lived before you met me?!\r\n2.  They\'re like sex, except I\'m having them!\r\n3.  You, a bobsleder!? That I\'d like to see!\r\n\r\n##### Leela\'s Homeworld\r\n\r\nYep, I remember. They came in last at the Olympics, then retired to promote alcoholic beverages! Large bet on myself in round one. Actually, that\'s still true. Ask her how her day was. In your time, yes, but nowadays shut up! Besides, these are adult stemcells, harvested from perfectly healthy adults whom I killed for their stemcells. Why not indeed!',
            'created' => '2013-09-22 18:00:00'
        ]);

        $this->insert('posts', [
            'id' => 2,
            'category_id' => 2,
            'user_id' => 1,
            'name' => 'Rebirth',
            'slug' => 'rebirth',
            'content' => 'Yep, I remember. They came in last at the Olympics, then retired to promote alcoholic beverages! You know, I was God once. That could be \'my\' beautiful soul sitting naked on a couch. If I could just learn to play this stupid thing. Okay, I like a challenge. I barely knew Philip, but as a clergyman I have no problem telling his most intimate friends all about him.\r\n\r\n## I, Roommate\r\n\r\nNow, now. Perfectly symmetrical violence never solved anything. With a warning label this big, you know they gotta be fun! I\'m Santa Claus!\r\n\r\n*   You guys realize you live in a sewer, right?\r\n*   Okay, I like a challenge.\r\n*   Robot 1-X, save my friends!  And Zoidberg!\r\n\r\n### Love and Rocket\r\n\r\nCan we have Bender Burgers again? This is the worst part. The calm before the battle. For one beautiful night I knew what it was like to be a grandmother. Subjugated, yet honored. You\'ll have all the Slurm you can drink when you\'re partying with Slurms McKenzie!\r\n\r\n#### War Is the H-Word\r\n\r\nYou know the worst thing about being a slave? They make you work, but they don\'t pay you or let you go. Ooh, name it after me! Kids don\'t turn rotten just from watching TV. You guys aren\'t Santa! You\'re not even robots. How dare you lie in front of Jesus?\r\n\r\n1.  Why yes! Thanks for noticing.\r\n2.  You guys aren\'t Santa! You\'re not even robots. How dare you lie in front of Jesus?\r\n3.  There\'s no part of that sentence I didn\'t like!\r\n4.  I had more, but you go ahead.\r\n5.  Bender, we\'re trying our best.\r\n\r\n##### Anthology of Interest II\r\n\r\nGoodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort of cruel muslin and the cute little pom-pom curtain pull cords. Cruel though they may be&hellip; It must be wonderful. Leela, are you alright? You got wanged on the head.',
            'created' => '2013-09-22 16:49:55'
        ]);

        $this->insert('posts', [
            'id' => 3,
            'category_id' => 3,
            'user_id' => 1,
            'name' => 'Future Stock',
            'slug' => 'future-stock',
            'content' => 'You, a bobsleder!? That I\'d like to see! I barely knew Philip, but as a clergyman I have no problem telling his most intimate friends all about him. Robot 1-X, save my friends!  And Zoidberg! You know the worst thing about being a slave? They make you work, but they don\'t pay you or let you go. OK, this has gotta stop. I\'m going to remind Fry of his humanity the way only a woman can. Good news, everyone! There\'s a report on TV with some very bad news!\r\n\r\n## Roswell That Ends Well\r\n\r\nWhy yes! Thanks for noticing. For the last time, I don\'t like lilacs!  Your \'first\' wife was the one who liked lilacs! We\'ll go deliver this crate like professionals, and then we\'ll go home.\r\n\r\n*   Why yes! Thanks for noticing.\r\n*   That\'s the ONLY thing about being a slave.\r\n*   OK, this has gotta stop. I\'m going to remind Fry of his humanity the way only a woman can.\r\n*   It must be wonderful.\r\n\r\n### A Tale of Two Santas\r\n\r\nThis is the worst part. The calm before the battle. There\'s no part of that sentence I didn\'t like! Ask her how her day was.\r\n\r\n#### Bendless Love\r\n\r\nYour best is an idiot! Oh dear! She\'s stuck in an infinite loop, and he\'s an idiot! Well, that\'s love for you. I\'m sure those windmills will keep them cool. I had more, but you go ahead. Fry! Stay back! He\'s too powerful! No, she\'ll probably make me do it.\r\n\r\n1.  I barely knew Philip, but as a clergyman I have no problem telling his most intimate friends all about him.\r\n2.  Kif might!\r\n3.  I barely knew Philip, but as a clergyman I have no problem telling his most intimate friends all about him.\r\n4.  Goodbye, cruel world. Goodbye, cruel lamp. Goodbye, cruel velvet drapes, lined with what would appear to be some sort of cruel muslin and the cute little pom-pom curtain pull cords. Cruel though they may be&hellip;\r\n\r\n##### The Series Has Landed\r\n\r\nOoh, name it after me! In your time, yes, but nowadays shut up! Besides, these are adult stemcells, harvested from perfectly healthy adults whom I killed for their stemcells. No, of course not. It was&hellip; uh&hellip; porno. Yeah, that\'s it. So I really am important? How I feel when I\'m drunk is correct? I suppose I could part with \'one\' and still be feared&hellip; Well I\'da done better, but it\'s plum hard pleading a case while awaiting trial for that there incompetence.',
            'created' => '2013-09-22 16:52:52'
        ]);

        $this->insert('posts', [
            'id' => 4,
            'category_id' => 1,
            'user_id' => 1,
            'name' => 'Parasites Lost',
            'slug' => 'parasites-lost',
            'content' => 'I love this planet! I\'ve got wealth, fame, and access to the depths of sleaze that those things bring. You, minion. Lift my arm. AFTER HIM! I don\'t want to be rescued. I had more, but you go ahead. I\'m Santa Claus! Hey! I\'m a porno-dealing monster, what do I care what you think?\r\n\r\n## The Deep South\r\n\r\nOh dear! She\'s stuck in an infinite loop, and he\'s an idiot! Well, that\'s love for you. I was having the most wonderful dream. Except you were there, and you were there, and you were there! File not found. Man, I\'m sore all over. I feel like I just went ten rounds with mighty Thor. But, like most politicians, he promised more than he could deliver. I guess because my parents keep telling me to be more ladylike. As though!\r\n\r\n*   They\'re like sex, except I\'m having them!\r\n*   You know, I was God once.\r\n*   Then we\'ll go with that data file!\r\n\r\n### Devil\'s Hands are Idle Playthings\r\n\r\nActually, that\'s still true. No, she\'ll probably make me do it. Oh, I always feared he might run off like this. Why, why, why didn\'t I break his legs? WINDMILLS DO NOT WORK THAT WAY! GOOD NIGHT! This is the worst part. The calm before the battle.\r\n\r\n#### The Deep South\r\n\r\nFor the last time, I don\'t like lilacs!  Your \'first\' wife was the one who liked lilacs! Pansy. You know, I was God once.\r\n\r\n1.  You, a bobsleder!? That I\'d like to see!\r\n2.  Well I\'da done better, but it\'s plum hard pleading a case while awaiting trial for that there incompetence.\r\n\r\n##### Bendin\' in the Wind\r\n\r\nI usually try to keep my sadness pent up inside where it can fester quietly as a mental illness. No, of course not. It was&hellip; uh&hellip; porno. Yeah, that\'s it. Your best is an idiot! There\'s no part of that sentence I didn\'t like! They\'re like sex, except I\'m having them! I had more, but you go ahead.',
            'created' => '2013-09-22 16:53:16'
        ]);

        $this->insert('posts', [
            'id' => 5,
            'category_id' => 2,
            'user_id' => 1,
            'name' => 'The Sting',
            'slug' => 'the-sting',
            'content' => 'Your best is an idiot! Can we have Bender Burgers again? That could be \'my\' beautiful soul sitting naked on a couch. If I could just learn to play this stupid thing. You guys realize you live in a sewer, right? Now that the, uh, garbage ball is in space, Doctor, perhaps you can help me with my sexual inhibitions? I love this planet! I\'ve got wealth, fame, and access to the depths of sleaze that those things bring.\r\n\r\n## Kif Gets Knocked Up A Notch\r\n\r\nLeela, are you alright? You got wanged on the head. Come, Comrade Bender! We must take to the streets! Man, I\'m sore all over. I feel like I just went ten rounds with mighty Thor.\r\n\r\n*   I love this planet! I\'ve got wealth, fame, and access to the depths of sleaze that those things bring.\r\n*   OK, this has gotta stop. I\'m going to remind Fry of his humanity the way only a woman can.\r\n\r\n### Anthology of Interest I\r\n\r\nWe\'re rescuing ya. I\'m sure those windmills will keep them cool. Oh dear! She\'s stuck in an infinite loop, and he\'s an idiot! Well, that\'s love for you. But I\'ve never been to the moon!\r\n\r\n#### Lrrreconcilable Ndndifferences\r\n\r\nWe\'ll go deliver this crate like professionals, and then we\'ll go home. You are the last hope of the universe. Fatal. No! The cat shelter\'s on to me. Fry! Stay back! He\'s too powerful! So I really am important? How I feel when I\'m drunk is correct?\r\n\r\n1.  I barely knew Philip, but as a clergyman I have no problem telling his most intimate friends all about him.\r\n2.  We can\'t compete with Mom! Her company is big and evil! Ours is small and neutral!\r\n3.  Hello, little man. I will destroy you!\r\n\r\n##### Bendless Love\r\n\r\nHello, little man. I will destroy you! Ooh, name it after me! Well I\'da done better, but it\'s plum hard pleading a case while awaiting trial for that there incompetence. You know, I was God once. You won\'t have time for sleeping, soldier, not with all the bed making you\'ll be doing. With a warning label this big, you know they gotta be fun!',
            'created' => '2013-09-23 16:54:57'
        ]);

        $this->insert('posts', [
            'id' => 6,
            'category_id' => 3,
            'user_id' => 1,
            'name' => 'The Route of All Evil',
            'slug' => 'the-route-of-all-evil',
            'content' => 'Five hours? Aw, man! Couldn\'t you just get me the death penalty? Daylight and everything. What\'s with you kids? Every other day it\'s food, food, food. Alright, I\'ll get you some stupid food.\r\n\r\n## Bendin\' in the Wind\r\n\r\n<img src="http://lorempicsum.com/futurama/200/150/1" class="img-thumbnail" style="float:left; margin-right:10px;">\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, modi, libero, earum, fugiat beatae ipsa quae accusamus eligendi minima eos sint consequuntur voluptate nihil inventore voluptatum? Possimus neque similique quam.\r\n\r\nNemo, aliquam non nulla corporis veritatis molestiae omnis nobis dolores dicta dolorum accusamus porro ipsum rem tempora maxime quisquam accusantium facilis saepe consequatur qui doloribus iusto distinctio perspiciatis modi voluptatum?\r\n\r\nIllum temporibus natus cumque recusandae non fugiat quisquam fuga repellendus. Quas, esse, a rem possimus vero sequi fugit non dolor corrupti in similique repudiandae excepturi quidem perspiciatis soluta amet qui?\r\n\r\n*   Fetal stemcells, aren\'t those controversial?\r\n*   Yes! In your face, Gandhi!\r\n*   The key to victory is discipline, and that means a well made bed. You will practice until you can make your bed in your sleep.\r\n\r\n### Why Must I Be a Crustacean in Love?\r\n\r\n<img src="http://lorempicsum.com/futurama/200/150/2" class="img-thumbnail" style="float:right; margin-left:10px;">\r\n\r\nWe\'re rescuing ya. I\'m Santa Claus! Have you ever tried just turning off the TV, sitting down with your children, and hitting them? Calculon is gonna kill us and it\'s all everybody else\'s fault! I just want to talk. It has nothing to do with mating. Fry, that doesn\'t make sense. Ummm&hellip;to eBay?\r\n\r\n#### Attack of the Killer App\r\n\r\nWhy would I want to know that? It\'s toe-tappingly tragic! You won\'t have time for sleeping, soldier, not with all the bed making you\'ll be doing. I\'ve got to find a way to escape the horrible ravages of youth. Suddenly, I\'m going to the bathroom like clockwork, every three hours. And those jerks at Social Security stopped sending me checks. Now \'I\'\' have to pay \'\'them\'! I was all of history\'s great robot actors - Acting Unit 0.8; Thespomat; David Duchovny! Five hours? Aw, man! Couldn\'t you just get me the death penalty?\r\n\r\n1.  But, like most politicians, he promised more than he could deliver.\r\n2.  Calculon is gonna kill us and it\'s all everybody else\'s fault!\r\n3.  Bender?! You stole the atom.\r\n\r\n##### A Tale of Two Santas\r\n\r\nKif might! I wish! It\'s a nickel. OK, this has gotta stop. I\'m going to remind Fry of his humanity the way only a woman can. Kif, I have mated with a woman. Inform the men. Look, everyone wants to be like Germany, but do we really have the pure strength of \'will\'?',
            'created' => '2013-09-23 16:54:57'
        ]);

        $this->insert('comments', [
            'id' => 1,
            'post_id' => 6,
            'username' => 'User #1',
            'mail' => 'contact@test.fr',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laudantium voluptatibus quae doloribus dolorem earum dicta quasi. Fugit, eligendi, voluptatibus corporis deleniti perferendis accusantium totam harum dolor ab veniam laudantium!',
            'created' => '2013-09-22 19:45:53'
        ]);

        $this->insert('comments', [
            'id' => 2,
            'post_id' => 6,
            'username' => 'User #2',
            'mail' => 'contact@wordpress.com',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laudantium voluptatibus quae doloribus dolorem earum dicta quasi. Fugit, eligendi, voluptatibus corporis deleniti perferendis accusantium totam harum dolor ab veniam laudantium!',
            'created' => '2013-09-22 19:46:11'
        ]);

        $this->insert('comments', [
            'id' => 3,
            'post_id' => 6,
            'username' => 'User #3',
            'mail' => 'contact@lol.fr',
            'content' => 'Hi ! \r\nThis is my first comment !',
            'created' => '2013-09-22 20:07:42'
        ]);


        $this->addForeignKey('fk_comments_posts', 'comments', 'post_id', 'posts', 'id', 'NO ACTION', 'NO ACTION');
        $this->addForeignKey('fk_posts_categories', 'posts', 'category_id', 'categories', 'id', 'NO ACTION', 'NO ACTION');
        $this->addForeignKey('fk_posts_users', 'posts', 'user_id', 'users', 'id', 'NO ACTION', 'NO ACTION');


    }

    public function safeDown()
    {
        echo "m150908_102005_init cannot be reverted.\n";

        return false;
    }
}
