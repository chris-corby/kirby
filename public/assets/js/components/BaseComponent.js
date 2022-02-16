import camelCase from 'just-camel-case';

export class BaseComponent {
  handleEvent(event) {
    //  `handle-page-loader:load` > `handlePageLoaderLoad`
    const type = camelCase(`handle-${event.type}`);

    //  If the handler exists on the class
    if (typeof this[type] === 'function') {
      //  Send it
      this[type](event);
    }
  }
}
