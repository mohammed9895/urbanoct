<div>
    <div id="authentication-modal" tabindex="-1" aria-hidden="true">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" wire:click="$dispatch('closeModal')" class="absolute top-3 right-2.5 rtl:right-auto rtl:left-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white rtl:text-right">{{ __('home.activities.register_model_title') }} {{  $activity->title ?? '' }}</h3>
                    <form class="space-y-6" wire:submit="register">
                        <div>
                            <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white rtl:text-right">{{ __('home.registration.fullname') }}</label>
                            <input type="text" wire:model="fullname" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-uo-pink focus:border-uo-pink block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            @error('fullname')
                                <div class="mt-2 text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="organization" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white rtl:text-right">{{ __('home.registration.organization') }}</label>
                            <input type="text" wire:model="organization" id="organization" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-uo-pink focus:border-uo-pink block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            @error('organization')
                                <div class="mt-2 text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="field" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white rtl:text-right">{{ __('home.registration.profession') }}</label>
                            <input type="text" wire:model="field" id="field" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-uo-pink focus:border-uo-pink block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            @error('field')
                                <div class="mt-2 text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="contact_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white rtl:text-right">{{ __('home.registration.contact_number') }}</label>
                            <input type="number" wire:model="contact_number" id="contact_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-uo-pink focus:border-uo-pink block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            @error('contact_number')
                                <div class="mt-2 text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white rtl:text-right">{{ __('home.registration.email') }}</label>
                            <input type="email" wire:model="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-uo-pink focus:border-uo-pink block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            @error('email')
                                <div class="mt-2 text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (session()->has('success'))
                            <div
                                class="mt-2 bg-green-300 text-green-700 p-6 rounded-lg"> {{ session('success') }}</div>
                        @endif
                        <button type="submit" class="w-full text-white bg-uo-pink hover:bg-uo-green focus:ring-4 focus:outline-none focus:ring-uo-green font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-uo-green dark:hover:bg-uo-pink dark:focus:ring-blue-800">{{ __('home.activities.register_button') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
