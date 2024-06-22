jQuery(document).ready(function($) {
    // Function to move to the next component
    function goToNextComponent() {
        var currentComponent = $('#composite_navigation_1197 .page_button.next');
        var qty = $( "[name='wccp_component_quantity[1717623436]']" );
        var size = $( '#summary_element_selection_1' );
        console.log(qty.val());
        console.log(size);
        size.text(qty.val() +" [cm]" )
        // console.log(currentComponent)
        if (currentComponent.length) {
            // Deactivate current component and activate the next one
            currentComponent[0].click();
        } else {
            console.log('No more components to go to!');
        }
    }

    // Example condition: Automatically go to the next component after selecting a product
    $('body').on('click','#next-component-button', function() {
        goToNextComponent();
    });
});

 //ustawic zeby na poczatku bylo default value