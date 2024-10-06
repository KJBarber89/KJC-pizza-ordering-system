document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        // Handle form submission
        alert('Order submitted!');
    });
});
document.addEventListener('DOMContentLoaded', function() {
    var popup = document.getElementById('popup');
    var close = document.querySelector('.close');
    var shopNowButton = document.querySelector('.popup-content button');
    // Show the popup after 5 seconds
    setTimeout(function() {
        popup.style.display = 'flex';
    }, 5000);

    // Close the popup when the close button is clicked
    close.addEventListener('click', function() {
        popup.style.display = 'none';
    });
shopNowButton.addEventListener('click', function(){
    popup.style.display = 'none';
});

});
