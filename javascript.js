// Get references to the buttons
const youtubeButton = document.getElementById("youtube-button");
const tiktokButton = document.getElementById("tiktok-button");
const discordButton = document.getElementById("discord-button");

// Function to open URLs in new tabs when buttons are clicked
function openURLInNewTab(url) {
    window.open(url, "_blank");
}

// Add click event listeners to the buttons
youtubeButton.addEventListener("click", function() {
    openURLInNewTab("https://www.youtube.com/");
});

tiktokButton.addEventListener("click", function() {
    openURLInNewTab("https://www.tiktok.com/");
});

discordButton.addEventListener("click", function() {
    openURLInNewTab("https://www.discord.com/");
});
