<form wire:submit.prevent="submit">
    <div class="p-4 sm:p-6">
        <div class="mb-3">
            <div class="flex justify-between mb-1">
                <label for="asset" class="block text-sm font-medium text-gray-700">{{ ucfirst(__('asset')) }}</label>
                <span class="text-xs text-gray-500" id="asset-optional">{{ __('Required') }}</span>
            </div>

            <livewire:asset-autocomplete/>

            <p class="mt-2 text-xs text-gray-500" id="asset-description">{{ ucfirst(__('currencies, commodities, shares...')) }}</p>

            @error('asset') <span class="mt-2 text-xs text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mt-3">
            <div class="flex justify-between">
                <label for="quantity" class="block text-sm font-medium text-gray-700">{{ ucfirst(__('quantity')) }}</label>
                <span class="text-xs text-gray-500" id="quantity-optional">{{ __('Required') }}</span>
            </div>

            <div class="relative mt-1">
                <input
                    wire:model="quantity"
                    type="text"
                    name="quantity"
                    id=quantity"
                    class="shadow-sm focus:ring-cyan-500 focus:border-cyan-500 block w-full sm:text-sm border-gray-300 @error('asset') border-red-500 pr-10 @enderror rounded-md"
                    placeholder="1"
                    aria-describedby="quantity-description"
                >
                @error('quantity')
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <!-- Heroicon name: solid/exclamation-circle -->
                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                @enderror
            </div>

            <p class="mt-2 text-xs text-gray-500" id="quantity-description">{{ ucfirst(__('the quantity of asset you add')) }}</p>

            @error('quantity') <span class="mt-2 text-xs text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="flex-shrink-0 px-4 py-4 flex justify-end border-t">
        <button @click="slideOverlay = false" type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
            Cancel
        </button>

        <button type="submit" class="ml-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
            Submit
        </button>
    </div>
</form>
