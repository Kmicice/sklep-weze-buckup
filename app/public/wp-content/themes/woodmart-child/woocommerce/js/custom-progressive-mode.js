jQuery(document).ready(function($) {
    // Function to move to the next component
    const hoseLengthNode = '#summary_element_selection_3';
    const hoseLengthQuantity = "[name='wccp_component_quantity[1717623436]']";

    const fittinAngleNode = '#summary_element_selection_6';
    const fittinAngleQuantity = "[name='wccp_component_quantity[1719438742]']";

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
        var lengthQty = $( hoseLengthQuantity );
        var lengthSizeNode = $( hoseLengthNode );

        var angleQty = $( fittinAngleQuantity );
        var angleSizeNode = $( fittinAngleNode );

        lengthSizeNode.text(lengthQty.val() +" [cm]" )
        angleSizeNode.text(angleQty.val() +" [°]" )
    }

    // Example condition: Automatically go to the next component after selecting a product
    $('body').on('click','#next-component-button', function() {
        goToNextComponent();
    });

    // Observer to detect when the element is added to the DOM
    const bodyObserver = new MutationObserver(
        function(mutations, observer) {
        mutations.forEach(function(mutation) {
            if (mutation.type === 'childList') {
                mutation.addedNodes.forEach(function(node) {
                    if (node.querySelector) {
                        const lengthNode = node.querySelector(hoseLengthNode);
                        const angleNode = node.querySelector(fittinAngleNode);
                        if (lengthNode) {
                            var qty = $( hoseLengthQuantity );
                            var size = $( hoseLengthNode );
                            size.text(qty.val() +" [cm]" )
                        } else if (angleNode){
                            var qty = $( fittinAngleQuantity );
                            var size = $( fittinAngleNode );
                            size.text(qty.val() +" [°]" )
                        }
                    }
                });
            }
        });
    });

    bodyObserver.observe(document.body, { childList: true, subtree: true });

    // Start observing the body for additions of child nodes

});
