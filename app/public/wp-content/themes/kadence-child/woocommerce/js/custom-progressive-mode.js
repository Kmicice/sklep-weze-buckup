jQuery(document).ready(function($) {
    // Function to move to the next component
    function goToNexttComponent() {
        var currentComponent = $('#composite_navigation_1197 .page_button.next');
        console.log("in function")
        
        // Find the next component

        console.log(currentComponent)
        
        if (currentComponent.length) {
            // Deactivate current component and activate the next one
            currentComponent[0].click();
        } else {
            console.log('No more components to go to!');
        }
    }

    // Example condition: Automatically go to the next component after selecting a product
    $('#next-component-button').on('click', function() {
        goToNexttComponent();
    });
});