export class BaseComponent {
  static capitalize([firstLetter, ...restOfString]) {
    return firstLetter.toUpperCase() + restOfString.join('');
  }

  handleEvent(event) {
    //  `mouseenter` > `Mouseenter`
    const type = BaseComponent.capitalize(event.type);

    //  If the handler exists on the class
    if (typeof this[`handle${type}`] === 'function') {
      //  Send it
      this[`handle${type}`](event);
    }
  }
}
