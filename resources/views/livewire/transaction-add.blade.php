<div class="p-4 sm:p-6">
    <div>
        <label for="asset" class="block text-sm font-medium text-gray-700">{{ ucfirst(__('asset')) }}</label>

        <div class="mt-1">
            <input
                type="text"
                name="asset"
                id=asset"
                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                placeholder="Start typing"
                aria-describedby="asset-description"
            >
        </div>

        <p class="mt-2 text-xs text-gray-500" id="asset-description">{{ ucfirst(__('currencies, commodities, shares...')) }}</p>
    </div>

    <div class="mt-3">
        <label for="quantity" class="block text-sm font-medium text-gray-700">{{ ucfirst(__('quantity')) }}</label>

        <div class="mt-1">
            <input
                type="text"
                name="quantity"
                id=quantity"
                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                placeholder="1"
                aria-describedby="quantity-description"
            >
        </div>

        <p class="mt-2 text-xs text-gray-500" id="quantity-description">{{ ucfirst(__('the quantity of asset you add')) }}</p>
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
