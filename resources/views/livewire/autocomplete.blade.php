<div>
    <div
        x-data="{
              open: @entangle('showDropdown'),
              search: @entangle('search'),
              selected: @entangle('selected'),
              highlightedIndex: 0,
              highlightPrevious() {
                if (this.highlightedIndex > 0) {
                  this.highlightedIndex = this.highlightedIndex - 1;
                  this.scrollIntoView();
                }
              },
              highlightNext() {
                if (this.highlightedIndex < this.$refs.results.children.length - 1) {
                  this.highlightedIndex = this.highlightedIndex + 1;
                  this.scrollIntoView();
                }
              },
              scrollIntoView() {
                this.$refs.results.children[this.highlightedIndex].scrollIntoView({
                  block: 'nearest',
                  behavior: 'smooth'
                });
              },
              updateSelected(id, name) {
                this.selected = id;
                this.search = name;
                this.open = false;
                this.highlightedIndex = 0;
              },
          }"
    >
        <div
            x-on:value-selected="updateSelected($event.detail.id, $event.detail.name)"
            class="relative"
        >
            <div>
                <input
                    type="text"
                    wire:model.debounce.300ms="search"
                    x-on:keydown.arrow-down.stop.prevent="highlightNext()"
                    x-on:keydown.arrow-up.stop.prevent="highlightPrevious()"
                    x-on:keydown.enter.stop.prevent="$refs.results.children[highlightedIndex] ? $dispatch('value-selected', {
                        id: $refs.results.children[highlightedIndex].getAttribute('data-result-id'),
                        name: $refs.results.children[highlightedIndex].getAttribute('data-result-name')
                      }) : null"
                    class="shadow-sm focus:ring-cyan-500 focus:border-cyan-500 block w-full text-sm border-gray-300 rounded-md"
                    placeholder="Start typing"
                    aria-describedby="asset-description"
                >
            </div>

            <div
                x-show="open"
                style="display: none"
                x-on:click.away="open = false"
                x-transition:enter="transition ease-out duration-200 transform"
                x-transition:enter-start="opacity-0 translate-y-1"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150 transform"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-1"
                class="origin-top-right z-10 absolute left-0 right-0 mx-auto w-full rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
            >
                <ul
                    x-ref="results"
                    class="max-h-60 overflow-y-auto text-sm"
                >
                    @forelse($results as $index => $result)
                        <li
                            wire:key="{{ $index }}"
                            x-on:click.stop="$dispatch('value-selected', {
                                id: {{ $result->id }},
                                name: '{{ $result->name }}'
                              })"
                            :class="{
                                'bg-cyan-700': {{ $index }} === highlightedIndex,
                                'text-white': {{ $index }} === highlightedIndex
                              }"
                            class="cursor-pointer px-3 py-1"
                            data-result-id="{{ $result->id }}"
                            data-result-name="{{ $result->name }}"
                        >
                            <span>
                              {{ $result->name }}
                            </span>
                        </li>
                    @empty
{{--                        <li class="px-3 py-1">No results found</li>--}}
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>
