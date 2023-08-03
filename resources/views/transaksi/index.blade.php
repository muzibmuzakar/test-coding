<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Transaksi') }}
            </h2>
            <a class="bg-blue-500 px-4 py-2 rounded-lg text-white hover:bg-blue-400"
                href="{{ route('transaksi.create') }}">Tambah</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('List Transaksi') }}

                    <div class="relative overflow-x-auto py-4">
                        <table class="table-auto text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        COA Kode
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        COA Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Desc
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Debit
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Credit
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr class="bg-white border-b">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            {{$item->tanggal}}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{$item->coa->code}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$item->coa->name}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$item->desc}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$item->debit}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{$item->credit}}
                                        </td>
                                        <td class="flex pt-3">
                                            <a class="mr-2 px-2 py-1 bg-yellow-600 text-white hover:bg-yellow-500 rounded-md" href="{{route('transaksi.edit',$item->id)}}">Edit</a>
                                            <form action="{{ route('transaksi.destroy',$item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-2 py-1 bg-red-600 text-white hover:bg-red-500 rounded-md">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
