( function() {
  var nav_links = document.querySelectorAll( '.nav-link' );
  nav_links.forEach( function( nav_link ) {
    nav_link.addEventListener( 'click', function( evt ) {
      active_nav_link = document.querySelector( '.nav-link.active' );
      if( active_nav_link ) {
        active_nav_link.classList.remove( 'active' );
      }
      this.classList.add( 'active' );
    } );
  } );
} )();

// JavaScript for disabling form submissions if there are invalid fields
( function() {

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll( '.needs-validation' )

  // Loop over them and prevent submission
  Array.prototype.slice.call( forms )
    .forEach( function ( form ) {
      form.addEventListener( 'submit', function( evt ) {
        evt.preventDefault()
        evt.stopPropagation()
        if( form.checkValidity() ) {
          var formData = new FormData( form );
          var xhr = new XMLHttpRequest();
          xhr.open( 'POST', 'form_handler_evc.php', true );
          xhr.onload = function( xhr_event ) {
            if ( xhr.status == 200 ) {
              console.log( 'succes' );
            } else {
              console.log( 'fail' );
            }
          };
          xhr.send(formData);
        }
        form.classList.add( 'was-validated' )
      }, false)
    })
} )();
