

function addToCart1(button) {
    button.classList.toggle('expanded');

    if (button.classList.contains('expanded')) {
        button.innerHTML = 'ITEM ADDED';
    } else {
        button.innerHTML = 'ADD TO CART';
    }
}

