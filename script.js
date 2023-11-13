function showLargeImage(element) {
    const largeImageSrc = element.src;
    const overlay = document.createElement('div');
    overlay.classList.add('overlay');

    const largeImage = document.createElement('img');
    largeImage.classList.add('largeImage');
    largeImage.src = largeImageSrc;

    const closeButton = document.createElement('span');
    closeButton.classList.add('closeButton');
    closeButton.innerHTML = '&times;';
    closeButton.onclick = function () {
        overlay.remove();
    };

    overlay.appendChild(largeImage);
    overlay.appendChild(closeButton);
    document.body.appendChild(overlay);
}


let cart = [];

function showLargeImage(element) {
    const largeImageSrc = element.src;
    const overlay = document.createElement('div');
    overlay.classList.add('overlay');

    const largeImage = document.createElement('img');
    largeImage.classList.add('largeImage');
    largeImage.src = largeImageSrc;

    const closeButton = document.createElement('span');
    closeButton.classList.add('closeButton');
    closeButton.innerHTML = '&times;';
    closeButton.onclick = function () {
        overlay.remove();
    };

    overlay.appendChild(largeImage);
    overlay.appendChild(closeButton);
    document.body.appendChild(overlay);
}

function addToCart(button) {
    button.classList.toggle('expanded');

    if (button.classList.contains('expanded')) {
        button.innerHTML = 'ITEM ADDED';
    } else {
        button.innerHTML = 'ADD TO CART';
    }
}

function addToCart(productName, price) {
    const cartItem = {
        name: productName,
        price: price,
    };
    console.log("Added to Cart:");
    console.log("Name: " + productName);
    console.log("Price: $" + price);

    cart.push(cartItem);

    updateCartDisplay();
}

function updateCartDisplay() {
    const cartElement = document.getElementById('cart');

    if (cart.length === 0) {
        cartElement.innerText = 'Your Shopping Cart Is Empty!';
    } else {
        let cartText = 'Your Cart:\n';
        for (const item of cart) {
            cartText += `${item.name} - $${item.price}\n`;
        }

        cartElement.innerText = cartText;
    }
}

function addToCartFromProduct(element, name, price) {
    console.log("Added to Cart:");
    console.log("Name: " + name);
    console.log("Price: $" + price);


}