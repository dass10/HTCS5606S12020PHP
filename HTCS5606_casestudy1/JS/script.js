var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register() {
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
}

function login() {
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0px";
}

function register() {
    window.open("register.php", "_self");
}

function login() {
    window.open("loginregister.php", "_self");
}

//add to cart
total = 0;
function addToCart(e) {
    cart = $("#cartDiv");
    name1 = $(e).attr("name");
    price = $(e).attr("price");
    qty = $(e).prev().val();

    cart.append("<p>Name: "+name1+"  Price: "+Number(price)*Number(qty) +"</p>");
    total = total + Number(price)*Number(qty);
}

function addToInvoice() {

}

/**
 * Show invoice page
 */
function invoice() {
    modal = document.getElementById("myModal");
    modal.style.display = "block";
    // Get the <span> element that closes the modal
    cross = document.getElementsByClassName("close")[0];
    console.log(cross);
    cross.onclick = function() {
        modal.style.display = "none";
    }
// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    //Take everything from shopping cart
    $("#invoicePlace").empty();
    $("#invoicePlace").append($("#cartDiv").children());
    $("#invoicePlace").append("<p>Total: "+total+"</p>");

}



//drop down menu
$(document).ready(function () {
    $(".topItem").mouseenter(function () {
        console.log($(this).next());
        $(this).next().css("display", "block");
        //$(".level2").css("display", "block");
    });
    $(".level1").mouseleave(function () {
        // I don't care this divider has children divider (class: level2) or not,
        // if it has level2 divider, when my mouse left, I hide this divider.
        $(this).children("div").hide();
    });
});
