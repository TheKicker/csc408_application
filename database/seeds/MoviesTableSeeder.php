<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->delete();
        
        Movie::create(array(
            'title' => 'Toy Story',
            'rating' => 'G',
            'length' => 81,
            'description' => "A 1995 American computer-animated buddy adventure comedy film -- Taking place in a world where anthropomorphic toys come to life when humans aren\'t present, its plot focuses on the relationship between an old-fashioned pullstring cowboy doll named Woody and an astronaut action figure Buzz Lightyear as they evolve from rivals competing for the affections of their owner Andy to friends who work together to be reunited with him after being separated from him.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));
    
        Movie::create(array(
            'title' => 'Shawshank Redemption',
            'rating' => 'R',
            'length' => 142,
            'description' => "A 1994 American drama film written and directed by Frank Darabont, based on the 1982 Stephen King novella Rita Hayworth and Shawshank Redemption. It tells the story of banker Andy Dufresne (Tim Robbins), who is sentenced to life in Shawshank State Penitentiary for the murder of his wife and her lover, despite his claims of innocence. Over the following two decades, he befriends a fellow prisoner, contraband smuggler Ellis \"Red\" Redding (Morgan Freeman), and becomes instrumental in a money laundering operation led by the prison warden Samuel Norton (Bob Gunton). William Sadler, Clancy Brown, Gil Bellows, and James Whitmore appear in supporting roles.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));
    
        Movie::create(array(
            'title' => 'American Sniper',
            'rating' => 'PG',
            'length' => 132,
            'description' => "A 2014 movie loosely based on the memoir American Sniper: The Autobiography of the Most Lethal Sniper in U.S. Military History (2012) by Chris Kyle, with Scott McEwen and Jim DeFelice. The film follows the life of Kyle, who became the deadliest marksman in U.S. military history with 255 kills from four tours in the Iraq War, 160 of which were officially confirmed by the Department of Defense. While Kyle was celebrated for his military successes, his tours of duty took a heavy toll on his personal and family life.",
            'onDVD' => 1,
            'onBluRay' => 0,
        ));
    
        Movie::create(array(
            'title' => 'The Great Gatsby',
            'rating' => 'PG-13',
            'length' => 142,
            'description' => "A 2013 movie-remake that was inspired by the 1925 novel written by American author F. Scott Fitzgerald that follows a cast of characters living in the fictional towns of West Egg and East Egg on prosperous Long Island in the summer of 1922. The story primarily concerns the young and mysterious millionaire Jay Gatsby and his quixotic passion and obsession with the beautiful former debutante Daisy Buchanan.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));
    
        Movie::create(array(
            'title' => 'Tarzan',
            'rating' => 'G',
            'length' => 88,
            'description' => "A 1999 American animated adventure film produced by Walt Disney Feature Animation for Walt Disney Pictures. The story follows Tarzan\'s adventures, from his childhood being raised by apes in the jungle, to his eventual encounters with other humans and Western society.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'IT',
            'rating' => 'R',
            'length' => 135,
            'description' => "A 2017 movie-remake of the popular 1986 novel written by Stephen King.  The film is set in the summer of 1989 and tells the story of seven children in Derry, Maine, who are terrorized by the eponymous being, only to face their own personal demons in the process.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));
    
        Movie::create(array(
            'title' => 'Deadpool',
            'rating' => 'PG-13',
            'length' => 108,
            'description' => "A 2016 American superhero film based on the Marvel Comics character of the same name, distributed by 20th Century Fox. It is the eighth installment of the X-Men film series, and the first standalone Deadpool film. In the film, Wade Wilson hunts down the man who gave him mutant abilities, but also a scarred physical appearance, as the antihero Deadpool.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'October Baby',
            'rating' => 'G',
            'length' => 107,
            'description' => "A 2011 American Christian-themed drama film directed by Andrew Erwin and Jon Erwin and starring Rachel Hendrix in her film debut. It is the story of a woman named Hannah, who learns as a young adult that she survived a failed abortion attempt. She then embarks upon a road trip to understand the circumstances of her birth.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'Hunger Games',
            'rating' => 'PG-13',
            'length' => 142,
            'description' => "A 2012 American film directed by Gary Ross and based on Suzanne Collins’ 2008 novel of the same name. It is from the perspective of the voice of 16-year-old Katniss Everdeen, who lives in the future, post-apocalyptic nation of Panem in North America. The Capitol, a highly advanced metropolis, exercises political control over the rest of the nation. The Hunger Games is an annual event in which one boy and one girl aged 12–18 from each of the twelve districts surrounding the Capitol are selected by lottery to compete in a televised battle to the death.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'The Interview',
            'rating' => 'R',
            'length' => 112,
            'description' => "A 2014 American comedy film produced and directed by Seth Rogen and Evan Goldberg in their second directorial work, following This Is the End (2013).  The film stars Rogen and James Franco as journalists who set up an interview with North Korean leader Kim Jong-un (Randall Park), and are recruited by the CIA to assassinate him. ",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'The Godfather',
            'rating' => 'R',
            'length' => 177,
            'description' => "A 1972 film starring Marlon Brando and Al Pacino as the leaders of a fictional New York crime family -- the story spanning 1945 to 1955, chronicles the family under the patriarch Vito Corleone (Brando), focusing on the transformation of Michael Corleone (Pacino) from reluctant family outsider to ruthless mafia boss.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'Forrest Gump',
            'rating' => 'PG-13',
            'length' => 144,
            'description' => "A 1994 American romantic comedy-drama film based on the 1986 novel of the same name by Winston Groom. It was directed by Robert Zemeckis and written by Eric Roth, and stars Tom Hanks, Robin Wright, Gary Sinise, Mykelti Williamson, and Sally Field. The story depicts several decades in the life of Forrest Gump (Hanks), a slow-witted but kind-hearted man from Alabama who witnesses several defining historical events in the 20th century in the United States.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'Zootopia',
            'rating' => 'G',
            'length' => 108,
            'description' => "A 2016 animated film that details the unlikely partnership between a rabbit police officer and a red fox con artist, as they uncover a conspiracy involving the disappearance of savage predator inhabitants of a mammalian metropolis.  Starring the voices of Ginnifer Goodwin, Jason Bateman, Idris Elba, Jenny Slate, Nate Torrence, Bonnie Hunt, Don Lake, Tommy Chong, J. K. Simmons, Octavia Spencer, Alan Tudyk, and Shakira.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'The Italian Job',
            'rating' => 'PG-13',
            'length' => 110,
            'description' => "A 2003 American remake of the 1969 British film of the same name, and is about a team of thieves who plan to steal gold from a former associate who double-crossed them. Despite the shared title, the plot and characters of this film differ from those of its source material; Gray described the film as \"an homage to the original\".",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'ELF',
            'rating' => 'G',
            'length' => 97,
            'description' => "A 2003 American Christmas fantasy comedy film, directed by Jon Favreau and written by David Berenbaum. The story is about one of Santa\'s elves (Ferrell) who learns he is actually a human and goes to New York City to meet his biological father (Caan), spreading Christmas cheer in a world of cynics. Buddy grows up at the North Pole believing he is an elf, but due to his human size is unable to keep up with the other elves and demoted to the demeaning job of toy testing. When Buddy overhears that he is a human, Papa Elf explains that Buddy was born to Walter Hobbs and Susan Wells, and given up for adoption. Susan subsequently died and Walter, who now works for a children\'s book publisher at the Empire State Building in New York City, is unaware of Buddy\'s existence. Santa reveals, to Buddy\'s horror, that Walter is on the naughty list due to his selfishness, but suggests Buddy could help redeem him.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'Home Alone',
            'rating' => 'PG-13',
            'length' => 108,
            'description' => "A 1990 American Christmas comedy film written and produced by John Hughes and directed by Chris Columbus. The film stars Macaulay Culkin as Kevin McCallister, a boy who is mistakenly left behind when his family flies to Paris for their Christmas vacation. Kevin initially relishes being home alone, but is faced to contend with burglars. Kevin must rig the house with booby traps to protect his families honor and their property. Harry and Marv break in, spring the traps and suffer various injuries. While the duo pursues Kevin around the house, he calls the police and flees, luring the duo into a neighboring home which they previously broke into. Harry and Marv subdue him, but Marley sneaks in and knocks them unconscious with his shovel before they can harm Kevin.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'The Grinch',
            'rating' => 'G',
            'length' => 86,
            'description' => "A 2018 American 3D computer-animated Christmas comedy film produced by Illumination. Based on the 1957 Dr. Seuss book How the Grinch Stole Christmas! It follows the Grinch, a grouchy, solitary creature who attempts to put an end to Christmas by stealing Christmas-themed items from the homes of the nearby town Whoville on Christmas Eve.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'A Charlie Brown Christmas',
            'rating' => 'G',
            'length' => 25,
            'description' => "A 1965 animated television special based on the comic strip Peanuts, by Charles M. Schulz. In the special, lead character Charlie Brown finds himself depressed despite the onset of the cheerful holiday season. Lucy suggests he direct a neighborhood Christmas play, but his best efforts are ignored and mocked by his peers. After Linus tells Charlie Brown about the true meaning of Christmas, Charlie Brown cheers up, and the Peanuts gang unites to celebrate the Christmas season.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'The Office',
            'rating' => 'PG-13',
            'length' => 30,
            'description' => "A ficitional documentary style TV Show on NBC featuring the inner-workings of the Scranton PA branch of a mid-sized paper company called Dunder Mifflin. To simulate the look of an actual documentary, it was filmed in a single-camera setup, without a studio audience or a laugh track. The series debuted on NBC as a midseason replacement and aired 201 episodes over the course of its run. The Office initially featured Steve Carell, Rainn Wilson, John Krasinski, Jenna Fischer, and B. J. Novak as the main cast; the series experienced numerous changes to its ensemble cast during its run.  ",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'The Sons of Anarchy',
            'rating' => 'R',
            'length' => 60,
            'description' => "A ficitional action TV Show on FX centering on both the personal and family life of Jackson \"Jax\" Teller (Charlie Hunnam) and on SAMCRO (Sons of Anarchy Motorcycle Club, Redwood Original). SAMCRO is involved with gun-running in the western United States, and deals with rival gangs, politicians and the authorities. As vice president and later president of SAMCRO, Jax struggles to manage the club and the legacy of its founder, his late father John Teller. SAMCRO is said to resemble the Hells Angels Motorcycle Club.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

        Movie::create(array(
            'title' => 'Mad Men',
            'rating' => 'PG-13',
            'length' => 55,
            'description' => "A fictional business TV Show on AMC set primarily in the 1960s – initially at the fictional Sterling Cooper advertising agency on Madison Avenue in New York City; later at the newly created firm, Sterling Cooper Draper Pryce (later Sterling Cooper & Partners) – located near the Time-Life Building at 1271 Sixth Avenue. The plot focuses on the business of the agencies as well as the personal lives of the characters, regularly depicting the changing moods and social mores of the United States in the 1960s. The series begins in March 1960 and ends November 1970 by the conclusion of season seven. Don Draper (Jon Hamm) is the focus in the series, initially as the talented creative director at Sterling Cooper and later a founding partner at Sterling Cooper Draper Pryce, as are the people in his personal and professional lives.",
            'onDVD' => 1,
            'onBluRay' => 1,
        ));

    }
}
