<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Layout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="bg-white min-h-screen mt-16">
        <div class="container mx-auto p-4">
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center space-x-4">
                    <input type="text" placeholder="Search" class="border rounded-lg p-2 w-72 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <button class="bg-[#FFA629] text-black px-4 py-2 rounded-lg hover:bg-yellow-500 focus:outline-none">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                        </svg>                          
                    </button>
                </div>
                <div class="flex space-x-2">
                    <button class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300 focus:outline-none">Filters</button>
                    <button class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-gray-300 focus:outline-none">Sort</button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-4 mt-5 h-auto mx-auto mb-9 text-center">
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php for($i = 0; $i < 3; $i++): ?>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="https://via.placeholder.com/300x150" alt="Image" class="w-full h-40 object-cover">
                        <div class="p-4 mb-4">
                            <h3 class="font-bold text-xl text-gray-800">Kementrian Pertanian</h3>
                            <p class="text-gray-600 text-sm mb-4">Pengelolaan lorem<br>Jakarta, Indonesia</p>
                            <a href="#" class="bg-[#FFA629] text-black px-4 py-2 rounded-lg text-sm hover:bg-yellow-500 focus:outline-none">
                                See More
                            </a>
                        </div>
                    </div>
                <?php endfor; ?>
                </div>
                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 16 4-4-4-4m6 8 4-4-4-4"/>
                    </svg>
                </button>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-4 mt-5 h-auto mx-auto mb-9 text-center">
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php for($i = 0; $i < 3; $i++): ?>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="https://via.placeholder.com/300x150" alt="Image" class="w-full h-40 object-cover">
                        <div class="p-4 mb-4">
                            <h3 class="font-bold text-xl text-gray-800">Pa Sugeng</h3>
                            <p class="text-gray-600 text-sm mb-4">Pengelolaan lorem<br>Jakarta, Indonesia</p>
                            <a href="#" class="bg-[#FFA629] text-black px-4 py-2 rounded-lg text-sm hover:bg-yellow-500 focus:outline-none">
                                See More
                            </a>
                        </div>
                    </div>
                <?php endfor; ?>
                </div>
                <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 16 4-4-4-4m6 8 4-4-4-4"/>
                    </svg>
                </button>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-4 mx-auto">
                <div class="grid grid-cols-2 gap-4 ">
                    <div class="container mx-auto mt-5">
                        <div class="grid grid-cols-1 gap-4">
                                <div class="bg-white rounded-lg shadow-md p-4 border border-gray-300 h-48 w-full flex items-center gap-4">
                                    <img src="" alt="Company Logo" class="h-12 w-12 mb-14">
                                    <div>
                                        <h3 class="text-lg font-semibold"></h3>
                                        <p class="text-gray-600">Title</p>
                                        <p class="text-gray-600">Organization</p>
                                        <p class="text-gray-600">Location</p>
                                        <span class="bg-gray-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Type</span>
                                        <span class="bg-gray-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Type</span>
                                        <p class="text-gray-600">Status: </p>
                                        <p class="text-gray-600">Gaji: Rp</p>
                                    </div>
                                </div>
                        </div>
                    </div> 
                    <div class="container mx-auto mt-5">
                        <div class="grid grid-cols-1 gap-4">
                            <div class="bg-white rounded-lg shadow-md p-4 border border-gray-300 h-48 w-full flex items-center gap-4">
                                <img src="" alt="Company Logo" class="h-12 w-12 mb-14">
                                <div>
                                    <h3 class="text-lg font-semibold"></h3>
                                    <p class="text-gray-600">Title</p>
                                    <p class="text-gray-600">Organization</p>
                                    <p class="text-gray-600">Location</p>
                                    <span class="bg-gray-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Type</span>
                                    <span class="bg-gray-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Type</span>
                                    <p class="text-gray-600">Tanggal:</p>
                                </div>
                            </div>
                        </div>
                    </div>               
                </div>
                <div class="text-center">
                    <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                        <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 16 4-4-4-4m6 8 4-4-4-4"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?><?php /**PATH D:\Laragon\www\PathnityTechonnect\resources\views/search/search.blade.php ENDPATH**/ ?>