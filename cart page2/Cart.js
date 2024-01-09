let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})
let products = [
    {
        id: 1,
        name: 'Death By Chocolate',
        image: 'i1.avif',
        price: 180,
        size: '20px'
    },
    {
        id: 2,
        name: 'Creamy Red velvet',
        image: 'i2.avif',
        price: 110,
        size: '40px'
    },
    {
        id: 3,
        name: 'Nuts Overloaded',
        image: 'i4.avif',
        price: 140,
        size: '40px'
    },
    {
        id: 4,
        name: 'Oreo Shoot',
        image: 'i3.avif',
        price: 105,
        size: '40px'
    },
    {
        id: 5,
        name: 'Strawberry Delight',
        image: 'i11.avif',
        price: 210,
        size: '40px'
    },
    {
        id: 6,
        name: 'Lotus Biscoff',
        image: 'i10.avif',
        price: 160,
        size: '40px'
    }
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}" width = ${value.size}>
            <div class="name">${value.name}</div>
            <div class="price">Rs ${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Cart</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}

function toggle2(){
    var y = document.getElementById("stay");
    var z = document.getElementById("check");
    if(y.style.display == "block"){
      z.style.color = "white";
      y.style.display = "none";
    }
    else{
      z.style.color = "#FF5F1F";
      y.style.display = "block";
    }
  }

  function togglex(){
    var y = document.getElementById("pd");
    if(y.style.display == "block"){
      y.style.display = "none";
    }
    else{
      y.style.display = "block";
    }
}