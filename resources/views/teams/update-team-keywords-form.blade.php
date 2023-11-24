<x-form-section submit="updateTeamKeywords">
    <x-slot name="title">
        {{ __('Team Keyword Tracking') }}
    </x-slot>

    <x-slot name="description">
        {{ __('The team\'s keywords for rank tracking.') }}
    </x-slot>

    <x-slot name="form">

        <!-- Keywords -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="keywords" value="{{ __('Keyword Tracking') }}" />

            <x-input id="keywords"
                        type="text"
                        class="block w-full mt-1"
                        wire:model="state.keywords"
                        :disabled="! Gate::check('update', $team)" />

            <x-input-error for="keywords" class="mt-2" />
        </div>
    </x-slot>

    @if (Gate::check('update', $team))
        <x-slot name="actions">
            <x-action-message class="mr-3" on="saved">
                {{ __('Saved.') }}
            </x-action-message>

            <x-button>
                {{ __('Save') }}
            </x-button>
        </x-slot>
    @endif
</x-form-section>
