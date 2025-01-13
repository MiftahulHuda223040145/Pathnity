<x-layout>

    @if (session('success'))
        <div class="mt-24 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative ">
            {{ session('success') }}
        </div>
    @endif

    <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">Workers</h1>
    <div class="bg-white rounded-lg shadow-2xl p-4 mt-5 h-auto mx-12">
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark-mode:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark-mode:bg-gray-700 dark-mode:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Address</th>
                        <th scope="col" class="px-6 py-3">Number</th>
                        <th scope="col" class="px-6 py-3">CV</th>
                        <th scope="col" class="px-6 py-3">Profile</th>
                        <th scope="col" class="px-6 py-3">Position</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($workers as $worker)
                        <tr class="bg-white border-b dark-mode:bg-gray-800 dark-mode:border-gray-700">
                            <td class="px-6 py-4">{{ $worker->user->first_name ?? 'N/A' }}</td>
                            <td class="px-6 py-4">{{ $worker->user->address ?? 'N/A' }}</td>
                            <td class="px-6 py-4">{{ $worker->user->phone_number ?? 'N/A' }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ asset('storage/' . $worker->resume) }}" target="_blank"
                                    class="text-blue-500 hover:underline">View CV</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('profile.show', $worker->user->id) }}"
                                    class="text-blue-500 hover:underline">View Profile</a>
                            </td>
                            <td class="px-6 py-4">{{ $worker->vacancy->title }}</td>
                            <td class="px-6 py-4 flex space-x-2">
                                <form action="{{ route('dashorg.fireWorker', $worker->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                        Fired
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-gray-500">No workers found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>




    <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">Inactive Vacancies</h1>
    <div class="bg-white rounded-lg shadow-2xl p-4 mt-5 h-auto mx-12">
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark-mode:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark-mode:bg-gray-700 dark-mode:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">Title</th>
                        <th class="px-6 py-3">Category</th>
                        <th class="px-6 py-3">Type</th>
                        <th class="px-6 py-3">Salary</th>
                        <th class="px-6 py-3">Number Of Worker</th>
                        <th class="px-6 py-3">Description</th>
                        <th class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($inactiveVacancies as $vacancy)
                        <tr class="bg-white border-b dark-mode:bg-gray-800 dark-mode:border-gray-700">
                            <td class="px-6 py-4">{{ $vacancy->title }}</td>
                            <td class="px-6 py-4">{{ $vacancy->category->name ?? 'N/A' }}</td>
                            <td class="px-6 py-4">{{ $vacancy->type->name ?? 'N/A' }}</td>
                            <td class="px-6 py-4">Rp. {{ number_format($vacancy->salary, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">{{ $vacancy->numberofworker }}</td>
                            <td class="px-6 py-4">{{ Str::limit($vacancy->description, 100) }}</td>
                            <td class="px-6 py-4 flex space-x-2">
                                <form action="{{ route('vacancies.toggleStatus', $vacancy->id) }}" method="POST">
                                    @csrf
                                    <button
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded accept-button">
                                        {{ $vacancy->status ? 'Move to Inactive' : 'Move to Active' }}
                                    </button>
                                </form>
                                <form action="{{ route('vacancies.destroy', $vacancy->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded reject-button">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-gray-500">
                                No inactive vacancies.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
        <div class="text-center">
            <button type="button"
                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m7 16 4-4-4-4m6 8 4-4-4-4" />
                </svg>
            </button>
        </div>
    </div>


    <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">Active Vacancies</h1>
    <div class="bg-white rounded-lg shadow-2xl p-4 mt-5 h-auto mx-12">
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark-mode:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark-mode:bg-gray-700 dark-mode:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">Title</th>
                        <th class="px-6 py-3">Category</th>
                        <th class="px-6 py-3">Type</th>
                        <th class="px-6 py-3">Salary</th>
                        <th class="px-6 py-3">Applicants</th>
                        <th class="px-6 py-3">Number Of Worker</th>
                        <th class="px-6 py-3">Description</th>
                        <th class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($activeVacancies as $vacancy)
                        <tr class="bg-white border-b dark-mode:bg-gray-800 dark-mode:border-gray-700">
                            <td class="px-6 py-4">{{ $vacancy->title }}</td>
                            <td class="px-6 py-4">{{ $vacancy->category->name ?? 'N/A' }}</td>
                            <td class="px-6 py-4">{{ $vacancy->type->name ?? 'N/A' }}</td>
                            <td class="px-6 py-4">Rp. {{ number_format($vacancy->salary, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">{{ $vacancy->applications->count() }}</td>
                            <td class="px-6 py-4">{{ $vacancy->numberofworker }}</td>
                            <td class="px-6 py-4">{{ Str::limit($vacancy->description, 100) }}</td>
                            <td class="px-6 py-4 flex space-x-2">
                                <form action="{{ route('dashorg.seeApplicants', $vacancy->id) }}" method="GET">
                                    <button
                                        class="bg-[#FFA629] hover:bg-[#e59525] text-white font-bold py-2 px-4 rounded">
                                        See Applicants
                                    </button>
                                </form>
                                <form action="{{ route('vacancies.toggleStatus', $vacancy->id) }}" method="POST">
                                    @csrf
                                    <button
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded accept-button">
                                        {{ $vacancy->status ? 'Move to Inactive' : 'Move to Active' }}
                                    </button>
                                </form>
                                <form action="{{ route('vacancies.destroy', $vacancy->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded reject-button">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-gray-500">
                                No active vacancies.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <button type="button"
                class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m7 16 4-4-4-4m6 8 4-4-4-4" />
                </svg>
            </button>
        </div>

    </div>
    <a href="/create-vacancy">
        <div class="text-center mt-24 mb-20">
            <button type="button"
                class="items-end ml-2 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <p>Create Vacancies</p>
            </button>
        </div>
    </a>

    <script>
        const getChartOptions = () => {
            return {
                series: [52.8, 26.8, 20.4],
                colors: ["#1C64F2", "#16BDCA", "#9061F9"],
                chart: {
                    height: 420,
                    width: "100%",
                    type: "pie",
                },
                stroke: {
                    colors: ["white"],
                    lineCap: "",
                },
                plotOptions: {
                    pie: {
                        labels: {
                            show: true,
                        },
                        size: "100%",
                        dataLabels: {
                            offset: -25
                        }
                    },
                },
                labels: ["Direct", "Organic search", "Referrals"],
                dataLabels: {
                    enabled: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                    },
                },
                legend: {
                    position: "bottom",
                    fontFamily: "Inter, sans-serif",
                },
                yaxis: {
                    labels: {
                        formatter: function(value) {
                            return value + "%"
                        },
                    },
                },
                xaxis: {
                    labels: {
                        formatter: function(value) {
                            return value + "%"
                        },
                    },
                    axisTicks: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                },
            }
        }

        if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
            chart.render();
        }
    </script>
</x-layout>
