<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
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

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php for($i = 0; $i < 3; $i++): ?>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="https://via.placeholder.com/300x150" alt="Image" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-xl text-gray-800">Kementrian Pertanian</h3>
                            <p class="text-gray-600 text-sm mb-4">Pengelolaan lorem<br>Jakarta, Indonesia</p>
                            <a href="#" class="bg-[#FFA629] text-black px-4 py-2 rounded-lg text-sm hover:bg-yellow-500 focus:outline-none">
                                See More
                            </a>
                        </div>
                    </div>
                <?php endfor; ?>

                <?php for($i = 0; $i < 3; $i++): ?>
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <img src="https://via.placeholder.com/300x150" alt="Image" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-xl text-gray-800">Pa Sugeng</h3>
                            <p class="text-gray-600 text-sm mb-4">Fullstack Developer<br>Jakarta, Indonesia</p>
                            <a href="#" class="bg-[#FFA629] text-black px-4 py-2 rounded-lg text-sm hover:bg-yellow-500 focus:outline-none">
                                See More
                            </a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH D:\Laragon\www\PathnityTechonnect\resources\views/search/search.blade.php ENDPATH**/ ?>