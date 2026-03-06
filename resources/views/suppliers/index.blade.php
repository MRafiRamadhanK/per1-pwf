<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Suppliers List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full text-left table-auto border-collapse">
                        <thead>
                            <tr class="border-b border-gray-600">
                                <th class="py-2 px-4">ID</th>
                                <th class="py-2 px-4">Name</th>
                                <th class="py-2 px-4">Contact</th>
                                <th class="py-2 px-4">Address</th>
                                <th class="py-2 px-4">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($suppliers as $supplier)
                                <tr class="border-b border-gray-700">
                                    <td class="py-2 px-4">{{ $supplier->id }}</td>
                                    <td class="py-2 px-4">{{ $supplier->name }}</td>
                                    <td class="py-2 px-4">{{ $supplier->contact }}</td>
                                    <td class="py-2 px-4">{{ $supplier->address }}</td>
                                    <td class="py-2 px-4">{{ $supplier->created_at->format('d M Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="py-4 text-center">No suppliers available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
