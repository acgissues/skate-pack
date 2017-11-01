(function($){
    $(function(){

        $('.button-collapse').sideNav();
        $('.parallax').parallax();
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 100, // Creates a dropdown of 15 years to control year,
            today: 'Hoy',
            format: 'yyyy-mm-dd',
            clear: 'Limpiar',
            close: 'Ok',
            closeOnSelect: false // Close upon selecting a date,
        });

    }); // end of document ready

})(jQuery); // end of jQuery name space
