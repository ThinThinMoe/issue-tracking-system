<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm">
                <div class="container m-auto border-4 border-gray-300">
                    <nav class="issue-detail-nav flex items-center justify-between bg-gray-200 px-4 py-4">
                        <div class="flex space-x-2 font-bold">
                            <span>Issues</span>
                            <span>#000001</span>
                        </div>
                        <div class="flex space-x-2">
                            <span>Project:</span>
                            <a href="#" class="font-bold underline text-blue-700">issue tracking system</a>
                        </div>
                    </nav> <!-- end isses-detail-nav -->

                    <div class="issue-detail-container px-4 lg:flex justify-start mt-4 mb-4">
                        <div class="issue-detail-content lg:w-1/2  sm:w-100 lg:mr-6">
                            <div>
                                <h1 class="font-bold text-gray-500">Summary</h1>
                                <div class="border-t font-semibold pt-2">Drop down menu not working</div>
                            </div>
                            <div class="mt-4">
                                <h1 class="font-bold text-gray-500">Detail</h1>
                                <div class="border-t font-semibold pt-2">
                                    <p>Drop down menu not working</p>
                                    <p class="mt-4"><span class="font-bold">Note:</span> Drop down menu not working</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h1 class="font-bold text-gray-500">Steps to reproduce</h1>
                                <ol class="px-4 list-decimal border-t font-semibold pt-2">
                                    <li>Step 1</li>
                                    <li>Step 2</li>
                                    <li>Step 3</li>
                                </ol>
                            </div>
                            <div class="mt-4">
                                <h1 class="font-bold text-gray-500">Attachement</h1>
                                <div class="border-t font-semibold flex space-x-2 pt-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                                    <a href="#" class="text-blue-600 underline pl-2">View</a>
                                    <a href="#" class="text-blue-600 underline">Download</a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h1 class="font-bold text-gray-500">Note</h1>
                                <div class="border-t pt-2">
                                    <textarea class="border" name="note" id="note" rows="4"></textarea>
                                </div>
                            </div>
                        </div> <!-- end issue-detail-content -->
                        <div class="lg:w-1/12 sm:divide-none"></div>
                        <div class="issue-detail-sidebar lg:w-2/5 sm:w-100 bg-gray-200 lg:p-8 p-2">
                            <h1 class="font-bold">
                                In
                                <a href="#" class="text-blue-600 underline">Bug</a>
                                Category
                            </h1>
                            <div class="mt-3 border-2 border-gray-400 bg-orange-50">
                                <div class="lg:m-4 m-2 flex lg:space-x-3 space-x-1 items-center">
                                    <span class="italic">Severity:</span>
                                    <select class="bg-gray-200 border border-gray-400 text-gray-500 font-semibold rounded-sm" name="severity" id="severity">
                                        <option value="Major">Major</option>
                                        <option value="Minior">Minior</option>
                                        <option value="Normal">Normal</option>
                                    </select>
                                    <span class="italic">Priority:</span>
                                    <select class="bg-gray-200 border border-gray-400 text-gray-500 font-semibold rounded-sm" name="priority" id="priority">
                                        <option value="Major">Major</option>
                                        <option value="Minior">Minior</option>
                                        <option value="Normal">Normal</option>
                                    </select>
                                </div>
                            </div>
                            <p class="font-bold mt-3">14:29AM, 09 Jun 2021</p>
                            <div class="font-bold text-gray-500">
                                <div class="flex mt-4">
                                    <span class="lg:w-1/4 text-right mr-3">Reported by:</span>
                                    <a href="#" class="text-blue-600 underline">John Smith</a>
                                </div>
                                <div class="flex mt-5 items-center">
                                    <span class="lg:w-1/4 text-right mr-3">Assigned to:</span>
                                    <select class="bg-gray-200 border border-gray-400 font-semibold rounded-sm" name="assigned-to" id="assigned-to">
                                        <option value="1">Developer 1</option>
                                        <option value="2">Developer 2</option>
                                        <option value="3">Developer 3</option>
                                    </select>
                                </div>
                                <div class="flex mt-5 items-center">
                                    <span class="w-1/4 text-right mr-3">Status:</span>
                                    <select class="bg-gray-200 border border-gray-400 font-semibold rounded-sm" name="status" id="status">
                                        <option value="1">Stats 1</option>
                                        <option value="2">Stats 2</option>
                                        <option value="3">Stats 3</option>
                                    </select>
                                </div>
                                <div class="flex mt-5">
                                    <span class="w-1/4 text-right mr-3">Related to:</span>
                                    <div class="flex space-x-2 font-bold text-black">
                                        <span>Issue</span>
                                        <a href="#" class="underline text-blue-600">#00002</a>
                                    </div>
                                </div>
                                <div class="flex mt-5">
                                    <span class="w-1/4 text-right mr-3">Last update:</span>
                                    <span class="text-black">15:36AM, 09 Jun 2021</span>
                                </div>
                            </div>
                            <div class="mt-12">
                                <h1 class="font-bold text-gray-500">Log</h1>
                                <div class="border-t border-gray-300 font-semibold pt-2 text-gray-500">
                                    <p>14:29AM, 09 Jun 2021 - Updated status to <span class="font-bold">WIP</span></p>
                                    <p>14:29AM, 09 Jun 2021 - Assigned by <a href="#" class="text-blue-600 underline">Developer 1</a> </p>
                                    <p>15:36AM, 09 Jun 2021 - Added by <a href="#" class="text-blue-600 underline">John Smith</a> </p>
                                </div>
                            </div>
                        </div> <!-- end issue-detail-sidebar -->
            
                    </div> <!-- issue-detail-container -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>