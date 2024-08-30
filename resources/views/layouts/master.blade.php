<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KHB8RSGW');
    </script>

    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 5112267,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <title>eScooter</title>

    <link rel="icon" href="{{ asset('images/icon.png') }}" type="image/gif" sizes="16x16" />

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta content="eScooter" name="description" />
    <meta content="eScooter Your Trusted Motorcycle Rental Service in Bali" name="keywords" />
    <meta content="eScooter" name="author" />

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="{{ asset('css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/coloring.css') }}" rel="stylesheet" type="text/css" />

    <link id="colors" href="{{ asset('css/colors/scheme-01.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHB8RSGW" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <div id="wrapper">
        <div class="float-text show-on-scroll">
            <span><a href="#">Scroll to top</a></span>
        </div>
        <div class="scrollbar-v show-on-scroll"></div>

        <div id="de-loader"></div>

        <x-header />

        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            {{ $slot }}
        </div>

        <x-footer />

        <div id="buy-now" class="show-on-scroll">
            <a class="btn-buy" onclick="floatingButton()" data-bs-toggle="tooltip" data-bs-placement="left"
                data-bs-title="Need help? Chat with us" data-bs-custom-class="custom-tooltip">
                <i class="icofont-brand-whatsapp"></i>
            </a>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/Isotope.js') }}"></script>
    <script src="{{ asset('js/mdb5.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/skroller.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.js') }}"></script>
    <script src="{{ asset('js/inquer.js') }}"></script>
    <script src="{{ asset('js/jaralax.js') }}"></script>
    <script src="{{ asset('js/countto.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/jqueryzepto.js') }}"></script>
    <script src="{{ asset('js/jquerycookie.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/jquerycircleprogress.js') }}"></script>
    <script src="{{ asset('js/videoworker.js') }}"></script>
    <script src="{{ asset('js/elementjaralax.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/cookit.js') }}"></script>
    <script src="{{ asset('js/marque.js') }}"></script>
    <script src="{{ asset('js/select2.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/custom-marquee.js') }}"></script>
    <script src="{{ asset('js/custom-swiper-1.js') }}"></script>

    <script>
        "use strict";

        const phoneNumber = '628121333064';

        const tooltipTriggerList = document.querySelectorAll(
            '[data-bs-toggle="tooltip"]'
        );
        const tooltipList = [...tooltipTriggerList].map(
            (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
        );

        const floatingButton = () => {
            handleVisit('WhatsApp');
            const textMessage =
                'Hello, E-Scooter!🛵 I’ve been hearing amazing things about your motorcycle rentals in Bali. Could you tell me more about what you offer? Appreciate it! ✨🌴';
            window.open(
                `https://api.whatsapp.com/send/?phone=${encodeURIComponent(phoneNumber)}&text=${encodeURIComponent(textMessage)}`,
                '_blank');
        }

        const handleVisit = (button = null, scooter = '') => {
            const data = {
                _token: '{{ csrf_token() }}'
            };

            if (button) {
                data.button = button;
                data.scooter = scooter;
            }

            $.ajax({
                url: '{{ route('visitCounter') }}',
                type: 'POST',
                data: data,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log('Action completed successfully:', response.message);
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        }

        const bookRent = () => {
            handleVisit('Book Rent');
            window.open(`https://api.whatsapp.com/send?phone=628121333064&text=Hey%20e-Scooter!%20%F0%9F%8C%9E%20I%E2%80%99m%20interested%20in%20renting%20scooters.%20Would%20love%20to%20know%20about%20prices%2C%20rentals%2C%20and%20delivery.%20Cheers!%20%F0%9F%9A%B2`, '_blank');
        }

        const visitCounter = () => {
            handleVisit();
        }

        $(document).ready(function() {
            visitCounter();
        });
    </script>
</body>
