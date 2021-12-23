let payment_method = document.getElementById("payment_method");
payment_method.addEventListener("change", (e) => {
    document.getElementById(payment_method.value).setAttribute("class","show");
});
