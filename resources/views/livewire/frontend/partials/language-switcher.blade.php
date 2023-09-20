<div>
    @if (session()->get('locale') == 'en')
        <a href="{{ route('language.switch', 'ar') }}" class=" md:hidden inline-flex justify-center rounded-2xl bg-uo-blue p-4 text-base font-semibold text-white hover:bg-uo-green focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70" wire:navigate>
            AR
        </a>
    @else
        <a href="{{ route('language.switch', 'en') }}" class="md:hidden inline-flex justify-center rounded-2xl bg-uo-blue p-4 text-base font-semibold text-white hover:bg-uo-green focus:outline-none focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 active:text-white/70" wire:navigate>
            EN
        </a>
    @endif
</div>
