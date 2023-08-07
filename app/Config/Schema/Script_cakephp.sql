-- TABELA CATEGORIAS(generos)
drop table films
drop table genres

CREATE TABLE genres (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);

-- INSERE CATEGORIAS
INSERT INTO genres (name, created)
    VALUES ('Action', NOW()),
    		('Adventure', NOW()),
    		('Comedy', NOW()),
    		('Drama', NOW()),
			('Fantasy', NOW()),
			('Horror', NOW()),
			('Musicals', NOW()),
			('Mystery', NOW()),
			('Romance', NOW()),
			('Science Fiction', NOW()),
			('Sports', NOW()),
			('Thriller', NOW());

      
-- TABELA FILMES
CREATE TABLE films (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50),
    genre_id INT,
    poster VARCHAR(50),
    synopsis TEXT,
    director VARCHAR(50),
    starring VARCHAR(50),
    writers VARCHAR(50),
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL
);

-- INSERE FILMES
INSERT INTO films (title, genre_id, poster, synopsis, director, starring, writers, created)
    VALUES ('Texas Chainsaw Massacre', 6, 'TEXAS_CHAINSAW_MASSACRE_240x360.jpg',
    									'Five friends head out to rural Texas to
										 visit the grave of a grandfather.
										 On the way they stumble across 
										 appears to be a deserted house, 
										only to discover something sinister
										 within. Something armed with a chainsaw.',
										 'Tobe Hooper','Marilyn Burns, Edwin Neal, Allen Danziger',
										 'Kim Henkel, Tobe Hooper', NOW()),
			('Psycho', 6, 'PSYCHO_240x360.jpg',
    									'A Phoenix secretary embezzles $40,000 from
										 her employers client, goes on the run and checks 
										into a remote motel run by a young man under
										 the domination of his mother.',
										 'Alfred Hitchcock','Anthony Perkins, Janet Leigh, Vera Miles',
										 'Joseph Stefano, Robert Bloch', NOW()),
			('Nightmare on Elm Street', 6, 'NIGHTMARE_ON_ELM_STREET_240x360.jpg',
    									'Teenager Nancy Thompson must uncover the dark
										 truth concealed by her parents after she and her 
										friends become targets of the spirit of a serial killer
										 with a bladed glove in their dreams, in which if they die,
										 it kills them in real life',
										 'Wes Craven','Heather Langenkamp, Johnny Depp, Robert Englund',
										 'Wes Craven', NOW()),
			('Friday the 13th', 6, 'FRIDAY_THE_13TH_240x360.jpg',
    									'A group of camp counselors trying to reopen a summer
										 camp called Crystal Lake, which has a grim past,
										 are stalked by a mysterious killer.',
										 'Sean S. Cunningham','Betsy Palmer, Adrienne King, Jeannine Taylor',
										 'Victor Miller, Ron Kurz', NOW()),
   			('Army Of Darkness', 6, 'ARMY_OF_DARKNESS_240x360.jpg',
    									'A sardonic hardware store clerk is accidentally
										 transported to 1300 A.D., where he must retrieve 
										the Necronomicon and battle an army of the dead so he can return home.',
										 'Sam Raimi','Bruce Campbell, Embeth Davidtz, Marcus Gilbert',
										 'Sam Raimi, Ivan Raimi', NOW()),
   			('Breakfast Club', 3, 'BREAKFAST_CLUB_500x749.jpg',
    									'Five high school students meet in Saturday detention and
										 discover how they have a great deal more in common than they thought.',
										 'John Hughes','Emilio Estevez, Judd Nelson, Molly Ringwald',
										 'John Hughes', NOW()),
   			('Ice Age: Continental Drift', 3, 'ICE_AGE_4_500x749.jpg',
    									'Manny, Diego, and Sid embark upon another adventure after 
										their continent is set adrift. Using an iceberg as a ship, 
										they encounter sea creatures and battle pirates as they explore a new world.',
										'Steve Martino, Michael Thurmeier','Ray Romano, Denis Leary, John Leguizamo',
										 'Michael Berg, Jason Fuchs, Lori Forte', NOW()),
   			('Rocky', 4, 'ROCKY_500x749.jpg',
    									'A small-time Philadelphia boxer gets a supremely rare chance
										 to fight the world heavyweight champion in a bout in which he 
										strives to go the distance for his self-respect.',
										'John G. Avildsen','Sylvester Stallone, Talia Shire, Burt Young',
										 'Sylvester Stallone', NOW()),
   			('Die Hard', 1, 'DIE_HARD_500x749.jpg',
    									'A New York City police officer tries to save his estranged wife
										 and several others taken hostage by terrorists during a 
										Christmas party at the Nakatomi Plaza in Los Angeles.',
										 'John McTiernan','Bruce Willis, Alan Rickman, Bonnie Bedelia',
										 'Roderick Thorp, Jeb Stuart, Steven E. de Souza', NOW()),
   			('E.T. The Extra-Terrestrial', 2, 'ET_500x749.jpg',
    									'A troubled child summons the courage to help a friendly alien 
										escape from Earth and return to his home planet.',
										 'Steven Spielberg','Henry Thomas, Drew Barrymore, Peter Coyote',
										 'Melissa Mathison', NOW()),
   			('Dirty Dancing', 9, 'DIRTY_DANCE_500x749.jpg',
    									'Spending the summer at a Catskills resort with her family,
											Frances "Baby" Houseman falls in love with the camps
											 dance instructor, Johnny Castle.',
										 'Emile Ardolino','Patrick Swayze, Jennifer Grey, Jerry Orbach',
										 'Eleanor Bergstein', NOW()),
   			('Karate Kid', 2, 'KARATE_KID_500x749.jpg',
    									'A martial arts master agrees to teach karate to a bullied teenager.',
										 'John G. Avildsen','Ralph Macchio, Pat Morita, Elisabeth Shue',
										 'Robert Mark Kamen', NOW()),
			('Ghostbusters', 2, 'GHOSTBUSTERS_500x749.jpg',
    									'Three parapsychologists forced out of their university 
										funding set up shop as a unique ghost removal 
										service in New York City, attracting frightened yet skeptical customers.',
										 'Ivan Reitman','Bill Murray, Dan Aykroyd, Sigourney Weaver',
										 'Dan Aykroyd, Harold Ramis, Rick Moranis', NOW()),							 
			('Top Gun', 1, 'TOP_GUN_500x749.jpg',
    									'As students at the United States Navys elite fighter weapons school 
										compete to be best in the class, one daring young pilot learns a 
										few things from a civilian instructor that are not taught in the classroom.',
										 'Tony Scott','Tom Cruise, Tim Robbins, Kelly McGillis',
										 'Jim Cash, Jack Epps Jr., Ehud Yonay', NOW()),								 
			('Halloween', 6, 'HALLOWEEN_500x749.jpg',
    									'Fifteen years after murdering his sister on Halloween night 1963, 
										Michael Myers escapes from a mental hospital and returns to the 
										small town of Haddonfield, Illinois to kill again.',
										 'John Carpenter','Donald Pleasence, Jamie Lee Curtis, Tony Moran',
										 'John Carpenter, Debra Hill', NOW()),							 
			('Avengers: Endgame', 1, 'AVENGERS_ENDGAME_500x749.jpg',
    									'After the devastating events of Avengers: Infinity War (2018), 
										the universe is in ruins. With the help of remaining allies, 
										the Avengers assemble once more in order to reverse Thanos
										actions and restore balance to the universe.',
										 'Anthony Russo, Joe Russo','Robert Downey Jr., Chris Evans, Mark Ruffalo',
										 'Christopher Markus, Stephen McFeely, Stan Lee', NOW()),							 
			('Friday', 3, 'FRIDAY_500x749.jpg',
    									'Its Friday, and Craig and Smokey must come up with $200 they owe a 
										local bully or there wont be a Saturday.',
										 'F. Gary Gray','Ice Cube, Chris Tucker, Nia Long',
										 'Ice Cube, DJ Pooh', NOW()),							 
			('Godfather', 4, 'GODFATHER_500x749.jpg',
    									'Don Vito Corleone, head of a mafia family, decides to hand over
										 his empire to his youngest son Michael. However, his decision 
										unintentionally puts the lives of his loved ones in grave danger.',
										 'Francis Ford Coppola','Marlon Brando, Al Pacino, James Caan',
										 'Mario Puzo, Francis Ford Coppola', NOW()),							 
			('Thing', 3, 'THE_THING_500x749.jpg',
    									'A research team in Antarctica is hunted by a shape-shifting 
										alien that assumes the appearance of its victims.',
										 'John Carpenter','Kurt Russell, Wilford Brimley, Keith David',
										 'Bill Lancaster, John W. Campbell Jr.', NOW()),							 
			('Goodfellas', 4, 'GODFELLAS_500x749.jpg',
    									'The story of Henry Hill and his life in the mafia, covering 
										his relationship with his wife Karen and his mob partners 
										Jimmy Conway and Tommy DeVito.',
										 'Martin Scorsese','Robert De Niro, Ray Liotta, Joe Pesci',
										 'Nicholas Pileggi, Martin Scorsese', NOW()),								 
			('Scream', 3, 'SCREAM_500x749.jpg',
    									'A year after the murder of her mother, a teenage girl is terrorized
										 by a masked killer who targets her and her friends by using 
										scary movies as part of a deadly game.',
										 'Wes Craven','Neve Campbell, Courteney Cox, David Arquette',
										 'Kevin Williamson', NOW()),							 
			('Indiana Jones - Raiders of the Lost Ark', 2, 'INDIANA_JONES_RAIDERS_OF_THE_LOST_ARK_500x749.jpg',
    									'In 1936, archaeologist and adventurer Indiana Jones is hired 
										by the U.S. government to find the Ark of the
 										Covenant before the Nazis can obtain its awesome powers.',
										 'Steven Spielberg','Harrison Ford, Karen Allen, Paul Freeman',
										 'Lawrence Kasdan, George Lucas, Philip Kaufman', NOW()),									 
			('Scarface', 4, 'SCARFACE_500x749.jpg',
    									'In 1980 Miami, a determined Cuban immigrant takes over 
											a drug cartel and succumbs to greed.',
										 'Brian De Palma','Al Pacino, Michelle Pfeiffer, Steven Bauer',
										 'Oliver Stone, Howard Hawks, Ben Hecht', NOW()),							 
			('Jurassic Park', 2, 'JURASSIC_PARK_500x749.jpg',
    									'A pragmatic paleontologist touring an almost complete 
											theme park on an island in Central America is tasked with
 											protecting a couple of kids after a power 
											failure causes the parks cloned dinosaurs to run loose.',
										 'Steven Spielberg','Sam Neill, Laura Dern, Jeff Goldblum',
										 'Michael Crichton, David Koepp', NOW()),							 
	 	 	('Star Wars', 2, 'STAR_WARS_500x749.jpg',
    									'Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, 
										a Wookiee and two droids to save the galaxy from the Empires 
										world-destroying battle station, while also attempting to rescue 
										Princess Leia from the mysterious Darth Vader',
										 'George Lucas','Mark Hamill, Harrison Ford, Carrie Fisher',
										 'George Lucas', NOW()),
			('Pulp Fiction', 1, 'PULP_FICTION_500x749.jpg',
    									'The lives of two mob hitmen, a boxer, a gangster and his wife,
 										and a pair of diner bandits intertwine in four tales
										 of violence and redemption.',
										 'Quentin Tarantino','John Travolta, Uma Thurman, Samuel L. Jackson',
										 'Quentin Tarantino, Roger Avary', NOW()),				
			('Spider-Man: Into the Spider-Verse', 2, 'INTO_THE_SPIDERVERSE_500x749.jpg',
    									'Teen Miles Morales becomes the Spider-Man of his universe and must 
											join with five spider-powered individuals from
 											other dimensions to stop a threat for all realities.',
										 'Bob Persichetti, Peter Ramsey, Rodney Rothman', 'Shameik Moore, Jake Johnson, Hailee Steinfeld',
										 'Phil Lord, Rodney Rothman', NOW()),
   			('Back to the Future', 2, 'BACK_TO_THE_FUTURE_500x749.jpg',
    									'Marty McFly, a 17-year-old high school student, is accidentally sent 30 years
 										into the past in a time-traveling DeLorean invented
										by his close friend, the maverick scientist Doc Brown',
										 'Robert Zemeckis', 'Michael J. Fox, Christopher Lloyd, Lea Thompson',
										 'Robert Zemeckis, Bob Gale', NOW());
										
										
										
	select * from films 
   