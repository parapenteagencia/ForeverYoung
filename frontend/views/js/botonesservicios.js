jQuery(document).ready(function($){

    $('#beautySalon').show();
    $('#beautySpa').hide();
    $('#beautyWeedings').hide();

    $('#bs1').click(function(){

        $('#beautySalon').show();
        $('#beautySpa').hide();
        $('#beautyWeedings').hide();

    });

    $('#bs2').click(function(){

        $('#beautySalon').hide();
        $('#beautySpa').show();
        $('#beautyWeedings').hide();

    });

    $('#bs3').click(function(){

        $('#beautySalon').hide();
        $('#beautySpa').hide();
        $('#beautyWeedings').show();

    });

});


