<x-app-layout>
    <div class="py-6">
        <div class="max-w-8xl mx-auto text-center text-gray-600 dark:text-gray-200">
            <div class="bg-gradient-to-r from-slate-100 to-slate-700 h-80 p-6 md:p-8">
                <div class="flex items-center h-full w-full">
                    <h1 class="p-3 text-6xl text-gray-900 font-bold font-serif lg:p-36">Employee List</h1>
                </div>
            </div>
            
            {{-- <div class="max-w-7xl mx-auto">
                {{ $employees->links() }}    
            </div>             --}}

            <div class="flex justify-center mt-8 text-justify text-md p-6 md:p-8">
                <table class="table-auto border-separate border-spacing-0.5">
                    <thead>
                        <tr class="mt-4 text-white text-center h-12">
                            <th class="bg-gray-600 p-2 rounded-sm">Name</th>
                            <th class="bg-gray-600 p-2 rounded-sm">Age</th>
                            <th class="bg-gray-600 p-2 rounded-sm">Contact</th>
                            <th class="bg-gray-600 p-2 rounded-sm">Email</th>
                            <th class="bg-gray-600 p-2 rounded-sm">Address</th>
                            <th class="bg-gray-600 p-2 rounded-sm">Applied Job</th>
                            <th class="bg-gray-600 p-2 rounded-sm">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr class="mt-4 h-12 divide-y">
                                <td class="p-2">{{ $employee->name }}</td>
                                <td class="p-2">{{ $employee->age }}</td>
                                <td class="p-2">{{ $employee->contact }}</td>
                                <td class="p-2">{{ $employee->email }}</td>
                                <td class="p-2">{{ $employee->address }}</td>
                                <td class="p-2">{{ $employee->job->job_title }}</td>
                                <td class="p-2">
                                    <div class="flex justify-center items-center">
                                        <x-dropdown>
                                            <x-slot name="trigger">
                                                <button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    </svg>
                                                </button>
                                            </x-slot>
                                            <x-slot name="content">
                                                <x-dropdown-link :href="route('employees.show', $employee)">
                                                    {{ __('Detail') }}
                                                </x-dropdown-link>
                                                <x-dropdown-link :href="route('employees.edit', $employee)">
                                                    {{ __('Edit') }}
                                                </x-dropdown-link>
                                                <form method="POST" action="{{ route('employees.destroy', $employee) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <x-dropdown-link :href="route('employees.destroy', $employee)" onclick="event.preventDefault(); this.closest('form').submit();">
                                                        {{ __('Delete') }}
                                                    </x-dropdown-link>
                                                </form>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>