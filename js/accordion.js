//https://www.jamestease.co.uk/blether/accordion-using-css-animations//

('.accordion-trigger a').on('click', function(e) {
    e.preventDefault();

    // cache the link so you don't have to keep getting a jQuery object
    var triggerDOM = $(this);

    if(triggerDOM.hasClass('closed')) {

        // find the associated accordion content and add the open class to it to trigger the animation
        triggerDOM.closest('.accordion-trigger').next('.accordion-content').addClass('content-open');
        // update the trigger
        triggerDOM.removeClass('closed').addClass('open');

    } else if(triggerDOM.hasClass('open)) {

        // if the accordion is already open, then close it
        triggerDOM.removeClass('open').addClass('closed');
        // remove class from content to trigger close animation
        triggerDOM.closest('.accordion-trigger').next('.accordion-content').removeClass('content-open);
    }
});