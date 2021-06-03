    <footer class="Footer" role="contentinfo">
    </footer>

    <?php
    //  Sizing Element
    ?>
    <div class="hidden" data-sizing-element></div>

    <?php
    //  JS

    //  Stop LazySizes from running automatically so plugins have a chance to load in browsers that need polyfills.
    //  See: https://github.com/aFarkas/lazysizes
    ?>
    <script>
      window.lazySizesConfig = window.lazySizesConfig || {};
      window.lazySizesConfig.init = false;
    </script>
    <?= js('assets/js/build/bundle.js?ver=' . filemtime('assets/js/build/bundle.js')); ?>

  </body>
</html>
