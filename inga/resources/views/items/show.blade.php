<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    user id : {{Auth::user()->id}} <BR>
                    @can('update', $item)
                        <a href= {{ route('items.edit', ['item' => $item->id]) }}>수정</a>
                    @endcan
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    userid : {{$item->userid}} <BR>
                    code : {{$item->code}} <BR>
                    이름 : {{$item->name}} <BR>
                    메모 : {{$item->memo}} <BR>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
