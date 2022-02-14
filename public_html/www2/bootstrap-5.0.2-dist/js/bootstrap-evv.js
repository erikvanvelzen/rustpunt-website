nav_links = document.querySelectorAll( '.nav-link' );
nav_links.forEach( function( nav_link ) {
  nav_link.addEventListener( 'click', function( evt ) {
    active_nav_link = document.querySelector( '.nav-link.active' );
    if( active_nav_link ) {
      active_nav_link.classList.remove( 'active' );
    }
    this.classList.add( 'active' );
  } );
} );
