$(document).ready(function() { 
  var field_validators = {};
  field_validators['contact-form-comment'] = {
      validators: {
          notEmpty: {
              message: 'Vergeet uw vraag niet…'
          }
      }   
  };
  $.each( [ 'dru_yoga-form_lessen_amsterdam', 'meditatie-form_lessen_amsterdam', 'events-form', 'agenda-form', 'contact-form' ], function( index, arr_el ) {
    var arr_el_email = arr_el + '-email';
    var arr_el_name = arr_el + '-name';
    field_validators[arr_el_email] = {
        validators: {
            notEmpty: {
                message: 'Voor bevestiging hebben wij minimaal een emailadres nodog…'
            },
            emailAddress: {
                message: 'Dit is geen geldig email-adres.'
            }
        }   
    };
    field_validators[arr_el_name] = {
        validators: {
            notEmpty: {
                message: 'Vergeet uw naam svp niet…'
            }
        }   
    };
    $( '#' + arr_el ).bootstrapValidator({
      feedbackIcons: {
        valid: 'glyphicon glyphicon-ok',
        invalid: 'glyphicon glyphicon-remove',
        validating: 'glyphicon glyphicon-refresh'
      },
      message: 'This value is not valid',
      live: 'enabled',
      fields: field_validators,
      onSuccess: function(e) {
        e.preventDefault();
        var form_values = $( '#' + arr_el ).serialize();
        var jqxhr = $.post( "form_handler.php", form_values, function() {
          //On success: Just silently do the post
        })
        .done( function() {
          $( '#confirm_sent_popup' ).modal( 'show' );
          $( '#' + arr_el + ' input' ).val('');
          $( '#' + arr_el ).data( 'bootstrapValidator' ).resetForm();
        })
        .fail( function() {
          $( '#error_popup' ).modal( 'show' );
        });
      }
    })
    
  });
});

