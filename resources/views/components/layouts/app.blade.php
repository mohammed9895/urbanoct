<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'en' ? 'lrt' : 'rtl' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>
<body class="font-Rubik">

    <x-partials.header />

    {{ $slot }}

    <x-partials.footer />
    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/floating.js/2.6.2/floating.js" integrity="sha512-n5IYFs4Ln9LoU6l75MoZTy7NpnqEo2PmYxJoiQOmPpsk/epcOX2ozdTJ9mEV29spCJTugzsH8mOx2nkVQ8cZdg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        floating({
            content: "<img src='{{asset('images/main.svg')}}' />",
            number: 3,
            direction: 'normal',
            duration: 11,
            repeat: 1,
            size: 5,
        });
        floating({
            content: "<img src='{{asset('images/main2.svg')}}' />",
            number: 5,
            direction: 'normal',
            duration: 8,
            repeat: 1,
            size: 6,
        });
        floating({
            content: "<img src='{{asset('images/main3.svg')}}' />",
            number: 3,
            direction: 'normal',
            duration: 15,
            repeat: 1,
            size: 7,
        });
        floating({
            content: "<img src='{{asset('images/main4.svg')}}' />",
            number: 3,
            repeat: 1,
            direction: 'normal',
            duration: 3,
            repeat: 1,
            size: 8,
        });
    </script>
</body>
</html>
