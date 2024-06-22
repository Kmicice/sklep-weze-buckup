jQuery(document).ready(function($) {
    // Function to move to the next component
    function setInitialSummary() {
        console.log("initial setup")
        var step1 = $( '#summary_element_selection_1' );
        var step2 = $( '#summary_element_selection_2' );
        var step3 = $( '#summary_element_selection_3' );
        var step4 = $( '#summary_element_selection_4' );
        if (step1.length) {
            console.log("initial setup 1")
            step1.text("-")
        } 
        if (step2.length) {
            step2.text("-")
        } 
        if (step3.length) {
            step3.text("-")
        } 
        if (step4.length) {
            step4.text("-")
        } 
    }

    // Example condition: Automatically go to the next component after selecting a product
    $(window).on('load', function(){
        if($('#product-1197').length)
        setInitialSummary();
    });
});