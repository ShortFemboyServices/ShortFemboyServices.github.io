// Function to handle button clicks
function handleButtonClick(event) {
    event.preventDefault(); // Prevent the default link behavior (navigation)
    
    // Get the social media platform from the button's class
    const platform = event.target.classList[0];
    
    // You can replace the "#" with the actual URLs to your social media profiles
    switch (platform) {
        case 'facebook-button':
            window.location.href = 'https://www.facebook.com/YourPage';
            break;
        case 'twitter-button':
            window.location.href = 'https://twitter.com/YourTwitter';
            break;
        case 'instagram-button':
            window.location.href = 'https://www.instagram.com/YourInstagram';
            break;
    }
}

// Add a click event listener to each social media button
const buttons = document.querySelectorAll('.facebook-button, .twitter-button, .instagram-button');
buttons.forEach(button => {
    button.addEventListener('click', handleButtonClick);
});
