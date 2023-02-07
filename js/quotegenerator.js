//Hieronder zie je alle quotes. Ik heb ze in een array gezet en in de array staan dan weer objecten waar de quotes in staan.
const quotes = [
    {
        quote: 'Life is too short to act normal.',
        person: 'Anouska Schellevis'
    },
    {
        quote: 'Altijd blijven lachen.',
        person: 'Anouska Schellevis'
    },
    {
        quote: 'There is no place like home.',
        person: 'Dorothy'
    },
    {
        quote: 'Life is like riding a bicycle. To keep your balance, you must keep moving',
        person: 'Albert Einstein'
    },
    {
        quote: 'The only thing we have to fear is fear itself.',
        person: 'Franklin D. Roosevelt'
    },
];

//Hier heb ik ervoor gezorgd dat de quotes op de goede plek komen op de website.
const quoteOn = document.querySelector('.quote');
const personOn = document.querySelector('.person');
const buttonOn = document.querySelector('.button');

//Deze functie berekent eerst een random getal, daarna worden de quote en de auteur opgehaald van het getal wat berekent is. 
//Met de laatste 2 regels zorg ik ervoor dat de quotes op de website te zien zijn.
function getRandomQuote() {
    const getQuote = Math.floor(Math.random() * quotes.length);
    const useQuote = quotes[getQuote];
    quoteOn.innerHTML = useQuote.quote;
    personOn.innerHTML = useQuote.person;
}

//Deze code zorgt ervoor dat er op de knop gedrukt kan worden om een nieuwe quote te laten zien.
buttonOn.addEventListener('click', getRandomQuote);

getRandomQuote();

console.log(getRandomQuote);