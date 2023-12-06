<x-app-layout>
    <header class="flex justify-between mb-6 items-center">
        <h2 class="font-semibold text-xl">List of Clients</h2>
    </header>

    <div class="relative overflow-x-auto rounded">
        <table class="w-full text-sm text-left text-slate-400">
            <thead class="text-xs  uppercase bg-green-700 text-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Client Name
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Email Address
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Schedule Type
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                <tr class="bg-green-600 rounded text-white">
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $client->first_name }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                        {{ $client->email }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $client->type }}
                    </td>
                    <td class="px-6 py-4 gap-2 flex items-center">
                        @if ($client->approve === 0 && $client->reject === 0)
                        <button class="px-4 py-2 rounded bg-green-800">
                            Pending
                        </button>
                        @elseif($client->approve === 1)
                        <button class="px-4 py-2 rounded bg-indigo-800">
                            Approved
                        </button>
                        @else
                        <button class="px-4 py-2 rounded bg-red-800">
                            Rejected
                        </button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{-- {{ $blessingRequestedSchedules->links() }} --}}
    </div>


</x-app-layout>