<?php ?>
<div class="shopify">
  <div class="cart">
    <div class="cart-section cart-section--top"><h2 class="cart-title">Your cart</h2><button class="btn--close"><span aria-role="hidden">×</span><span class="show-for-sr">Close</span></button></div>
    <div class="cart-form">
      <div class="cart-item-container cart-section"></div>
      <div class="cart-bottom">
        <div class="cart-info clearfix cart-section">
          <div class="type--caps cart-info__total cart-info__small">Total</div>
          <div class="cart-info__pricing"><span class="cart-info__small cart-info__total">CAD</span><span class="pricing pricing--no-padding"></span></div>
        </div>
        <div class="cart-actions-container cart-section type--center">
          <div class="cart-discount-notice cart-info__small">Shipping and discount codes are added at checkout.</div>
          <div><input type="submit" class="btn btn--cart-checkout" id="checkout" name="checkout" value="Checkout"></div>
        </div>
      </div>
    </div>
  </div>
  <div><button class="btn btn--cart-tab"><span class="btn__counter"></span><svg xmlns="http://www.w3.org/2000/svg" class="icon-cart icon-cart--side" viewBox="0 0 25 25" enable-background="new 0 0 25 25"><g fill="#fff"><path d="M24.6 3.6c-.3-.4-.8-.6-1.3-.6h-18.4l-.1-.5c-.3-1.5-1.7-1.5-2.5-1.5h-1.3c-.6 0-1 .4-1 1s.4 1 1 1h1.8l3 13.6c.2 1.2 1.3 2.4 2.5 2.4h12.7c.6 0 1-.4 1-1s-.4-1-1-1h-12.7c-.2 0-.5-.4-.6-.8l-.2-1.2h12.6c1.3 0 2.3-1.4 2.5-2.4l2.4-7.4v-.2c.1-.5-.1-1-.4-1.4zm-4 8.5v.2c-.1.3-.4.8-.5.8h-13l-1.8-8.1h17.6l-2.3 7.1z"></path><circle cx="9" cy="22" r="2"></circle><circle cx="19" cy="22" r="2"></circle></g></svg></button></div>
  <div style="display:none;" id="cart-item-template">
    <div class="cart-item">
      <div class="cart-item__img"></div>
      <div class="cart-item__content">
        <div class="cart-item__content-row"><div class="cart-item__variant-title"></div><span class="cart-item__title"></span></div>
        <div class="cart-item__content-row"><div class="cart-item__quantity-container"><button class="btn--seamless quantity-decrement" type="button"><span>-</span><span class="show-for-sr">Decrement</span></button><input class="cart-item__quantity" type="number" min="0" aria-label="Quantity"><button class="btn--seamless quantity-increment" type="button"><span>+</span><span class="show-for-sr">Increment</span></button></div><span class="cart-item__price"></span></div>
      </div>
    </div>
  </div>
</div>
