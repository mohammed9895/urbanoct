<div>
    <x-partials.title :title="$title"/>
    <section class="container mx-auto mt-20 px-4 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($activities as $activity)
                <div>
                    <div class="w-full h-96 rounded-lg border border-slate-400"
                         style="background: url('{{ asset('images/slider/1.jpg') }}'); background-size: cover"></div>
                    <div class="flex justify-start items-center mt-4 text-sm">
                        <div class="mr-3 rtl:ml-3 rtl:mr-0 text-slate-400">
                            {{ $activity->timing }}
                        </div>
                        <div class="bg-slate-100 rounded-full px-3 py-2 text-slate-500">
                            {{ $activity->location }}
                        </div>
                    </div>
                    <h1 class="mt-3 text-2xl font-bold">{{ $activity->title }}</h1>
                    <p class="mt-2 text-slate-500">
                        {{ $activity->description }}
                    </p>
                    <a wire:click="$dispatch('openModal', { component: 'frontend.regsiter-model', arguments: { activity: {{$activity}} } })" class="inline-block mt-3 p-3 bg-uo-red rounded-md text-white hover:bg-uo-green transition cursor-pointer">{{ __('home.activities.register_button') }}</a>
                </div>
            @endforeach
        </div>
    </section>
</div>
