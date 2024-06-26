jQuery(document).ready(function($) {
    // Function to move to the next component
    function goToNextComponent() {
        setSummary();
        var currentComponent = $('#composite_navigation_1197 .page_button.next');
        // console.log(currentComponent)
        if (currentComponent.length) {
            // Deactivate current component and activate the next one
            currentComponent[0].click();
        } else {
            console.log('No more components to go to!');
        }
    }

    function setSummary() {
        var qty = $( "[name='wccp_component_quantity[1717623436]']" );
        var size = $( '#summary_element_selection_1' );

        console.log("before: " +  $( '#summary_element_selection_1' ).text())
        console.log("new value " + qty.val() +" [cm]" );
        size.text(qty.val() +" [cm]" )

        console.log("after: " +  $( '#summary_element_selection_1' ).val())

        
    }

    // Example condition: Automatically go to the next component after selecting a product
    $('body').on('click','#next-component-button', function() {
        goToNextComponent();
    });

    


    // Observer to detect when the element is added to the DOM
    const bodyObserver = new MutationObserver(
        function(mutations, observer) {
        mutations.forEach(function(mutation) {
            // console.log(mutation);
            if (mutation.type === 'childList') {
                mutation.addedNodes.forEach(function(node) {
                    if (node.querySelector) {
                        const child = node.querySelector('#summary_element_selection_1');
                        if (child) {
                            var qty = $( "[name='wccp_component_quantity[1717623436]']" );
                            var size = $( '#summary_element_selection_1' );
                            size.text(qty.val() +" [cm]" )
                        }
                    }
                });
            }
        });
    });

    bodyObserver.observe(document.body, { childList: true, subtree: true });

    // Start observing the body for additions of child nodes

});
