<div x-data="{ open: @entangle('showModal') }">
    <button
        @click="open = true"
        type="button"
        class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500"
    >
        {{ ucwords(__('Buy')) }}
    </button>

    <div
        x-show="open"
        style="display: none"
        class="fixed z-20 inset-0 overflow-y-auto"
        aria-labelledby="modal-title"
        role="dialog"
        aria-modal="true"
    >
        <div
            class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
        >
            <div
                x-show="open"
                x-transition:enter="ease-out duration-200"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <div
                x-show="open"
                x-transition:enter="ease-out duration-200"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg md:max-w-2xl lg:max-w-4xl w-full"
            >
                <form wire:submit.prevent="submit">
                    <div class="flex flex-wrap bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 -mx-3">
                        <div class="w-full px-3 mb-6">
                            <div class="flex justify-between">
                                <label for="asset_name" class="block text-sm font-medium text-gray-700">{{ ucwords(__('asset name')) }}</label>
                            </div>

                            <div class="relative mt-1">
                                <livewire:asset-autocomplete />

                                @error('asset_name')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/exclamation-circle -->
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @enderror
                            </div>

                            <p class="mt-2 text-xs text-gray-500" id="currency-description">{{ ucfirst(__('Name of the asset you buy or sell')) }}</p>

                            @error('asset_name') <span class="mt-2 text-xs text-red-600">{{ $message }}</span> @enderror
                        </div>

                        <div class="w-full md:w-1/2 px-3">
                            <div class="flex justify-between">
                                <label for="asset_name" class="block text-sm font-medium text-gray-700">{{ ucwords(__('asset name')) }}</label>
                            </div>

                            <div class="relative mt-1">
                                <input
                                    wire:model.lazy="asset_name"
                                    type="text"
                                    name="asset_name"
                                    id="asset_name"
                                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm rounded-md"
                                    placeholder="{{ ucfirst(__('start typing')) }}"
                                >

                                @error('asset_name')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/exclamation-circle -->
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @enderror
                            </div>

                            <p class="mt-2 text-xs text-gray-500" id="currency-description">{{ ucfirst(__('Name of the asset you buy or sell')) }}</p>

                            @error('asset_name') <span class="mt-2 text-xs text-red-600">{{ $message }}</span> @enderror
                        </div>

                        <div class="w-full md:w-1/2 px-3 mt-3 md:mt-0">
                            <div class="flex justify-between">
                                <label for="asset_quantity" class="block text-sm font-medium text-gray-700">{{ ucwords(__('asset quantity')) }}</label>
                            </div>

                            <div class="relative mt-1">
                                <input
                                    wire:model="asset_quantity"
                                    type="text"
                                    name="asset_quantity"
                                    id=asset_quantity"
                                    class="shadow-sm focus:ring-cyan-500 focus:border-cyan-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                    placeholder="0.00"
                                    aria-describedby="asset_quantity-description"
                                >

                                @error('asset_quantity')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/exclamation-circle -->
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @enderror
                            </div>

                            <p class="mt-2 text-xs text-gray-500" id="asset_quantity-description">{{ ucfirst(__('quantity of assets you have bought')) }}</p>

                            @error('asset_quantity') <span class="mt-2 text-xs text-red-600">{{ $message }}</span> @enderror
                        </div>

                        <div class="w-1/2 px-3 mt-3 md:mt-6">
                            <div class="flex justify-between">
                                <label for="currency_id" class="block text-sm font-medium text-gray-700">{{ ucfirst(__('currency')) }}</label>
                            </div>

                            <div
                                class="relative mt-1"
                            >
                                <select
                                    id="currency_id"
                                    name="currency_id"
                                    wire:model="currency_id"
                                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm rounded-md"
                                >
                                    <option value="" disabled >{{ ucfirst(__('select')) }}</option>
                                    @foreach($currencies as $currency)
                                        <option value="{{ $currency->id }}">{{ $currency->name }}</option>
                                    @endforeach
                                </select>

                                @error('currency_id')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/exclamation-circle -->
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @enderror
                            </div>

                            <p class="mt-2 text-xs text-gray-500" id="currency-description">{{ ucfirst(__('What did you pay with?')) }}</p>

                            @error('currency_id') <span class="mt-2 text-xs text-red-600">{{ $message }}</span> @enderror
                        </div>

                        <div class="w-1/2 px-3 mt-3 md:mt-6">
                            <div class="flex justify-between">
                                <label for="currency_quantity" class="block text-sm font-medium text-gray-700">{{ ucwords(__('amount')) }}</label>
                            </div>

                            <div class="relative mt-1">
                                <input
                                    wire:model="currency_quantity"
                                    type="text"
                                    name="currency_quantity"
                                    id=currency_quantity"
                                    class="shadow-sm focus:ring-cyan-500 focus:border-cyan-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                    placeholder="0.00"
                                    aria-describedby="currency_quantity-description"
                                >

                                @error('currency_quantity')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <!-- Heroicon name: solid/exclamation-circle -->
                                    <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                @enderror
                            </div>

                            <p class="mt-2 text-xs text-gray-500" id="asset_quantity-description">{{ ucfirst(__('how much did you pay?')) }}</p>

                            @error('currency_quantity') <span class="mt-2 text-xs text-red-600">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-cyan-600 text-base font-medium text-white hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 sm:ml-3 sm:w-auto sm:text-sm">
                            {{ ucfirst(__('submit')) }}
                        </button>

                        <button @click="open = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                            {{ ucfirst(__('cancel')) }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


