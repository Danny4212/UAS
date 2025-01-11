let navbar = document.querySelector('.header .flex .navbar');
let profile = document.querySelector('.header .flex .profile');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   profile.classList.remove('active');
}

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () =>{
   profile.classList.remove('active');
   navbar.classList.remove('active');
}

function loader(){
   document.querySelector('.loader').style.display = 'none';
}

function fadeOut(){
   setInterval(loader, 2000);
}

window.onload = fadeOut;

document.addEventListener("DOMContentLoaded", () => {
   const deleteButtons = document.querySelectorAll(".box .fa-times");

   deleteButtons.forEach((button) => {
       button.addEventListener("click", (event) => {
           event.preventDefault();
           if (confirm("Delete this item?")) {
               const itemBox = button.closest(".box");
               itemBox.remove();
               updateCartTotal();
           }
       });
   });

   const deleteAllButton = document.querySelector(".more-btn .delete-btn");
   deleteAllButton.addEventListener("click", (event) => {
       event.preventDefault();
       if (confirm("Delete all from cart?")) {
           const cartContainer = document.querySelector(".box-container");
           cartContainer.innerHTML = ""; 
           updateCartTotal(); 
       }
   });

   function updateCartTotal() {
       const itemBoxes = document.querySelectorAll(".box");
       let total = 0;

       itemBoxes.forEach((box) => {
           const price = parseFloat(box.querySelector(".price span").textContent) || 0;
           const quantity = parseInt(box.querySelector(".qty").value) || 1;
           total += price * quantity;
       });

       const grandTotalElement = document.querySelector(".cart-total span");
       grandTotalElement.textContent = `$${total}`;
   }

   const quantityInputs = document.querySelectorAll(".qty");
   quantityInputs.forEach((input) => {
       input.addEventListener("input", () => {
           if (input.value < 1) input.value = 1;
           updateCartTotal();
       });
   });
});