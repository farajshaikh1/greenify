$(document).ready(function(){

    // ==============   ADMIN PAGE   ============== //

    var this_tr = null;
    
    // products table
    var imageValue = null;
    var brandValue = null;
    var titleValue = null;
    var priceValue = null;
    var descriptionValue = null;

    // customers table
    var idValue = null;
    var nameValue = null;
    var emailValue = null;
    var phoneValue = null;

    // default appear - product button
    $(".tbl-select #product-button").css({"width": "65%", "background-color": "mediumseagreen"});
    $(".tbl-select #customer-button").css({"background-color": "dimgray", "width": "35%"});

    $(".tbl-customers").hide();
    $(".tbl-items").slideDown();

    // select to appear - buttons
    $(".tbl-select button").click(function(){
        closeEditing();

        $(this).css("width", "65%");
        
        if ($(this).attr("id") == "product-button") {
            $(this).css({"background-color": "mediumseagreen"});
            $(".tbl-select #customer-button").css({"background-color": "dimgray", "width": "35%"});

            $(".tbl-customers").hide();
            $(".tbl-items").slideDown();
        };

        if ($(this).attr("id") == "customer-button") {
            $(this).css({"background-color": "dodgerblue"});
            $(".tbl-select #product-button").css({"background-color": "dimgray", "width": "35%"});

            $(".tbl-items").hide();
            $(".tbl-customers").slideDown();
        };      
    })

    // .edit button
    $(".button-td div .edit").click(function(){
        $(this).hide();
        $(".button-td div .edit").prop("disabled", true).css({"background-color": "gray"});
        $(".button-td div .delete").prop("disabled", true).css({"background-color": "gray"});

        this_tr = $(this).closest("tr");

        $(".button-td div .tick", this_tr).show();
        $(this_tr).css("outline", "1.5px solid salmon");
        
        if ($(this).closest("table").prev().attr("id") == "tbl_users") {
            nameValue = $(".name-td span", this_tr).text();
            emailValue = $(".email-td span", this_tr).text();
            phoneValue = $(".phone-td span", this_tr).text();

            $(".name-td input", this_tr).attr("value", nameValue);
            $(".email-td input", this_tr).attr("value", emailValue);
            $(".phone-td input", this_tr).attr("value", phoneValue);
        }
        else {
            imageValue = $(".image-td span", this_tr).text();
            brandValue = $(".brand span", this_tr).text();
            titleValue = $(".title span", this_tr).text();
            priceValue = $(".price span", this_tr).text();
            descriptionValue = $(".description span", this_tr).text();

            $(".image-td input", this_tr).attr("value", imageValue);
            $(".brand input", this_tr).attr("value", brandValue);
            $(".title input", this_tr).attr("value", titleValue);
            $(".price input", this_tr).attr("value", priceValue);
            $(".description textarea", this_tr).text(descriptionValue);
            
            $(".description textarea", this_tr).height("350").css("line-height", "1.5rem");
            $(".description details", this_tr).attr("open", "");
        }
        
        $("td span", this_tr).hide();
        $("td input, td textarea", this_tr).slideDown();
        
    });

    // .tick button (confirm edit)
    $(".button-td div .tick").click(function(){
        this_tr = $(this).closest("tr");

        var table = $(this).closest("table").prev().attr("id");

        if (table == "tbl_users") {
            var id_pk = $(".id-td", this_tr).text();

            var nameInput = $(".name-td input", this_tr).val();
            var emailInput = $(".email-td input", this_tr).val();
            var phoneInput = $(".phone-td input", this_tr).val();

            var check = {
                name: "",
                email: "",
                phone: ""
            }

            if (nameInput != nameValue) {
                check['name'] = nameInput;
            }
            if (emailInput != emailValue) {
                check['email'] = emailInput;
            }
            if (phoneInput != phoneValue) {
                check['phone'] = phoneInput;
            }

            // alert (JSON.stringify(check));
            $.post("manage.php", {
                table,
                id_pk,
                check_user: JSON.stringify(check)
            }, function(data){
                if (data == "0") {
                    alert ("No rows were affected.")
                }
                else {
                    alert (`Row at User ID = ${id_pk} has been successfully modified.\n\nAffected column(s):\n${data}\n\nClick OK to refresh.`);

                    location.reload(true);
                }
            })
        }
        else {
            var serial = $(".serial", this_tr).text();
    
            var imageInput = $(".image-td input", this_tr).val();
            var brandInput = $(".brand input", this_tr).val();
            var titleInput = $(".title input", this_tr).val();
            var priceInput = $(".price input", this_tr).val();
            var descriptionInput = $(".description textarea", this_tr).val();
    
            // image path check
            if (imageInput.length > 600) {
                alert ("Maximum character limit is 600.");
                return false;
            }
    
            // brand check
            if (brandInput.length > 25) {
                alert ("Maximum character limit is 25.");
                return false;
            }
    
            // title check
            if (titleInput.length > 50) {
                alert ("Maximum character limit is 50.");
                return false;
            }
    
            // price check
            if ($.isNumeric(priceInput)) {
                if (priceInput >= 0.01 && priceInput <= 999999.99) {}
                else {
                    alert ('Enter a value between 0.01 and 999,999.99');
                    return false;
                }
            }
            else {
                alert('Please enter a valid number!');
                return false;
            }
    
            // description check
            if (descriptionInput.length > 445) {
                alert ("Maximum character limit is 445.");
                return false;
            }
    
            var check = {
                image_path: "",
                brand: "",
                title: "",
                price: "",
                description: ""
            };
    
            if (imageInput != imageValue) {
                check['image_path'] = imageInput;
            }
    
            if (brandInput != brandValue) {
                check['brand'] = brandInput;
            }
            if (titleInput != titleValue) {
                check['title'] = titleInput;
            }
            if (parseFloat(priceInput) != parseFloat(priceValue)) {
                check['price'] = priceInput;
            }
            if (descriptionInput != descriptionValue) {
                check['description'] = descriptionInput;
            }
    
            // alert(JSON.stringify(check)); 
            // return false;
    
            $.post("manage.php", {
                table,
                serial,
                check_item: JSON.stringify(check)
            }, function(data){
                if (data == "0") {
                    alert ("No rows were affected.");
                }
                else {
                    alert (`Row at serial no. = ${serial} has been successfully modified.\n\nAffected column(s):\n${data}\n\nClick OK to refresh.`);
    
                    // closeEditing();
    
                    // $(this_table).load(" table");
    
                    location.reload(true);
                }
            })
        }

    });
    
    // .delete button
    $(".button-td div .delete").click(function(){
        this_tr = $(this).closest("tr");
        
        var table = $(this).closest("table").prev().attr("id");
        var primary_key = null;
        var confirmMsg = null;

        if (table == "tbl_users") {
            primary_key = $(".id-td", this_tr).text();
            confirmMsg = `Are you sure you want to delete the following record?\n\n${primary_key} -> ${$(".name-td span", this_tr).text()}\n\nThis action cannot be undone!`;
        }
        else {
            primary_key = $(".serial", this_tr).text();
            confirmMsg = `Are you sure you want to delete the following record?\n\n${primary_key} -> ${$(".title", this_tr).text()}\n\nThis action cannot be undone!`;
        }
        
        if (confirm(confirmMsg) == true) {
            $.post("manage.php", {
                this_table: table,
                primary_key
            }, function(data){
                if (data == "deleted") {
                    location.reload(true);
                }
                else {
                    alert ("Unexpected error; please try again!");
                }
            });
        }
    });

    // click outside of current row -> cancel.
    $(document).click(function(e){
        if ($(".button-td div .tick").is(":visible") && $(e.target).closest(this_tr).length === 0) {

            closeEditing();
        }
    });


    // FUNCTIONS
    function closeEditing() {
        $(".button-td div .tick").hide();
        $(".button-td div .edit").show().prop("disabled", false).css({"background-color": "#FAC213"});
        $(".button-td div .delete").prop("disabled", false).css({"background-color": "#d92626"});
    
        $("td input, td textarea", this_tr).hide();
        $("td span", this_tr).show();
        
        $(this_tr).css("outline", "none");
    }

    // ==============   ADMIN PAGE   ============== //
    $("#main-div #add_to_cart").click(function(){
        var brand = $("#main-div .body-section .brand").text();
        var title = $("#main-div .body-section .title").text();
        var price = $("#main-div .body-section .price").text();
        var filename = $("#main-div .img-section #filename").attr("value");
        var imagepath = $("#main-div .img-section img").attr("src");

        // alert (imagepath);
        // return false;

        $.post("manage.php", {
            brand,
            title,
            price,
            filename,
            imagepath,
            add_via_js: "trigger"
        }, function(data){
            // alert (data);
            if (data == "added") {
                $(".btn-container #add_to_cart").html("<i class='fa-solid fa-circle-check'></i> Added to Cart").css("background-color", "darkred");
            }
            else if (data == "already") {
                $(".btn-container #add_to_cart").html("<i class='fa-solid fa-circle-check'></i> Item Already in Cart").css("background-color", "darkred");
            }
            $(".cart-a").load(" .cart-a *");
        });
        
    });

    $("#main-div #buy_now").click(function(){
        window.location.href = 'order_placed.php';
    });

    $(".cart_line #remove_item").click(function(){
        var this_line = $(this).closest(".cart_line");
        var title = $(".title", this_line).text();

        $.post("manage.php", {
            line_title: title
        }, function(data){
            // alert (data);
            $(this_line).slideUp();
            $(".cart-a").load(" .cart-a *");
            $(".checkout").load(" .checkout > *");

            if (data == "nothing") {
                location.reload(true);
            }
        });
    })

    $(".checkout button").click(function(){
        $.post("manage.php", {
            alldone: "alldone"
        }, function(data){
            if (data == "cleared") {
                window.location.href = 'order_placed.php';
            }
        })
    })
});