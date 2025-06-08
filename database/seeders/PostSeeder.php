<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        if ($categories->isEmpty()) {
            $this->command->warn('First you need to load categories.');
            return;
        }

        Post::create([
            'title' => "NEVER ENOUGH",
            'content' => "GLOW ON walked so NEVER ENOUGH could run.
You can feel the foundation laid by its predecessor, but here they push the limits even further. It’s a more experimental album, with a more prominent use of synthesizers and electronic elements.
Just because there are very calm and ethereal sections doesn’t mean the band’s signature neo hardcore punk is missing, there are plenty of mosh pit-worthy moments.
The transitions between songs are also flawless, making it a very easy album to listen to from start to finish.
I think the only weak spot is MAGIC MAN, which felt like a pretty underwhelming closer for such a strong record.
Despite its chaos and the apparent disorganization in terms of sound variety, it’s a very balanced and energetic album.",
            'artist' => "Turnstile",
            'poster'=> 'turnstile-never-enough.png',
            'category_id' => 1,
            'rating' => 4.5,
        ]);

        Post::create([
            'title' => "White Pony",
            'content' => "With this album, they locked in the sound I love. It’s their magnum opus.
It’s way more melodic, dark and gloomy, with touches of trip-hop and shoegaze, moving away from the straight-up nu metal. Still, there are some throwbacks to the Around the Fur vibe with Elite and Korea.
To me, Deftones' best songs are on this album. 
Pink Maggit is an amazing track, but I’m glad they were asked to make Back to School as a single, it’s a 10/10.",
            'artist' => "Deftones",
            'poster'=> 'deftones-white-pony.jpg',
            'category_id' => 2,
            'rating' => 4.5,
        ]);

        Post::create([
            'title' => "Twin Fantasy",
            'content' => "I don’t know how it took me so long to listen to this gem, it’s been on my list for years. It’s spectacular: very intimate, personal, and emotional. The lyrics are brilliant; the way it tells the story of a relationship is beautiful. Even Stop Smoking, which is simpler and feels like an interlude, is a really lovely track. At times it left me on the floor, maybe it’s because I’m in a mood that matches the album.
Instrumentally, it’s flawless, everything is so well produced, and I loved Will’s voice.
The way Beach Life-In-Death is divided into chapters is genius, it made the song feel much shorter. That goes for several tracks on the album: they’re long, but so well-paced they don’t feel that way.
I’m not really a fan of monologues or spoken sections, so I’m taking off a few points, but it’s still a solid 9.8.",
            'artist' => "Car Seat Headrest",
            'poster'=> 'car-seat-headrest-twin-fantasy.jpg',
            'category_id' => 6,
            'rating' => 4.5,
        ]);

        Post::create([
            'title' => "Even In Arcadia",
            'content' => 'I have to admit, it really threw me off on the first listen. I didn’t know what to expect from this album, but it definitely wasn’t this. Still, I didn’t want to stick with that first impression, so I gave it another three or four listens, and now I can say it’s a truly beautiful, deep, and emotional album.
There’s a much stronger presence of R&B and rap elements here, both in the beats and in Vessel’s vocal delivery. I even noticed hints of gospel and a very Polyphia-like section in Gethsemane. Everything is super groovy, a gorgeous blend of genres that, as always, Sleep Token manages flawlessly.
Unlike their previous works, I liked some tracks more than others, but none of them felt out of place. In fact, the ones that didn’t fully convince me at first eventually won me over with repeated listens.
It’s not an album for everyone. I think for some people, it’ll just be a “meh” record, but for others, it’ll be really great. For me, it’s definitely the latter, eventhough it’s their weakest album.
I’m genuinely happy to be living at the same time as this band, they made me fall in love with music all over again.',
            'artist' => "Sleep Token",
            'poster'=> 'sleep-token-even-in-arcadia.jpg',
            'category_id' => 2,
            'rating' => 4.5,
        ]);

        Post::create([
            'title' => "FUCK U SKRILLEX YOU THINK UR ANDY WARHOL BUT UR NOT!! <3",
            'content' => 'This is crazy, I had flashbacks of listening to Skrillex in 2012. This album is really cool, a great mix of old and new. The concept of making it feel like a set rather than a regular album is super interesting. It makes sense that he dropped it as a surprise, since it’s kind of hard to release a single from this when the tracks are short and you pretty much have to listen to the whole thing in one go.',
            'artist' => "Skrillex",
            'poster'=> 'skrillex-fuck-u-skrillex.jpg',
            'category_id' => 4,
            'rating' => 4,
        ]);

        Post::create([
            'title' => "Lonely People With Power",
            'content' => 'Deafheaven did it again, another incredible album. I wasn’t expecting anything close to Infinite Granite, but it leans more into black metal than I anticipated, and I loved it. They still keep those shoegaze and “pop” elements within the genre, making this band truly unique. Their sound has never felt more polished than on this album.
Fifteen seconds into Doberman, and I already had goosebumps. What they do is just stunning, and I think they’re the only band that can make me tear up playing something this intense. The contrast between the sheer brutality of the drums, George’s screams, and the almost ethereal guitars is a beauty more people should appreciate.
Another album that proves Deafheaven is on a whole other level. Long live blackgaze.',
            'artist' => "Deafheaven",
            'poster'=> 'deafheaven-lonely-people.jpg',
            'category_id' => 3,
            'rating' => 4,
        ]);

        Post::create([
            'title' => "Fantastic Planet",
            'content' => 'I’d tried listening to this album a couple of times before and never made it past the fourth track, but this time I finally got into it. Amazing space rock/grunge album that handles transitions between songs really well, giving it a sense of continuity that makes the whole thing easier to digest. The way the last three tracks are connected is spectacular, it really elevates the final stretch. And the way the last and first tracks blend together makes the whole thing feel like a loop.
Another Space Song was the first Failure track I heard a few years ago, and to this day it still blows my mind. It perfectly captures that feeling of being absolutely alone on a desolate planet. It’s easily in my top 5 songs of all time.
My only critique is the album’s length. I feel like I would’ve enjoyed it even more without a couple of tracks, maybe even cutting the instrumentals. Still, it’s a great listening experience.',
            'artist' => "Failure",
            'poster'=> 'failure-fantastic-planet.jpg',
            'category_id' => 1,
            'rating' => 4,
        ]);

        Post::create([
            'title' => "MAYHEM",
            'content' => 'I had been meaning to listen to a Gaga album for years, and starting with this one was definitely not the right choice.
I had heard Disease and Abracadabra when they were released and loved them. I thought I was in for an amazing album, especially since they were the first two tracks. But from the third track onward, it takes a drastic turn and ends up as a rather unbalanced mix of pretty generic songs. None of them really stood out to me except for the two singles, and I wouldn’t count Die With A Smile because it feels out of place, especially knowing it was released earlier while waiting for the new album.
I like the ‘80s? and club inspired vibe in some tracks with the synths, but overall, it’s a pretty mediocre album, something I wasn’t expecting from Gaga, considering she’s an incredible artist with the ability to put out absolute bangers.
I could listen to it passively, but if I had to pick a pop album, this wouldn’t be one I’d go back to.',
            'artist' => "Lady Gaga",
            'poster'=> 'lady-gaga-mayhem.png',
            'category_id' => 3,
            'rating' => 3,
        ]);

        Post::create([
            'title' => "CASIOPEA",
            'content' => 'Probably this album will be my entry point to jazz and its subgenres. It’s really entertaining, at times I felt like I was in a Sega game, other times escaping in an episode of Cowboy Bebop. The way all the instruments sound is incredible, but the bass, at times, is insane.
Maybe if I listen to this while working, I won’t have such a shitty time.',
            'artist' => "Casiopea",
            'poster'=> 'casiopea-casiopea.jpg',
            'category_id' => 7,
            'rating' => 4.5,
        ]);

        Post::create([
            'title' => "Trumpeting Ecstasy",
            'content' => 'SHIIIT, I ended up like the nun on the cover, everything’s disgusting. 23 minutes of deathgrind/sludge metal that crushes your head and leaves your brains scattered all over the floor.
Grind isn’t a subgenre I’m into much, but this is spectacular, it lasts just the right amount of time. The choice of track order seemed excellent, some songs blend into each other for a continuous bombardment, while others have an intro that gives your brain a little break. The mix of growls and shrieks is also really well done, it makes everything feel more hellish.
This is meant to be listened to from start to finish, not just picking out isolated tracks.',
            'artist' => "Full Of Hell",
            'poster'=> 'full-of-hell-trumpeting-ecstasy.jpg',
            'category_id' => 2,
            'rating' => 4.5,
        ]);

        Post::create([
            'title' => "The Secret of Us",
            'content' => 'I saved this album because it was listed as one of the most popular of 2024 and jeez, why.
It’s not a bad album, it’s just boring (which I think is worse). Every song sounds the same, with a very Lorde/Taylor Swift vibe, and the vocal effects get tiring by the second track. There are a few interesting instrumental moments, but they’re just a few seconds here and there. I wouldn’t even leave it playing in the background.',
            'artist' => "Gracie Abrams",
            'poster'=> 'gracie-abrams-the-secret-of-us.png',
            'category_id' => 3,
            'rating' => 2,
        ]);

        Post::create([
            'title' => "Power, Corruption and Lies",
            'content' => 'Nice synth-pop album. I like the contrast between the music and the lyrics in the more upbeat tracks, and how the slower, more serious songs still fit well. On the downside, I wasn’t too convinced by the singer’s voice, and a couple of tracks felt just okay to me.',
            'artist' => "New Order",
            'poster'=> 'new-order-power-corruption-and-lies.png',
            'category_id' => 3,
            'rating' => 4,
        ]);

        Post::create([
            'title' => "EUSEXUA",
            'content' => 'I had no idea what to expect, and this completely caught me off guard. The album is really interesting in terms of its production, but it took me a while to click with it and start enjoying it. It wasn’t until Perfect Strangers that I really got into it.
Twigs’ voice is spectacular and fits perfectly with the electro-pop/techno vibe of some tracks. I really liked how certain songs built up from a mellow start, like Sticky and Keep It, Hold It. I’m not giving it 4 stars because some tracks felt kind of meh, maybe they’ll grow on me later.
North West’s Japanese verse in Childlike Things might be one of the worst things I’ve ever heard.',
            'artist' => "FKA Twigs",
            'poster'=> 'fka-twigs-eusexua.png',
            'category_id' => 3,
            'rating' => 3.5,
        ]);

        Post::create([
            'title' => "The New Sound",
            'content' => 'This album is super interesting. Instrumentally, it sounds amazing—it’s a fusion of many genres that, at times, blows your mind, but other times it gave me a headache from how chaotic it got. That said, I really admire the ability to create something like this; it’s absolutely wild.
I had forgotten Geordie was the singer from Black Midi, that’s one of my problems. Even though his singing style kind of fits the vibe of the album, I really don’t like his voice. Like I said in my review of Hellfire, he reminds me of Lin-Manuel Miranda (who I can’t stand). With a different singer, I probably would’ve liked this a bit more.',
            'artist' => "Geordie Greep",
            'poster'=> 'geordie-greep-the-new-sound.png',
            'category_id' => 1,
            'rating' => 3.5,
        ]);

        Post::create([
            'title' => "Peripheral Vision",
            'content' => 'I listened to it once last year, and it didn’t seem like anything special, but I gave it another chance, and that’s when it clicked.
Beautiful indie/dream pop album. The instrumental work is great: reverb-filled guitars that perfectly complement the singer’s voice and simple riffs that create an atmosphere of calm and, in a way, happiness. This ends up wrapping around some deep lyrics that tell the story of a relationship, from start to finish, that no longer exists—and if you’ve been through it, you can totally relate.
It’s not a 5/5 for me just because a couple of tracks didn’t quite convince me, but I loved everything else.',
            'artist' => "Turnover",
            'poster'=> 'turnover-peripheral-vision.jpg',
            'category_id' => 6,
            'rating' => 4.5,
        ]);

        Post::create([
            'title' => "Negative Spaces",
            'content' => 'I had pretty high expectations for this album and honestly, I’m really happy with it. Poppy keeps solidifying her style and sounds amazing, this time with an album leaning more towards metal, but also packing hardcore elements that blow your ears out, pop rock, and a bit of electronic vibes. It’s fantastic.
12 tracks (and 3 interludes) flow so seamlessly that it flies by, and none of them felt weak to me.  
You can definitely feel Jordan Fish’s production and the influence of the features she’s done with other bands this year (the center’s falling out could easily be a Knocked Loose track).
I hope this is the step Poppy needed to fully establish herself in the scene, she’s deserved it for a while now.',
            'artist' => "Poppy",
            'poster'=> 'poppy-negative-spaces.png',
            'category_id' => 2,
            'rating' => 4.5,
        ]);

        Post::create([
            'title' => "Romance",
            'content' => 'I was surprised by the first 30 seconds—such a sharp shift from Skinty Fia. As for me, I’m loving it. I really dig how there’s a bit of everything—post-punk, indie, shoegaze, a little bit of rap. I also like that the singer’s voice really shines through on this album, with so much variety in the sounds. It gives him more space to show off.',
            'artist' => "Fontaines D.C.",
            'poster'=> 'fontaines-dc-romance.jpg',
            'category_id' => 1,
            'rating' => 4,
        ]);
    }
}
