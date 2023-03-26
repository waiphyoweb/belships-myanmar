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

            <div class="max-w-7xl mx-auto mt-8 text-justify p-6 md:p-8">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Applied Job</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->age }}</td>
                                <td>{{ $employee->contact }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->address }}</td>
                                <td>{{ $employee->job->job_title }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>