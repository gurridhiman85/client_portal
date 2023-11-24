<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Support Portal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <!-- Support Ticket List pulled in from Support Pal -->
                <section class="bg-gray-50 dark:bg-gray-900">
                    <div class="mx-auto max-w-screen-2xl">
                        <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                            <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                                <div class="flex items-center flex-1 space-x-4">
                                    <h5>
                                        <span class="text-gray-500">All Tickets:</span>
                                        <span class="dark:text-white">{{ $count }}</span>
                                    </h5>
                                    {{--<h5>
                                        <span class="text-gray-500">Total sales:</span>
                                        <span class="dark:text-white">$88.4k</span>
                                    </h5>--}}
                                </div>
                                <div class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                                    <a href="{{ route('support.create') }}"
                                            class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path clip-rule="evenodd" fill-rule="evenodd"
                                                  d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"/>
                                        </svg>
                                        Add Ticket
                                    </a>

                                </div>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-all" type="checkbox"
                                                       class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-all" class="sr-only">checkbox</label>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-4 py-3">Subject</th>
                                        <th scope="col" class="px-4 py-3">User</th>
                                        <th scope="col" class="px-4 py-3">Department</th>
                                        <th scope="col" class="px-4 py-3">Last Reply</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($models as $key => $model)
                                        <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <td class="w-4 px-4 py-3">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-{{ $key }}" type="checkbox"
                                                           onclick="event.stopPropagation()"
                                                           class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-search-{{ $key }}" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row"
                                                class="flex items-center px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $model->getSubject() }}
                                            </th>
                                            <td class="px-4 py-2">
                                                <span class="bg-primary-100 text-primary-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-primary-900 dark:text-primary-300">
                                                    @php
                                                        $user = $model->getUser();
                                                    @endphp
                                                    {{ $user->getFirstname() }} {{ $user->getLastname() }}
                                                </span>
                                            </td>
                                            <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="flex items-center">
                                                    <div class="inline-block w-4 h-4 mr-2  rounded-full"></div>
                                                    @php
                                                        $department = $model->getDepartment();
                                                    @endphp
                                                    {{ $department->getName() }}
                                                </div>
                                            </td>
                                            <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                @php
                                                    $last_reply = $model->getLastReply();
                                                    $dt      = \Carbon\Carbon::now();
                                                    $updated_at = \Carbon\Carbon::createFromTimestamp($last_reply->getUpdatedAt());
                                                @endphp
                                                {{ $dt->diffForHumans($updated_at) }}
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

</x-app-layout>
