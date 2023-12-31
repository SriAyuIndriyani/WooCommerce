import widgetBuilder from "./WidgetBuilder";

class MessageRenderer {

    constructor(config) {
        this.config = config;
        this.optionsFingerprint = null;
        this.currentNumber = 0;
    }

    renderWithAmount(amount) {
        if (! this.shouldRender()) {
            return;
        }

        const options = {
            amount,
            placement: this.config.placement,
            style: this.config.style
        };

        // sometimes the element is destroyed while the options stay the same
        if (document.querySelector(this.config.wrapper).getAttribute('data-render-number') !== this.currentNumber.toString()) {
            this.optionsFingerprint = null;
        }

        if (this.optionsEqual(options)) {
            return;
        }

        const newWrapper = document.createElement('div');
        newWrapper.setAttribute('id', this.config.wrapper.replace('#', ''));
        this.currentNumber++;
        newWrapper.setAttribute('data-render-number', this.currentNumber);

        const oldWrapper = document.querySelector(this.config.wrapper);
        const sibling = oldWrapper.nextSibling;
        oldWrapper.parentElement.removeChild(oldWrapper);
        sibling.parentElement.insertBefore(newWrapper, sibling);

        widgetBuilder.registerMessages(this.config.wrapper, options);
        widgetBuilder.renderMessages(this.config.wrapper);
    }

    optionsEqual(options) {
        const fingerprint = JSON.stringify(options);

        if (this.optionsFingerprint === fingerprint) {
            return true;
        }

        this.optionsFingerprint = fingerprint;
        return false;
    }

    shouldRender() {

        if (typeof paypal === 'undefined' || typeof paypal.Messages === 'undefined' || typeof this.config.wrapper === 'undefined' ) {
            return false;
        }
        if (! document.querySelector(this.config.wrapper)) {
            return false;
        }
        return true;
    }
}
export default MessageRenderer;
