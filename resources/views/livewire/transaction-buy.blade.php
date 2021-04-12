<div class="px-4 divide-y divide-gray-200 sm:px-6">
    <div class="space-y-6 pt-6 pb-5">
        <div>
            <label for="project_name" class="block text-sm font-medium text-gray-900">
                Project name
            </label>
            <div class="mt-1">
                <input type="text" name="project_name" id="project_name"
                       class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500 focus:border-cyan-500 border-gray-300 rounded-md">
            </div>
        </div>
        <div>
            <label for="description" class="block text-sm font-medium text-gray-900">
                Description
            </label>
            <div class="mt-1">
                                        <textarea id="description" name="description" rows="4"
                                                  class="block w-full shadow-sm sm:text-sm focus:ring-cyan-500 focus:border-cyan-500 border-gray-300 rounded-md"></textarea>
            </div>
        </div>
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
