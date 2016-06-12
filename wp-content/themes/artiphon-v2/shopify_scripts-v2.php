<?php ?>

<script type="text/javascript">

    jQuery(document).ready(function() {

        var theShopifyID = jQuery('#product').attr('data-shopify-id');

        var client = ShopifyBuy.buildClient({
          apiKey: '3c62d5e2c648655996660c5f9782ddd6',
          myShopifyDomain: 'artiphon',
          appId: '6'
        });

        client.fetchProduct(theShopifyID).then(function (product) {
          var selectedVariant = product.selectedVariant;
          var selectedVariantImage = product.selectedVariantImage;
          var currentOptions = product.options;

          var variantSelectors = generateSelectors(product);
          jQuery('.variant-selectors').html(variantSelectors);

          updateProductTitle(product.title);
          updateVariantImage(selectedVariantImage);
          updateVariantTitle(selectedVariant);
          updateVariantPrice(selectedVariant);

          attachBuyButtonListeners(product);
          attachOnVariantSelectListeners(product);

        });

        function generateSelectors(product) {
          var elements = product.options.map(function(option) {
            return '<select name="' + option.name + '">' + option.values.map(function(value) {
              return '<option value="' + value + '">' + value + '</option>';
            }) + '</select>';
          });

          return elements;
        }

        function attachOnVariantSelectListeners(product) {
          jQuery('.variant-selectors').on('change', 'select', function(event) {
            var $element = jQuery(event.target);
            var name = $element.attr('name');
            var value = $element.val();
            product.options.filter(function(option) {
              return option.name === name;
            })[0].selected = value;

            var selectedVariant = product.selectedVariant;
            var selectedVariantImage = product.selectedVariantImage;
            updateProductTitle(product.title);
            updateVariantImage(selectedVariantImage);
            updateVariantTitle(selectedVariant);
            updateVariantPrice(selectedVariant);
          });
        }

        function updateProductTitle(title) {
          jQuery('#product .product-title').text(title);
        }

        function updateVariantImage(image) {
          jQuery('#product .variant-image').attr('src', image.src);
        }

        function updateVariantTitle(variant) {
          jQuery('#product .variant-title').text(variant.title);
        }

        function updateVariantPrice(variant) {
          jQuery('#product .variant-price').text('$' + variant.price);
        }

        function attachBuyButtonListeners(product) {
          jQuery('.buy-button').on('click', function (event) {
            event.preventDefault();
            window.location.href = product.selectedVariant.checkoutUrl(1);
          });
        }

    });

</script>
