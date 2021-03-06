# bkash-laravel-package
<p align="center"><a href="https://github.com/ConcaveIT/bkash-laravel-package" target="_blank"><img src="https://www.bkash.com/sites/all/themes/bkash/logo.png?87980"></a></p>
<p align="center">
    Laravel bKash integration package!
</p>
<h2>Installation</h2>
<p><b>Step 01:</b> Run Command <code>composer require concave/bkash</code></p>
<p><b>Step 02:</b> Run Command <code>php artisan migrate</code></p>
<p><b>Step 03:</b> Run Command <code>php artisan vendor:publish --tag=public --force</code></p>
<p><b>Step 04:</b> Open public/concave/config.json and fill with your credentials!</code></p>
<p><b>Step 05:</b> Add Payment Button with mandatory attributes, <code> data-payment-amount="" data-invoice-number="" data-payment-intent="" id="bKash_button"</code><p>
<p>For example, data-payment-amount="" is your payment amount like data-payment-amount="200"  , data-invoice-number="" is your unique invoice number like data-invoice-number="EXT00354KHF" and data-payment-intent="" is intent like as data-payment-intent="sale"</p>

<p><b>Add Following code in footer</b></p>
<code><script src="https://code.jquery.com/jquery-1.8.3.min.js"  integrity="sha256-YcbK69I5IXQftf/mYD8WY0/KmEDCv1asggHpJk1trM8=" crossorigin="anonymous"></script> </code><br><br>
<code> <script id="myScript"  src="https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js"></script></code><br><br>
<code> <script> var base_url = "{{ url('/') }}"; var csrf = "{{ csrf_token() }}"; </script></code><br><br>
<code> <script src="{{ asset('concave/bkash.js') }}"></script></code><br><br>
