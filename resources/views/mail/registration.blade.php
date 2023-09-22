<x-mail::message style="@if(app()->getLocale() == 'ar') text-align:right; @endif">
{{ __('home.mail.registration.content', ['fullname' => $fullname]) }}
</x-mail::message>
