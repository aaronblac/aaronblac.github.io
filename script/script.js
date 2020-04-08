(function ($) {

  'use strict';

  // Contact form.
  $('.contact-form').each(function () {
    var $contact_form = $(this);
    var $contact_button = $contact_form.find('.form-submit');
    var contact_action = 'submit.php';

    // Display the hidden form.
    $contact_form.removeClass('hidden');


    // Wait for a mouse to move, indicating they are human.
    $('body').mousemove(function () {
      // Unlock the form.
      $contact_form.attr('action', contact_action);
      $contact_button.attr('disabled', false);
    });

    // Wait for a touch move event, indicating that they are human.
    $('body').on('touchmove', function () {
      // Unlock the form.
      $contact_form.attr('action', contact_action);
      $contact_button.attr('disabled', false);
    });

    // A tab or enter key pressed can also indicate they are human.
    $('body').keydown(function (e) {
      if ((e.keyCode === 9) || (e.keyCode === 13)) {
        // Unlock the form.
        $contact_form.attr('action', contact_action);
        $contact_button.attr('disabled', false);
      }
    });

  });

})(jQuery);
