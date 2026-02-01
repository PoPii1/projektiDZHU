document.querySelectorAll('.buy-btn').forEach(button => {
    button.addEventListener('click', () => {
        alert('Item added to cart! Log in to complete your purchase.');
    });
});