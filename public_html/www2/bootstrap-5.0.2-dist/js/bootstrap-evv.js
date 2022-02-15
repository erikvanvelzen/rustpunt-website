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
        if( !form.checkValidity() ) {
          evt.preventDefault()
          evt.stopPropagation()
        }
        form.classList.add( 'was-validated' )
      }, false)
    })
} )();
