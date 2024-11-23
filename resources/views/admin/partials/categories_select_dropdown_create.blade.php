<div class="page_main_field sm:col-span-12 mt-1 sm:mt-0 relative bg-cream-200"
        x-data="categorySelect()"
        x-init="loadOptions()"
>

    <select x-cloak id="categorySelect" style="display: none;">
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}" class="@if($cat->isParentCategory()) parent @endif"  @if(old('categories') !== null && in_array($cat->id, explode(',',old('categories')))) selected="true" @endif  parent="{{ $cat->parent_id }}">{{ $cat->name }}</option>

            @foreach($cat->children as $child)
                <option class="ml-4 px-2 py-1 hover:bg-gray-100 text-sm cursor-pointer"  @if(old('categories') !== null  && in_array($child->id, explode(',',old('categories')))) selected="true" @endif value="{!! $child->id !!}" parent="{{ $child->parent_id }}" {{ (old("categories") == $child->id ? "selected" : "") }}>{!! $child->name !!}</option>

                @foreach($child->children as $grandchild)
                    <option class="ml-8 px-2 py-1 hover:bg-gray-100 text-sm cursor-pointer" @if(old('categories') !== null  && in_array($grandchild->id, explode(',',old('categories')))) selected="true" @endif value="{!! $grandchild->id !!}" parent="{{ $grandchild->parent_id }}" {{ (old("categories") == $grandchild->id ? "selected" : "") }}>{!! $grandchild->name !!}</option>
                @endforeach

            @endforeach
        @endforeach
    </select>

    <input name="categories" type="hidden" x-bind:value="selectedValues()" class="block w-full shadow-sm focus:ring-neongreen-300 focus:border-neongreen-300 sm:text-sm border-neongreen-200 rounded-md">

    <div class="flex flex-col items-center relative">
        <div x-on:click="open" class="w-full">
            <div class="flex border w-full shadow-sm  sm:text-sm border-neongreen-200 rounded-md ">
                <div class="flex flex-1">
                    
                    <template x-for="(option,index) in selected" :key="options[option].value">
                        
                        <div class="flex justify-center items-center font-medium m-1 px-2 bg-cream-200 rounded border" style="padding-top:0.45rem; padding-bottom: 0.45rem;">
                            <div class="text-xs font-normal leading-none max-w-full flex-initial x-model=" options[option] x-text="options[option].text"></div>
                            <div class="flex flex-auto flex-row-reverse">
                                <div x-on:click.stop="remove(index,option)">
                                    <svg class="fill-current h-4 w-4 " role="button" viewBox="0 0 20 20">
                                        <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                                c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                                l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                                C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                    </svg>

                                </div>
                            </div>
                        </div>

                    </template>

                    <div x-show="selected.length == 0" class="flex-1">
                        <input  placeholder="{{ \Request::route()->getName() == 'admin_categories_new' ? 'Select Parent Category' : 'Select Categories' }}" class="bg-transparent text-sm pl-3 py-3 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm border-neongreen-200 rounded-md h-full w-full text-gray-800  appearance-none outline-none" x-bind:value="selectedValues()">
                    </div>
                </div>
                <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-neongreen-300 svelte-1l8159u">

                    <button type="button" x-show="isOpen() === true" x-on:click="open" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                        <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">

                            <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
                                    c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
                                    " />
                        </svg>

                    </button>
                    <button type="button" x-show="isOpen() === false" @click="close" class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                        <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                            <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                    c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                    L17.418,6.109z" />
                        </svg>

                    </button>
                </div>
            </div>
        </div>
        <div class="w-full px-4">
            <div x-show.transition.origin.top="isOpen()" class="absolute shadow top-100 bg-cream-200 z-40 w-full left-0 rounded max-h-select" x-on:click.away="close">
                <div class="flex flex-col w-full overflow-y-auto h-32">

                    <template x-for="(option,index) in options" :key="option" class="overflow-auto">
                        <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100" @click="select(index,$event)">
                            <div class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                <div class="w-full items-center flex justify-between">
                                    <div :class="{'font-semibold text-md': option.isParent == true, 'pl-4 text-sm':option.isParent == false }" class="mx-2" x-model="option" x-text="option.text"></div>
                                    <div x-show="option.selected">
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                            <path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087
                                                C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087
                                                L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </template>


                </div>
            </div>
        </div>
    </div>
</div>