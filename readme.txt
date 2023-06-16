Form where user registers
user login

Donut selection and extras

Glazing
radio btn - Plain as default
            any other add R2 extras

Toppings
Checkboxes -    max 3 Toppings (error message)
                Toppings R2 Each

Filling -   default filling is none
            only one may be selected
            filling R2 extra

Quantity -  slect amount of donuts
            multiply cost times quatity of donuts to get total payment
            default value set to one cannot go into negative or below one
            if lower than one error

Payment  -  if submitted order redirect to payment page.
            display - customer username
                    - list of addons
                    - amount of donuts
                    - price single donut with addons
                    - subtotal

calculation - call function calcPriceOfDonut()

subtotal - getOrderTotal() 
