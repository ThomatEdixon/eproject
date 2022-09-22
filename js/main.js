$('#section').load('../html/introduction.html');
$(document).ready(function () {
    $('#product').on('click', function () {
        $('.list-1').addClass('active');
        $('.list-2').removeClass('active');
        $('.list-3').removeClass('active');
        $.ajax({
            url: "../php/product.php",
            type: "get",
            dataType: "html",
            success: function (data) {
                $('#section').html(data)
            }
        });
    });
    $('.support').on('click', function () {
        $('.list-1').removeClass('active');
        $('.list-2').addClass('active');
        $('.list-3').removeClass('active');
        $.ajax({
            url: '../php/product-suport.php',
            type: 'get',
            dataType: 'html',
            success: function (data) {
                $('#section').html(data)
            }
        })
    })
    $('#product-1').on('click', function () {
        $('.list-1').addClass('active');
        $('.list-2').removeClass('active');
        $('.list-3').removeClass('active');
        $.ajax({
            url: "../php/product.php",
            type: "get",
            dataType: "html",
            success: function (data) {
                console.log(data);
                $('#section').html(data)
            }
        });
    });
    
    $('#contact').on('click', function () {
        $('.list-1').removeClass('active');
        $('.list-2').addClass('active');
        $('.list-3').removeClass('active');
        $.ajax({
            url: "../php/contact.php",
            type: "get",
            dataType: "html",
            success: function (data) {
                $('#section').html(data)
            }
        })

    });
    $('#aboutus').click(function () {
        $('.list-1').removeClass('active');
        $('.list-2').addClass('active');
        $('.list-3').removeClass('active');
        $.ajax({
            url: "../html/aboutus.html",
            type: "get",
            dataType: "html",
            success: function (data) {
                $('#section').html(data)
            }
        })
    })
    $("#support").click(function (e) {
        $('.list-1').removeClass('active');
        $('.list-2').addClass('active');
        $('.list-3').removeClass('active');
        $.ajax({
            url: '../php/product-suport.php',
            type: 'get',
            dataType: 'html',
            success: function (data) {
                $('#section').html(data)
            }
        })
    })
    $('#register').click(function () {
        $('.list-1').removeClass('active');
        $('.list-2').removeClass('active');
        $('.list-3').addClass('active');
        $.ajax({
            url:"../php/register.php",    
            type: "get",    
            dataType: 'html',
            success:function(data){
                console.log(data);
                $('#section').html(data);
            }
        });
    })
    $('#login').click(function(){
        $('.list-1').removeClass('active');
        $('.list-2').removeClass('active');
        $('.list-3').addClass('active');
        $.ajax({
            url:"../php/login.php",    
            type: "get",    
            dataType: 'html',
            success:function(data){
                console.log(data);
                $('#section').html(data);
            }
        });
    });
});