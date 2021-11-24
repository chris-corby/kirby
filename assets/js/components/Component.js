import { BaseComponent } from './BaseComponent';

export class Component extends BaseComponent {
  constructor() {
    super();
    this.id = 'the id';

    //  Debounce / Throttle
    // this.handleMousemove = debounce(this.handleMousemove, 250);
  }

  init() {
    document.body.addEventListener('click', this, {
      capture: true,
    });
    document.body.addEventListener('mousemove', this);
  }

  handleClick(event) {
    //  Event data
    console.log(event);

    //  Access to `this`
    console.log(this.id);

    //  Distribute to other functions depending on the target...
  }

  handleMousemove(event) {
    console.log(event);
    console.log(this.id);
  }

  destroy() {
    document.body.removeEventListener('click', this, {
      capture: true,
    });
    document.body.removeEventListener('mousemove', this);
  }
}
