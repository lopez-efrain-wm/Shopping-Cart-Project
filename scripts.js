/**
 * Created by session2 on 2/4/16.
 */
function cartPage(){
    document.getElementById('home').style.display = 'none';
    document.getElementById('cart').style.display = 'block';
    document.getElementById('signUp').style.display = 'none';
}

function homePage(){
    document.getElementById('home').style.display = 'block';
    document.getElementById('cart').style.display = 'none';
    document.getElementById('signUp').style.display = 'none';
}

function signPage(){
    document.getElementById('home').style.display = 'none';
    document.getElementById('cart').style.display = 'none';
    document.getElementById('signUp').style.display = 'block';
}


function Pic(src) {
    var img = document.createElement("img");
    img.src = src;
    img.width = 300;
    img.height = 350;
    img.id = 'Picture';

// This next line will just add it to the <body> tag
    document.getElementById('cart').appendChild(img);
}


function clearCart() {
    Picture.parentNode.removeChild(Picture)
}
