export class Component {
  constructor() {
    this.handleClick = this.handleClick.bind(this);
  }

  init() {
    this.start();
  }

  start() {
    this.setUpClick();
  }

  setUpClick() {
    document.body.addEventListener('click', this.handleClick);
  }

  handleClick(event) {
    console.log('Hello World!');
  }

  destroy() {
    document.body.removeEventListener('click', this.handleClick);
  }
}
