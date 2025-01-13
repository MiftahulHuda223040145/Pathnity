<x-layout>
    <h1 class="text-4xl font-bold dark:text-white mt-24 px-12">
        Applicants for {{ $vacancy->title }}
    </h1>
    <div class="bg-white rounded-lg shadow-2xl p-4 mt-5 h-auto mx-12">
        <div class="overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark-mode:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark-mode:bg-gray-700 dark-mode:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Address</th>
                        <th scope="col" class="px-6 py-3">Phone</th>
                        <th scope="col" class="px-6 py-3">CV</th>
                        <th scope="col" class="px-6 py-3">Profile</th>
                        <th scope="col" class="px-6 py-3">Want Position</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($applicants as $applicant)
                        <tr class="bg-white border-b dark-mode:bg-gray-800 dark-mode:border-gray-700">
                            <td class="px-6 py-4">{{ $applicant->user->first_name ?? 'N/A' }}</td>
                            <td class="px-6 py-4">{{ $applicant->user->address ?? 'N/A' }}</td>
                            <td class="px-6 py-4">{{ $applicant->user->phone_number ?? 'N/A' }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ asset('storage/' . $applicant->resume) }}" target="_blank"
                                    class="text-blue-500 hover:underline">View CV</a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('profile.show', $applicant->user->id) }}"
                                    class="text-blue-500 hover:underline">
                                    View Profile
                                </a>
                            </td>
                            <td class="px-6 py-4">{{ $vacancy->title }}</td>
                            <td class="px-6 py-4 flex space-x-2">
                                @if ($applicant->status === 'pending')
                                    <!-- Interview Button -->
                                    <button onclick="openInterviewModal({{ $applicant->id }})"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                        Interview
                                    </button>
                                    <form
                                        action="{{ route('applicant.updateStatus', ['application' => $applicant->id, 'status' => 'rejected']) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Reject
                                        </button>
                                    </form>
                                @elseif ($applicant->status === 'interview')
                                    <!-- Accept Button -->
                                    <button onclick="openAcceptModal({{ $applicant->id }})"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Accept
                                    </button>
                                    <form
                                        action="{{ route('applicant.updateStatus', ['application' => $applicant->id, 'status' => 'rejected']) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Reject-Interview
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div id="interviewModal-{{ $applicant->id }}"
                            class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
                            <div class="bg-white rounded-lg p-6 w-full max-w-md">
                                <h2 class="text-xl font-semibold mb-4">Send Interview Details</h2>
                                <form action="{{ route('applicants.interview', $applicant->id) }}" method="POST">
                                    @csrf
                                    <textarea name="interview_message" class="w-full p-3 border rounded-md" rows="4"
                                        placeholder="Enter interview details here..." required></textarea>
                                    <div class="mt-4 flex justify-end space-x-2">
                                        <button type="button" onclick="closeInterviewModal({{ $applicant->id }})"
                                            class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                                        <button type="submit"
                                            class="bg-green-500 text-white px-4 py-2 rounded">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Modal for Accept -->
                        <div id="acceptModal-{{ $applicant->id }}"
                            class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
                            <div class="bg-white rounded-lg p-6 w-full max-w-md">
                                <h2 class="text-xl font-semibold mb-4">Send Acceptance Details</h2>
                                <form action="{{ route('applicants.accept', $applicant->id) }}" method="POST">
                                    @csrf
                                    <textarea name="accept_message" class="w-full p-3 border rounded-md" rows="4"
                                        placeholder="Enter acceptance details here..." required></textarea>
                                    <div class="mt-4 flex justify-end space-x-2">
                                        <button type="button" onclick="closeAcceptModal({{ $applicant->id }})"
                                            class="bg-gray-500 text-white px-4 py-2 rounded">Cancel</button>
                                        <button type="submit"
                                            class="bg-blue-500 text-white px-4 py-2 rounded">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-gray-500">
                                No applicants for this vacancy.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function openInterviewModal(id) {
            document.getElementById(`interviewModal-${id}`).classList.remove('hidden');
        }

        function closeInterviewModal(id) {
            document.getElementById(`interviewModal-${id}`).classList.add('hidden');
        }

        function openAcceptModal(id) {
            document.getElementById(`acceptModal-${id}`).classList.remove('hidden');
        }

        function closeAcceptModal(id) {
            document.getElementById(`acceptModal-${id}`).classList.add('hidden');
        }
    </script>
</x-layout>
