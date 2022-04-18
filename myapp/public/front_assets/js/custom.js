/** 
  * Template Name: Daily Shop
  * Version: 1.0  
  * Template Scripts
  * Author: MarkUps
  * Author URI: http://www.markups.io/

  Custom JS
  

  1. CARTBOX
  2. TOOLTIP
  3. PRODUCT VIEW SLIDER 
  4. POPULAR PRODUCT SLIDER (SLICK SLIDER) 
  5. FEATURED PRODUCT SLIDER (SLICK SLIDER)
  6. LATEST PRODUCT SLIDER (SLICK SLIDER) 
  7. TESTIMONIAL SLIDER (SLICK SLIDER)
  8. CLIENT BRAND SLIDER (SLICK SLIDER)
  9. PRICE SLIDER  (noUiSlider SLIDER)
  10. SCROLL TOP BUTTON
  11. PRELOADER
  12. GRID AND LIST LAYOUT CHANGER 
  13. RELATED ITEM SLIDER (SLICK SLIDER)

  
**/



jQuery(function ($) {
    /* ----------------------------------------------------------- */
    /*  1. CARTBOX 
  /* ----------------------------------------------------------- */

    jQuery(".aa-cartbox").hover(
        function () {
            jQuery(this).find(".aa-cartbox-summary").fadeIn(500);
        },
        function () {
            jQuery(this).find(".aa-cartbox-summary").fadeOut(500);
        }
    );

    /* ----------------------------------------------------------- */
    /*  2. TOOLTIP
  /* ----------------------------------------------------------- */
    jQuery('[data-toggle="tooltip"]').tooltip();
    jQuery('[data-toggle2="tooltip"]').tooltip();

    /* ----------------------------------------------------------- */
    /*  3. PRODUCT VIEW SLIDER 
  /* ----------------------------------------------------------- */

    

    /* ----------------------------------------------------------- */
    /*  4. POPULAR PRODUCT SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

  

    /* ----------------------------------------------------------- */
    /*  5. FEATURED PRODUCT SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */


    jQuery(function () {
        if ($("body").is(".productPage")) {
            var filter_price_start = jQuery("#filter_price_start").val();
            var filter_price_end = jQuery("#filter_price_end").val();
            if (filter_price_start == "" || filter_price_end == "") {
                filter_price_start = 100;
                filter_price_end = 1700;
            }
            var skipSlider = document.getElementById("skipstep");
            noUiSlider.create(skipSlider, {
                range: {
                    min: 0,
                    "10%": 100,
                    "20%": 300,
                    "30%": 500,
                    "40%": 700,
                    "50%": 900,
                    "60%": 1100,
                    "70%": 1300,
                    "80%": 1500,
                    "90%": 1700,
                    max: 1900,
                },
                snap: true,
                connect: true,
                start: [filter_price_start, filter_price_end],
            });
            // for value print
            var skipValues = [
                document.getElementById("skip-value-lower"),
                document.getElementById("skip-value-upper"),
            ];

            skipSlider.noUiSlider.on("update", function (values, handle) {
                skipValues[handle].innerHTML = values[handle];
            });
        }
    });

    /* ----------------------------------------------------------- */
    /*  10. SCROLL TOP BUTTON
  /* ----------------------------------------------------------- */

    //Check to see if the window is top if not then display button

    jQuery(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $(".scrollToTop").fadeIn();
        } else {
            $(".scrollToTop").fadeOut();
        }
    });

    //Click event to scroll to top

    jQuery(".scrollToTop").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });

    /* ----------------------------------------------------------- */
    /*  11. PRELOADER
  /* ----------------------------------------------------------- */

 
    /* ----------------------------------------------------------- */
    /*  12. GRID AND LIST LAYOUT CHANGER 
  /* ----------------------------------------------------------- */

    jQuery("#list-catg").click(function (e) {
        e.preventDefault(e);
        jQuery(".aa-product-catg").addClass("list");
    });
    jQuery("#grid-catg").click(function (e) {
        e.preventDefault(e);
        jQuery(".aa-product-catg").removeClass("list");
    });

    /* ----------------------------------------------------------- */
    /*  13. RELATED ITEM SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

   
});

function change_product_color_image(img, color) {
    jQuery("#color_id").val(color);
    jQuery(".simpleLens-big-image-container").html(
        '<a data-lens-image="' +
            img +
            '" class="simpleLens-lens-image"><img src="' +
            img +
            '" class="simpleLens-big-image"></a>'
    );
}
function showColor(size) {
    jQuery("#size_id").val(size);
    jQuery(".product_color").hide();
    jQuery(".size_" + size).show();
    jQuery(".size_link").css("border", "0px");
    jQuery("#size_" + size).css("border", "1px solid black");
}

function home_add_to_cart(id, size_str_id, color_str_id) {
    jQuery("#color_id").val(color_str_id);
    jQuery("#size_id").val(size_str_id);
    add_to_cart(id, size_str_id, color_str_id);
}

function add_to_cart(id, size_str_id, color_str_id) {
    jQuery("#add_to_cart_msg").html("");
    var color_id = jQuery("#color_id").val();
    var size_id = jQuery("#size_id").val();

    if (size_str_id == 0) {
        size_id = "no";
    }
    if (color_str_id == 0) {
        color_id = "no";
    }
    if (size_id == "" && size_id != "no") {
        jQuery("#add_to_cart_msg").html(
            ' <div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close" > &times;  </a> please select size</div>'
        );
    } else if (color_id == "" && color_id != "no") {
        jQuery("#add_to_cart_msg").html(
            ' <div class="alert alert-danger alert-dismissible fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close" > &times;  </a> please add colour </div>'
        );
    } else {
        jQuery("#product_id").val(id);
        jQuery("#pqty").val(jQuery("#qty").val());
        jQuery.ajax({
            url: "/add_to_cart",
            data: jQuery("#frmAddToCart").serialize(),
            type: "post",
            success: function (result) {
                var totalPrice = 0;
                alert("product " + result.msg);
                if (result.totalItem == 0) {
                    jQuery(".aa-cart-notify").html("0");
                    jQuery(".aa-cartbox-summary").remove();
                } else {
                    jQuery(".aa-cart-notify").html(result.totalItem);
                    var html = "<ul>";

                    jQuery.each(result.data, function (arrKey, arrVal) {
                        totalPrice =
                            parseInt(totalPrice) +
                            parseInt(arrVal.qty) * parseInt(arrVal.price);

                        html +=
                            '<li><a class="aa-cartbox-img" href="#"><img src="' +
                            PRODUCT_IMAGE +
                            "/" +
                            arrVal.image +
                            '" alt="img"></a><div class="aa-cartbox-info"><h4><a href="#">' +
                            arrVal.name;
                        "</a></h4><p>" +
                            arrVal.qty +
                            " * TK" +
                            arrVal.price +
                            '</p></div> <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a></li>';
                    });
                }
                html +=
                    '<li> <span class="aa-cartbox-total-title">Total</span><span class="aa-cartbox-total-price">TK' +
                    TotalPrice +
                    "</span></li>";
                html +=
                    '</ul> <a class="aa-cartbox-checkout aa-primary-btn" href="cart" >Cart</a>';
                jQuery(".aa-cartbox-summary").html(html);
            },
        });
    }
}

function deleteCartProduct(pid, size, color, attr_id) {
    jQuery("#color_id").val(color);
    jQuery("#size_id").val(size);
    jQuery("#qty").val(0);
    add_to_cart(pid, size, color);
    jQuery("#cart_box" + attr_id).remove();
}
function updateQty(pid, size, color, attr_id, price) {
    jQuery("#color_id").val(color);
    jQuery("#size_id").val(size);
    var qty = jQuery("#qty" + attr_id).val();
    jQuery("#qty").val(qty);
    add_to_cart(pid, size, color);
    jQuery("#total_price_" + attr_id).html("TK " + qty * price);
}

function sort_by() {
    var sort_by_value = jQuery("#sort_by_value").val();
    jQuery("#sort").val(sort_by_value);
    jQuery("#categoryFilter").submit();
}

function sort_price_filter() {
    var start = jQuery("#skip-value-lower").html();
    var end = jQuery("#skip-value-upper").html();
    //s alert(start + "--" + end);
    jQuery("#filter_price_start").val(jQuery("#skip-value-lower").html());
    jQuery("#filter_price_end").val(jQuery("#skip-value-upper").html());
    jQuery("#categoryFilter").submit();
}

function setColor(color, type) {
    var color_str = jQuery("#color_filter").val();
    if (type == 1) {
        var new_color_str = color_str.replace(color + ":", " ");
        jQuery("#color_filter").val(new_color_str);
    } else {
        jQuery("#color_filter").val(color + ":" + color_str);
        jQuery("#categoryFilter").submit();
    }
    jQuery("#categoryFilter").submit();
}

function funSearch() {
    var search_str = jQuery("#search_str").val();
    if (search_str !== "" && search_str.length > 3) {
        window.location.href = "/search/" + search_str;
    }
}

jQuery("#frmRegistration").submit(function (e) {
    e.preventDefault();
    jQuery(".field_error").html("");
    jQuery.ajax({
        url: "registration_process",
        data: jQuery("#frmRegistration").serialize(),
        type: "post",
        success: function (result) {
            if (result.status == "error") {
                jQuery.each(result.error, function (key, val) {
                    jQuery("#" + key + "_error").html(val[0]);
                });
            }
            if (result.status == "success") {
                jQuery("#frmRegistration")[0].reset();
                jQuery("#thank_you_msg").html(result.msg);
            }
        },
    });
});
// .....................................employee add start...

$(document).ready(function(){
    fetchemployee();    
  function fetchemployee(){
      $.ajax({
        type:"GET",
        url:"/fetch-employee",
        dataType:"json",
        success:function(response){
          $.each(response.emp ,function(key,item){
            $("#studentTable tbody").prepend('<tr id="sid'+item.id+'">\
            <td><div class="form-check"><input class="form-check-input checkBoxClass" name="ids" type="checkbox" value="'+item.id+'" id="flexCheckChecked ids"><label class="checkBoxClass" for="flexCheckChecked"></label></div></td>\
            <td>'+item.fname+'</td>\
            <td>'+item.lname+'</td>\
             <td>'+item.email+'</td>\
             <td>'+item.phone+'</td>\
             <td><a class="btn btn-danger" href="javascript:void(0)" onclick="deleteStudent('+item.id+')"   class="trigger-btn" data-toggle="modal"><i class="fa fa-trash-o fa-lg"></i> </a><a class="btn btn-primary" href="#navigation-main"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></a><a class="btn btn-primary" href="#navigation-main"><i class="fa fa-edit fa-lg" aria-hidden="true"></i></a><a class="btn btn-primary" href="#navigation-main"><i class="fa fa-download fa-lg" aria-hidden="true"></i></a></td>\
             </tr>');
          });
            
        }
      });
  }
 jQuery("#add_employee").submit(function (e) {
    var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
    $("input[name='phone_number[full]'").val(full_number);
    e.preventDefault();
    let formData = new FormData(this);
    jQuery(".field_error").html("");
    $('#image-input-error').text('');
    jQuery.ajax({
        type:'POST',
        url: `/empadd_process`,
       data: formData,
       contentType: false,
       processData: false,       
       success: function (result) {        
        if (result.status == "error") {
            jQuery.each(result.error, function (key, val) {
                jQuery("#" + key + "_error").html(val[0]);
            });
        }
        if (result.status == "success") {
            window.location.href="/employee_add";
            jQuery("#add_employee")[0].reset();
            $('#exampleModal').modal('hide');
                
                const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {                    
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })              
              Toast.fire({
                icon: 'success',
                title: 'Registration Successfull.  please check your email id for verification'
              })           
        }
    },        
    });
});
});
// .....................................employee add end...



jQuery("#frmLogin").submit(function (e) {
    e.preventDefault();
    jQuery("#login_msg").html("");
    jQuery.ajax({
        url: "/login_process",
        data: jQuery("#frmLogin").serialize(),
        type: "post",
        success: function (result) {
            if (result.status == "error") {
                jQuery("#login_msg").html(result.msg);
            }
            if (result.status == "success") {
                // jQuery("#frmLogin")[0].reset();
                //jQuery("#thank_you_msg").html(result.msg);
                window.location.href = window.location.href;
            }
        },
    });
});

function forgot_password() {
    jQuery("#popup_forgot").show();
    jQuery("#popup_login").hide();
}
function show_login_popup() {
    jQuery("#popup_forgot").hide();
    jQuery("#popup_login").show();
}

jQuery("#frmForgot").submit(function (e) {
    jQuery("#forgot_msg").html("");
    e.preventDefault();
    jQuery.ajax({
        url: "/forgot_password",
        data: jQuery("#frmForgot").serialize(),
        type: "post",
        success: function (result) {
            jQuery("#forgot_msg").html(result.msg);
        },
    });
});

jQuery("#frmUpdatePassword").submit(function (e) {
    jQuery("#thank_you_msg").html("");
    e.preventDefault();
    jQuery("#forgot_msg").html("");
    jQuery.ajax({
        url: "/forgot_password_change_process",
        data: jQuery("#frmUpdatePassword").serialize(),
        type: "post",
        success: function (result) {
            jQuery("#thank_you_msg").html(result.msg);
        },
    });
});

function applyCouponCode() {
    // alert(3);
    jQuery("#coupon_code_msg").html("");
    var coupon_code = jQuery("#coupon_code").val();
    if (coupon_code != "") {
        jQuery.ajax({
            url: "/apply_coupon_code",
            data:
                "coupon_code=" +
                coupon_code +
                "&_token=" +
                jQuery("[name='_token']").val(),
            type: "post",
            success: function (result) {
                if (result.status == "success") {
                    jQuery(".show_coupon_box").removeClass("hide");
                    jQuery("#coupon_code_str").html(coupon_code);
                    jQuery("#total_price").html("TK " + result.totalPrice);
                    jQuery(".apply_coupon_code_box").hide();
                } else {
                }
                jQuery("#coupon_code_msg").html(result.msg);
            },
        });
    } else {
        jQuery("#coupon_code_msg").html("please enter a coupon code");
    }
}

function remove_coupon_code() {
    jQuery("#coupon_code_msg").html("");
    var coupon_code = jQuery("#coupon_code").val();
    jQuery("#coupon_code").val("");
    if (coupon_code != "") {
        jQuery.ajax({
            url: "/remove_coupon_code",
            data:
                "coupon_code=" +
                coupon_code +
                "&_token=" +
                jQuery("[name='_token']").val(),
            type: "post",
            success: function (result) {
                if (result.status == "success") {
                    jQuery(".show_coupon_box").addClass("hide");
                    jQuery("#coupon_code_str").html("");
                    jQuery("#total_price").html("TK " + result.totalPrice);
                    jQuery(".apply_coupon_code_box").show();
                } else {
                }
                jQuery("#coupon_code_msg").html(result.msg);
            },
        });
    }
}

jQuery("#frmPlaceOrder").submit(function (e) {
    jQuery("#thank_you_msg").html("please wait");
    e.preventDefault();
    //jQuery("#forgot_msg").html("");
    jQuery.ajax({
        url: "/place_order",
        data: jQuery("#frmPlaceOrder").serialize(),
        type: "post",
        success: function (result) {
            if (result.status == "success") {
                if (result.payment_url != "") {
                    window.location.href = result.payment_url;
                } else {
                    window.location.href = "/order_placed";
                }
            }
            jQuery("#order_place_msg").html(result.msg);
        },
    });
});
