console.log('Creating additional pylons');
//Do you have pylons?

const playingCards = ['img/spades_ace.svg',
    'img/spades_2.svg',
    'img/spades_3.svg',
    'img/spades_4.svg',
    'img/spades_5.svg',
    'img/spades_6.svg',
    'img/spades_7.svg',
    'img/spades_8.svg',
    'img/spades_9.svg',
    'img/spades_10.svg',
    'img/spades_jack.svg',
    'img/spades_queen.svg',
    'img/spades_king.svg'];

const victoryMsg = ['It\'s only a bot, that was easy',
    'Congrats, goober',
    'Good job, against a bot',
    'Really used that brain, huh?',
    'Well done, for a loser',
    'It\'s just a bot, don\'t get too excited',
    'Bots can do this too, you know?'
];

const lossMsg = ['You smell',
    'Dumbass, haha',
    'How did you lose that?',
    'What the fuck, man',
    'Dude, it\'s a bot',
    'Jeez, you fucking suck',
    'You\'re like a car crash in slowmotion',
    'Nice hustle tons-o-fun, next time eat a salad',
    'Yo momma'
];

const pullCardBtn = document.querySelector('.card-button');
const higherBtn = document.querySelector('.higher-button');
const lowerBtn = document.querySelector('.lower-button');
const playBtn = document.querySelector('.go-button');
const computerCard = document.querySelector('.card-pc');
const playerCard = document.querySelector('.card-p1');
const computerCredsText = document.querySelector('.computer-credits');
const playerCredsText = document.querySelector('.player-credits');
const messageBox = document.querySelector('.message-box');
const playerInput = document.querySelector('.player-name-input');
const playerName = document.querySelector('.player-name');
const submitName = document.querySelector('.submit-name');
const nameCont = document.querySelector('.name-container');
const playerScore = document.querySelector('.show-pl-score');
const computerScore = document.querySelector('.show-com-score');
//These are some super cool variables to point towards the HTML Classes

let numGeneratorPC;
let numGeneratorP1;
let victoryGenerator;
let lossGenerator;
let gameOver = false;
let computerTurn = true;
let playerCreds = 5;
let computerCreds = 5;
let higher;
let playerGameScore = 0;
let computerGameScore = 0;
pullCardBtn.disabled = true;
higherBtn.disabled = true;
lowerBtn.disabled = true;
playBtn.disabled = true;
//Few set game rules such as game state and credits.


pullCardBtn.addEventListener('click', function () {
    if (computerTurn) {
        numGeneratorPC = Math.floor((Math.random() * 12));
        computerCard.src = playingCards[numGeneratorPC];
        pullCardBtn.disabled = true;
        higherBtn.disabled = false;
        lowerBtn.disabled = false;
        computerTurn = false;
        //This is the computer turn, it changes the game state and pulls a card.
    } else {
        numGeneratorP1 = Math.floor((Math.random() * 12));
        playerCard.src = playingCards[numGeneratorP1];
        victoryGenerator = Math.floor((Math.random() * victoryMsg.length));
        lossGenerator = Math.floor((Math.random() * lossMsg.length));
        if (higher && numGeneratorPC < numGeneratorP1) {
            messageBox.textContent = victoryMsg[victoryGenerator];
            playerCreds++;
            computerCreds--;
        } else if (higher && numGeneratorPC > numGeneratorP1) {
            messageBox.textContent = lossMsg[lossGenerator];
            playerCreds--;
            computerCreds++;
        } else if (!higher && numGeneratorPC > numGeneratorP1) {
            messageBox.textContent = victoryMsg[victoryGenerator];
            playerCreds++;
            computerCreds--;
        } else if (!higher && numGeneratorPC < numGeneratorP1) {
            messageBox.textContent = lossMsg[lossGenerator];
            playerCreds--;
            computerCreds++;
        } else if (numGeneratorPC == numGeneratorP1) {
            messageBox.textContent = 'You both picked same card. Nice!'
        }
        //A very long line of code that basically picks the player card and immediately checks to compare the two.
        playerCredsText.textContent = playerCreds;
        computerCredsText.textContent = computerCreds;
        computerTurn = true;
        //Some code to change the turn and changes the credits counter seen on screen.
        if (computerCreds <= 0) {
            messageBox.textContent = "You have won a KFC coupon!"
            playerGameScore++
            playerScore.textContent = playerGameScore;
            pullCardBtn.disabled = true;
            higherBtn.disabled = true;
            lowerBtn.disabled = true;
            playBtn.disabled = false;
            gameOver = true;
            //Win condition for the player. Cool people get to see this message
        }
        if (playerCreds <= 0) {
            messageBox.textContent = "The men in black will send you to Detroit"
            computerGameScore++
            computerScore.textContent = computerGameScore;
            pullCardBtn.disabled = true;
            higherBtn.disabled = true;
            lowerBtn.disabled = true;
            playBtn.disabled = false;
            gameOver = true;
            //Win condition for the computer/robot. You'd be a real sucker to get this
        }
    }
});

higherBtn.addEventListener('click', function () {
    higher = true;
    higherBtn.disabled = true;
    lowerBtn.disabled = true;
    pullCardBtn.disabled = false;
});
//Simple function to change the other button states and checks to see if either higher or lower was pressed. In this case higher was pressed. 

lowerBtn.addEventListener('click', function () {
    higher = false;
    higherBtn.disabled = true;
    lowerBtn.disabled = true;
    pullCardBtn.disabled = false;
});
//Same as above but checks for lower instead.

playBtn.addEventListener('click', function () {
    if (gameOver) {
        playerCreds = 5;
        computerCreds = 5;
        playerCredsText.textContent = playerCreds;
        computerCredsText.textContent = computerCreds;
    }
    playBtn.disabled = true;
    pullCardBtn.disabled = false;
    playerCredsText.textContent = playerCreds;
    computerCredsText.textContent = computerCreds;
    messageBox.textContent = 'Game start!';
    playerCard.src = '../img/astronaut.svg';
    computerCard.src = '../img/astronaut.svg';
});
//Button to begin the game and checks the game state. If gameOver is true it resets the game, the credits and puts the Jokers back in their place to show it has reset.

submitName.addEventListener('click', function () {
    if (playerInput.value < 3 && ' ') {
        messageBox.textContent = 'Name not good enough!';
    } else {
        playerName.textContent = playerInput.value;
        playBtn.disabled = false;
        nameCont.classList.add("name-container-dis")
    }
});
//Name submit function, less than 3 characters or just spaces not accepted