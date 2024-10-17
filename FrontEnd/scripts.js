document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('pizzaForm');
    const totalPriceElement = document.getElementById('total-price');

    form.addEventListener('change', calculatePrice);

    function calculatePrice(){
        
        let totalPrice = 0;

        // Calculate price for selected pizza size
        const pizzaSize = form.querySelector('#pizza-size');
        if (pizzaSize) {
            const pizzaPrice = parseFloat(pizzaSize.options[pizzaSize.selectedIndex].getAttribute('data-price'));
            console.log("Selected pizza size price:", pizzaPrice);
            totalPrice += pizzaPrice;
        }

        // Calculate price for selected crust
        const crust = form.querySelector('#crust');
        if (crust) {
            const crustPrice = parseFloat(crust.options[crust.selectedIndex].getAttribute('data-price'));
            console.log("Selected crust price:", crustPrice);
            totalPrice += crustPrice;
        }

        // Calculate price for selected toppings
        const toppings = form.querySelectorAll('input[name="toppings[]"]:checked');
        toppings.forEach(function (topping) {
            const toppingPrice = parseFloat(topping.getAttribute('data-price'));
            console.log("Selected topping price:", toppingPrice);
            totalPrice += toppingPrice;
        });

        console.log("Total price:", totalPrice);
        totalPriceElement.value = "$" + totalPrice.toFixed(2);
    }

    calculatePrice();

});


