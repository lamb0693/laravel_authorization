<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            수정
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    수 정
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('items.update', ['item' => $item->id]) }}">
                        @method('put')
                        @csrf

                        userid : {{$item->userid}} <BR>
                        code : {{$item->code}} <BR>

                        <!-- name -->
                        <div class="flex">
                            <x-label class="flex-none w-20" for="name" value="이 름" />

                            <input id="name" class="block mt-1 flex-none w-40 bg-gray-200" type="test" name="name" value="{{old('name')!=""? old('name') : $item->name }}" required autofocus />
                        </div>
                        <!-- memo -->
                        <div class="flex">
                            <x-label class="flex-none w-20" for="memo" value="참고사항 " />

                            <input id="memo" class="block mt-1 flex-none w-40 bg-gray-200" type="test" name="memo" value="{{old('memo')!=""? old('memo') : $item->memo }}" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('수정') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</x-app-layout>
