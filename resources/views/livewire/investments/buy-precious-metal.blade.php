<form wire:submit.prevent="submit">
    <div class="grid grid-cols-4 gap-6">
        <div class="col-span-4 sm:col-span-2">
            <div class="flex justify-between">
                <label
                    for="asset_metal_name"
                    class="block text-sm font-medium text-gray-700"
                >{{ ucfirst(__('name')) }}</label>
            </div>

            <div
                class="relative mt-1"
            >
                <input
                    wire:model="name"
                    type="text"
                    name="name"
                    id="precious_metal_name"
                    class="shadow-sm focus:ring-cyan-500 focus:border-cyan-500 block w-full sm:text-sm border-gray-300 rounded-md"
                    placeholder="Descriptive name of your asset"
                    aria-describedby="precious_metal_name-description"
                >

                @error('precious_metal_name')
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <!-- Heroicon name: solid/exclamation-circle -->
                    <svg
                        class="h-5 w-5 text-red-500"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </div>
                @enderror
            </div>

            <p
                class="mt-2 text-xs text-gray-500"
                id="currency-description"
            >{{ ucfirst(__('Krugerrand, American Eagle, Kangaroo...')) }}</p>

            @error('precious_metal_name') <span
                class="mt-2 text-xs text-red-600"
            >{{ $message }}</span> @enderror
        </div>

        <div class="col-span-4 sm:col-span-1">
            <div class="flex justify-between">
                <label
                    for="asset-metal"
                    class="block text-sm font-medium text-gray-700"
                >{{ ucfirst(__('precious metal')) }}</label>
            </div>

            <div
                class="relative mt-1"
            >
                <select
                    id="asset-metal"
                    name="precious_metal"
                    wire:model="precious_metal"
                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm rounded-md"
                >
                    <option
                        value=""
                        disabled
                    >{{ ucfirst(__('select')) }}</option>
                    @foreach($precious_metals as $element)
                        <option value="{{ $element->id }}">{{ $element->name }}</option>
                    @endforeach
                </select>

                @error('precious_metal')
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <!-- Heroicon name: solid/exclamation-circle -->
                    <svg
                        class="h-5 w-5 text-red-500"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </div>
                @enderror
            </div>

            <p
                class="mt-2 text-xs text-gray-500"
                id="currency-description"
            >{{ ucfirst(__('Which one did you buy?')) }}</p>

            @error('precious_metal') <span
                class="mt-2 text-xs text-red-600"
            >{{ $message }}</span> @enderror
        </div>

        <div class="col-span-4 sm:col-span-1">
            <div class="flex justify-between">
                <label
                    for="precious_metal_quantity"
                    class="block text-sm font-medium text-gray-700"
                >{{ ucfirst(__('amount')) }}</label>
            </div>

            <div class="relative mt-1">
                <input
                    wire:model="precious_metal_quantity"
                    type="text"
                    name="precious_metal_quantity"
                    id="precious_metal_quantity"
                    class="shadow-sm focus:ring-cyan-500 focus:border-cyan-500 block w-full sm:text-sm border-gray-300 rounded-md"
                    placeholder="0.00"
                    aria-describedby="precious_metal_quantity-description"
                >

                @error('precious_metal_quantity')
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <!-- Heroicon name: solid/exclamation-circle -->
                    <svg
                        class="h-5 w-5 text-red-500"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </div>
                @enderror
            </div>

            <p
                class="mt-2 text-xs text-gray-500"
                id="asset_quantity-description"
            >{{ ucfirst(__('how much did you buy?')) }} <strong>({{ ucfirst(__('troy ounce')) }})</strong></p>

            @error('precious_metal_quantity') <span
                class="mt-2 text-xs text-red-600"
            >{{ $message }}</span> @enderror
        </div>

        <div class="col-span-4 sm:flex sm:justify-end">
            <button
                type="submit"
                class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500"
            >
                {{ ucfirst(__('next')) }}
            </button>
        </div>
    </div>
</form>
