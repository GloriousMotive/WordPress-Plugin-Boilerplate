// Adds the functionality to dismiss the Notifiction Banner
jQuery(document).ready(function($) {
    $('#dismiss-banner').on('click', function(e) {
        e.preventDefault();
        $('#plugin-notification').hide(); // or use .remove() if you want to remove it from the DOM
    });
});
