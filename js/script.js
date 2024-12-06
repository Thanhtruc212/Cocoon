// js/script.js
document.addEventListener('DOMContentLoaded', function() {
    const products = document.querySelectorAll('.product');
    products.forEach(product => {
        product.addEventListener('mouseenter', () => {
            product.style.boxShadow = "0 0 10px rgba(0, 0, 0, 0.1)";
        });
        product.addEventListener('mouseleave', () => {
            product.style.boxShadow = "none";
        });
    });
});
