import "./bootstrap";

console.log("[app] initialized.");

Echo.channel("social-mood").listen("EmojiClicked", (event) => {

    const counterElement = document.getElementById(`counter-${event.emoji}`);
    let count = parseInt(counterElement.innerText);
    count++;
    counterElement.innerHTML = count;
});
