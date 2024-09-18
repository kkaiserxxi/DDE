function toggleForm(element) {
    const form = element.nextElementSibling.nextElementSibling;
    const formCover = element;
    const bookingForm = form.parentElement;
    
    const formDisplay = window.getComputedStyle(form).display;

    if (formDisplay === 'none') {
        form.style.display = 'block';
        formCover.style.transform = 'translateY(-100%)';
        formCover.style.height = '0';
        setTimeout(() => {
            formCover.style.display = 'none';
        }, 500); // Delay hiding the cover for the animation
        bookingForm.classList.add('hidden');
    } else {
        form.style.display = 'none';
        formCover.style.display = 'block';
        formCover.style.transform = 'translateY(0)';
        formCover.style.height = '100%';
        bookingForm.classList.remove('hidden');
    }
}
