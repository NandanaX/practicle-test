
const texts = [
    "Accept new challenges",
    "Embrace the journey",
    "Strive for excellence",
    "Innovate and inspire",
    "Pursue your passion",
    "Never stop learning",
    "Dream big, act bigger",
    "Stay positive and persistent"
];

const styles = ['style1', 'style2', 'style3'];

// Function to select a random text
function getRandomText(arr) {
    const randomIndex = Math.floor(Math.random() * arr.length);
    return arr[randomIndex];
}

// Function to style each word with different classes
function styleText(text, styles) {
    const words = text.split(' '); // Split the text into words
    return words.map((word, index) => {
        const span = `<span class="${styles[index % styles.length]}">${word}</span> <br>`;
        return span;
    }).join(' '); // Join the words back together with spaces
}

// Display the random styled text on page load
const randomText = getRandomText(texts);
const styledText = styleText(randomText, styles);
document.getElementById('random-text').innerHTML = styledText;

document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll('section');
    sections.forEach((section) => {
        section.classList.add('animate-on-load');
    });
});