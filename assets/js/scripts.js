jQuery(document).ready(function($) {

    // Gravity Forms contact form (ID 1): keep the form on screen after an AJAX submission.
    // GF swaps the whole form for the confirmation message, so a clean copy of the form
    // is put back underneath the message.
    var contactFormId = 1;
    var $contactForm = $('#gform_wrapper_' + contactFormId);

    if ($contactForm.length) {
        var $cleanForm = $contactForm.clone();
        $cleanForm.find('.ginput_counter').remove();
        var cleanFormHtml = $cleanForm.prop('outerHTML');

        $(document).on('gform_confirmation_loaded', function(event, formId) {
            if (parseInt(formId, 10) !== contactFormId) {
                return;
            }

            var $confirmations = $('.biax-gform .gform_confirmation_wrapper');
            var $confirmation = $confirmations.last();

            // Drop the message and anchor left over from an earlier submission
            $confirmations.not($confirmation).remove();
            $('.biax-gform .gform_anchor').not(':last').remove();

            if (!$('#gform_wrapper_' + contactFormId).length) {
                $confirmation.after(cleanFormHtml);
            }
        });
    }

});
