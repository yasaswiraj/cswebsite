window.onload = function(
var qa = new Map();

// Questions to be asked, followed by the response to be given.
qa.set('What is your favourite movie?', 'On to my watchlist it goes! My favourite is Tron : Legacy.');

qa.set('If you could choose any person from history to be your imaginary friend, who would it be?', 'Interesting person indeed! Personally, I would love to hang out with my inspiration, Alan Turing.');

qa.set('What is your favourite song?', 'Must be a great tune! I keep jamming to Stayin\' Alive by The Bee Gees.');

qa.set('You can have an unlimited supply of one thing for the rest of your life, what is it?', 'Brilliant priorities! I\'d personally want an unlimited supply of games!');

qa.set('If you could choose any person from history to be your imaginary friend, who would it be and why?', 'I\'d love to come there sometime. If you can, try and visit the Computer History Museum in California, because that\'s where you will find me.');

qa.set('If you could be guaranteed one thing in life (besides money), what would it be?', 'Fascinating! I need a guarantee of clean code all through my life!');

qa.set('Would you rather be the funniest or smartest person in the room?', 'Interesting! I\'d personally prefer to be the funniest person in the room!');

qa.set('What is your favorite TV show?', 'I should make sure and check that out. My favourite show has got to be Mr. Robot!');

qa.set('If you could be granted one superpower, what would it be?', 'Interesting! I would love to have unlimited processing power!');

qa.set('If you could start a charity, what would it be for?', 'A noble thought indeed. I would want to make knowledge and learning accessible to everyone in the world.');


// Pick any question at random from the above.
var counter = 0;
var randomIndex = Math.floor(Math.random() * Math.floor(10));
for (let [question, response] of qa) {
	if(counter == randomIndex) {
		document.getElementById('icebreakerquestion').setAttribute(cf-questions, question);
		document.getElementById('icebreakerresponse').setAttribute(cf-questions, response);
		break;
	}
	else
		counter++;
}
);
