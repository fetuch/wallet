<section aria-labelledby="payment_details_heading">
    <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="bg-white py-6 px-4 sm:p-6">
            <nav aria-label="Progress">
                <ol class="space-y-4 md:flex md:space-y-0 md:space-x-8">
                    @foreach($steps as $key => $step)
                        <li
                            wire:click="setStep({{ $key }})"
                            class="md:flex-1"
                        >
                            <span
                                class="group pl-4 py-2 flex flex-col border-l-4 @if($key <= $currentStep)cursor-pointer border-cyan-600 hover:border-cyan-800 @else border-gray-200 hover:border-gray-300 @endif md:pl-0 md:pt-4 md:pb-0 md:border-l-0 md:border-t-4"
                            >
                                <span
                                    class="text-xs text-cyan-600 font-semibold tracking-wide uppercase group-hover:text-cyan-800"
                                >
                                    {{ ucfirst(__('step')) }} {{ $loop->iteration }}
                                </span>

                                <span class="text-sm font-medium">{{ ucfirst(__($step['description'])) }}</span>
                            </span>
                        </li>
                    @endforeach
                </ol>
            </nav>

            @if($currentStep === 0)
                <fieldset class="mt-10">
                    <div class="bg-white rounded-md -space-y-px">
                        @foreach($assetTypes as $key => $type)
                            <label
                                class="hover:bg-cyan-50 hover:border-cyan-200 hover:z-10 @if($selectedType === $key) bg-cyan-50 border-cyan-200 z-10 @else border-gray-200 @endif @if($loop->first) rounded-tl-md rounded-tr-md @endif @if($loop->last) rounded-bl-md rounded-br-md @endif relative border p-4 flex cursor-pointer"
                            >
                                <input
                                    wire:model="selectedType"
                                    type="radio"
                                    name="selectedType"
                                    value="{{ $key }}"
                                    class="h-4 w-4 mt-0.5 cursor-pointer text-cyan-600 border-gray-300 focus:ring-cyan-500"
                                    aria-labelledby="privacy-setting-0-label"
                                    aria-describedby="privacy-setting-0-description"
                                >
                                <div class="ml-3 flex flex-col">
                                    <span
                                        id="privacy-setting-0-label"
                                        class="@if($selectedType === $key) text-cyan-900 @else text-gray-900 @endif block text-sm font-medium"
                                    >
                                  {{ ucfirst(__($type['name'])) }}
                                </span>
                                    @if(isset($type['description']))
                                        <span
                                            id="privacy-setting-0-description"
                                            class="@if($selectedType === $key) text-cyan-700 @else text-gray-500 @endif block text-sm"
                                        >
                                  {{ ucfirst(__($type['description'])) }}
                                </span>
                                    @endif
                                </div>
                            </label>
                        @endforeach
                    </div>
                </fieldset>
            @endif


            @if($currentStep === 1)
                <div class="mt-10">
                    @if($selectedType === 'fiat')
                        <livewire:investments.buy-currency/>
                    @endif
                </div>
            @endif

            @if($currentStep === 2)
                <div class="mt-10">
                    <livewire:investments.payment/>
                </div>
            @endif

            @if($currentStep === 3)
                <div class="mt-10">
                    <livewire:investments.summary :summary="$summary"/>
                </div>
            @endif
        </div>
    </div>
</section>
