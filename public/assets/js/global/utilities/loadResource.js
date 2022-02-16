/*------------------------------------------------------------------------------

  loadResource.js

  Can create any kind of resource with a set of attributes and load it in the
  head of the page. Runs as a promise that fulfils on load.

  Usage:

  async loadResources() {
    const scriptResource = loadResource('script', {
      src: 'https://example.com/script.js',
      type: 'text/javascript',
      async: 'true',
    });

    const styleResource = loadResource('link', {
      href: 'https://example.com/style.css',
      rel: 'stylesheet',
    });

    await Promise.all([scriptResource, styleResource]);

    console.log('Resources are loaded');
  }

  ----------------------------------------------------------------------------*/

export function loadResource(type, attributes) {
  //  1. Return a promise
  return new Promise((resolve, reject) => {
    //  2. Create the element
    const element = document.createElement(type);

    //  3. Add all the attributes
    for (const [key, value] of Object.entries(attributes)) {
      element.setAttribute(key, value);
    }

    //  4. Add to body
    document.head.appendChild(element);

    //  5. Resolve on load
    element.addEventListener('load', () => {
      resolve();
    });

    //  6. Reject on error
    element.addEventListener('error', () => {
      reject(console.error(`Script failed to load.`));
    });
  });
}
