//
//  Global dependencies

/* global lazySizes */
import 'lazysizes';

//
//  Base

// import { keyboardFocus } from './global/keyboardFocus';

//
//  Components

import { Component } from './components/Component';

//
//  Utilities

import { browserSupports } from './global/utilities/browserSupports';
import { loadScript } from './global/utilities/loadScript';

function init() {
  //  Handle Polyfills
  //  See: https://philipwalton.com/articles/loading-polyfills-only-when-needed/
  if (
    browserSupports([
      window.Promise,
      window.fetch,
      Array.from,
      window.HTMLPictureElement,
    ])
  ) {
    main();
  } else {
    loadScript(
      `${window.top.location.protocol.toString()}//${window.top.location.host.toString()}/assets/js/build/polyfills.js`,
      main
    );
  }
}

function main(error = false) {
  //  Error handling from polyfill script
  if (error) console.error(error);

  //  Run global first
  // keyboardFocus.init();

  //  Then components
  new Component().init();

  //  Run LazySizes now all plugins from polyfills will have loaded
  lazySizes.init();
}

//  Run
init();
