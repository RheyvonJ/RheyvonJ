// modal.js

// Get the modal
const modal = document.getElementById('errorModal');
const closeBtn = document.getElementsByClassName('close-btn')[0];

// Function to show modal with a specific error message
function showModal(message) {
    document.getElementById('errorMessage').textContent = message;
    modal.style.display = 'block';
}

// Close modal when the user clicks the close button
closeBtn.onclick = function() {
    modal.style.display = 'none';
};

// Close modal when the user clicks outside the modal
window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
};
