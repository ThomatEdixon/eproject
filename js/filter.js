$(document).ready(function() {
    $('.category-name-1').click(function() {
        $('.all-option').removeClass('none');
        $('.option-category').removeClass('none');
        $('.Modern').attr('checked', 'checked');
        var category = $('input[name=category]');
        var valuecategory = category.filter(":checked").val();
        document.querySelector('.option-category').value = valuecategory;
    })
    $('.category-name-2').click(function() {
        $('.all-option').removeClass('none');
        $('.option-category').removeClass('none');
        $('.Classic').attr('checked', 'checked');
        var category = $('input[name=category]');
        var valuecategory = category.filter(":checked").val();
        document.querySelector('.option-category').value = valuecategory;
    })
    $('.category-name-3').click(function() {
        $('.all-option').removeClass('none');
        $('.option-category').removeClass('none');
        $('.Future').attr('checked', 'checked');
        var category = $('input[name=category]');
        var valuecategory = category.filter(":checked").val();
        document.querySelector('.option-category').value = valuecategory;
    })
    $('.category-name-4').click(function() {
        $('.all-option').removeClass('none');
        $('.option-category').removeClass('none');
        $('.Popular').attr('checked', 'checked');
        var category = $('input[name=category]');
        var valuecategory = category.filter(":checked").val();
        document.querySelector('.option-category').value = valuecategory;
    })
    $('.brand-name-1').click(function() {
        $('.all-option').removeClass('none');
        $('.option-brand').removeClass('none');
        $('.Panasonic').attr('checked', 'checked');
        var brand= $('input[name=brand]');
        var valuebrand= brand.filter(":checked").val();
        document.querySelector('.option-brand').value = valuebrand;
    })
    $('.brand-name-2').click(function() {
        $('.all-option').removeClass('none');
        $('.option-brand').removeClass('none');
        $('.Senko').attr('checked', 'checked');
        var brand= $('input[name=brand]');
        var valuebrand= brand.filter(":checked").val();
        document.querySelector('.option-brand').value = valuebrand;
    })
    $('.brand-name-3').click(function() {
        $('.all-option').removeClass('none');
        $('.option-brand').removeClass('none');
        $('.Morgana').attr('checked', 'checked');
        var brand= $('input[name=brand]');
        var valuebrand= brand.filter(":checked").val();
        document.querySelector('.option-brand').value = valuebrand;
    })
    $('.brand-name-4').click(function() {
        $('.all-option').removeClass('none');
        $('.option-brand').removeClass('none');
        $('.Hunter').attr('checked', 'checked');
        var brand= $('input[name=brand]');
        var valuebrand= brand.filter(":checked").val();
        document.querySelector('.option-brand').value = valuebrand;
    })
    $('.brand-name-5').click(function() {
        $('.all-option').removeClass('none');
        $('.option-brand').removeClass('none');
        $('.Another').attr('checked', 'checked');
        var brand= $('input[name=brand]');
        var valuebrand= brand.filter(":checked").val();
        document.querySelector('.option-brand').value = valuebrand;
    })
    $('.type-name-1').click(function() {
        $('.all-option').removeClass('none');
        $('.option-type').removeClass('none');
        $('.TreeFan').attr('checked', 'checked');
        var type= $('input[name=type]');
        var valuetype= type.filter(":checked").val();
        document.querySelector('.option-type').value = valuetype;
    });
    $('.type-name-2').click(function() {
        $('.all-option').removeClass('none');
        $('.option-type').removeClass('none');
        $('.CeilingFan').attr('checked', 'checked');
        var type= $('input[name=type]');
        var valuetype= type.filter(":checked").val();
        document.querySelector('.option-type').value = valuetype;
    });
    $('.type-name-3').click(function() {
        $('.all-option').removeClass('none');
        $('.option-type').removeClass('none');
        $('.HandFan').attr('checked', 'checked');
        var type= $('input[name=type]');
        var valuetype= type.filter(":checked").val();
        document.querySelector('.option-type').value = valuetype;
    });
    $('.btn-filter').click(function(e) {
        e.preventDefault();
        $('.product-filter-sussecc').removeClass('none');
        $('.product-filter').addClass('none');
    })
})