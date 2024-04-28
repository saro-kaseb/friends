<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:myProfile.info />
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl m-3 space-y-1">
                    <x-responsive-nav-link :href="route('dashboard')" wire:navigate>
                        {{ __('Post') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('dashboard')" wire:navigate>
                        {{ __('Story') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('dashboard')" wire:navigate>
                        {{ __('Like') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('dashboard')" wire:navigate>
                        {{ __('Comment') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('dashboard')" wire:navigate>
                        {{ __('Follow Request') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('dashboard')" wire:navigate>
                        {{ __('Chat') }}
                    </x-responsive-nav-link>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
