// Select all images in the gallery
const images = document.querySelectorAll('.gallery img');

// Add event listener to each image
images.forEach(image => {
    image.addEventListener('click', () => {
        // Check if this image is already active
        if (image.classList.contains('active')) {
            // Remove 'active' class to shrink the image
            image.classList.remove('active');
        } else {
            // Remove 'active' class from any currently active image
            document.querySelector('.gallery img.active')?.classList.remove('active');

            // Add 'active' class to the clicked image
            image.classList.add('active');
        }
    });
});