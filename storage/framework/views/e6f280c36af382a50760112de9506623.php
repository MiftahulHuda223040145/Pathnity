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
    <section class="bg-center bg-cover bg-no-repeat bg-gray-700 bg-blend-multiply h-screen w-full"
        style="background-image: url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg');">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-36 ">
            <h1 class="mb-4 text-4xl font-medium tracking-tight leading-none text-white text-left pl-24 mt-32 ml-20">Find
                Job or Volunteer</h1>
            <div class="flex flex-wrap justify-center gap-4 mb-6">
                <input type="text" placeholder="Title, keywords or company name"
                    class="border border-gray-300 rounded-md p-3 w-96">
                <input type="text" placeholder="City, region or province"
                    class="border border-gray-300 rounded-md p-3 w-96">
                <button class="bg-orange-600 text-white rounded-md px-6 py-3 hover:bg-orange-700">Search</button>
            </div>
            <p class="text-gray-200 text-left pl-24 ml-20 ">Or browse job or volunteer by <a href="#"
                    class="text-orange-600 font-medium">Our Recommendation</a></p>
            <p class=" text-2xl text-gray-300 text-left pl-24 mt-20 ml-20">We have a large selection of job or volunteer
                vacancies in
                <br> every region of Indonesia.
            </p>
        </div>
        </div>
    </section>

    <div class="container mx-auto mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Jobs Section -->
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-2xl font-semibold text-center mb-4">Jobs for You!</h2>
                <div class="container mx-auto mt-5">
                    <div class="grid grid-cols-1 gap-4">
                        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="">
                            <div class="bg-white rounded-lg shadow-md p-4 border border-gray-300 h-48 w-full flex items-center gap-4">
                                <a href="">
                                    <img src="<?php echo e($job['logo']); ?>" alt="Company Logo" class="h-12 w-12 mb-14">
                                </a>
                                <div>
                                    <a href="">
                                        <h3 class="text-lg font-semibold"><?php echo e($job['title']); ?></h3>
                                    </a>    
                                    <a href="">
                                        <p class="text-gray-600"><?php echo e($job['company_name']); ?></p>
                                    </a>
                                    <a href="">
                                        <p class="text-gray-600"><?php echo e($job['location']); ?></p>
                                    </a>
                                    <a href="">
                                        <span class="bg-gray-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded"><?php echo e($job['status']); ?></span>
                                    </a>
                                    <a href="">
                                        <span class="bg-gray-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Type</span>
                                    </a>
                                    <p class="text-gray-600">Gaji: Rp <?php echo e(number_format($job['salary'], 0, ',', '.')); ?></p>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                
            </div>

            <!-- Volunteer Section -->
            <div class="bg-white rounded-lg shadow-lg p-4">
                <h2 class="text-2xl font-semibold text-center mb-4">Volunteer Spotlight</h2>
                <div class="container mx-auto mt-5">
                    <div class="grid grid-cols-1 gap-4">
                        <?php $__currentLoopData = $volunteers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $volunteer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="">
                            <div class="bg-white rounded-lg shadow-md p-4 border border-gray-300 h-48 w-full flex items-center gap-4">
                                <a href="">
                                    <img src="<?php echo e($volunteer['logo']); ?>" alt="Company Logo" class="h-12 w-12 mb-14">
                                </a>
                                <div>
                                    <a href="">
                                        <h3 class="text-lg font-semibold"><?php echo e($volunteer['title']); ?></h3>
                                    </a>
                                    <a href="">
                                        <p class="text-gray-600"><?php echo e($volunteer['organization'] ?: 'Tidak disebutkan'); ?></p>
                                    </a>
                                    <a href="">
                                        <p class="text-gray-600"><?php echo e($volunteer['location']); ?></p>
                                    </a>
                                    <a href="">
                                        <span class="bg-gray-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Type</span>
                                    </a>
                                    <a href="">
                                        <span class="bg-gray-200 text-gray-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded">Type</span>
                                    </a>
                                    <p class="text-gray-600">Tanggal: <?php echo e($volunteer['date']); ?></p>
                                </div>
                            </div>
                        </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white rounded-lg shadow-2xl p-4 mt-4 h-auto">
        <h2 class="text-xl text-center font-semibold mb-2">The abundance of companies facilitates your job search</h2>
        <div class="flex flex-wrap text-center justify-center">
            <?php $__currentLoopData = $logos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $logo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src="<?php echo e(asset('img/' . $logo)); ?>" alt="Logo Perusahaan" class="h-12 w-12 m-5">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    
    </div>

    <div class="bg-[#0A3981] mt-11">
        <div class="container mx-auto py-8">
            <h1 class="text-4xl font-bold text-white py-4 text-left ml-10">Blog</h1>
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8 place-items-center h-auto max-w-full">  
                <?php for($i = 0; $i < 4; $i++): ?>
                <div class="p-4">  
                    <a href="/blog">
                        <img src="https://via.placeholder.com/1000x800" alt="Gambar 1" class="mb-2">  
                    </a> 
                    <a href="">
                        <span class="bg-yellow-100 text-yellow-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Category</span>
                    </a>
                    <a href="">
                        <p class="text-white">Lorem ipsum lorem lorem.</p>  
                    </a>
                    <a href="">
                        <p class="text-sm text-gray-300">Sugeng, 56 menit</p>  
                    </a>
                </div> 
                <?php endfor; ?>
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
<?php endif; ?>
<?php /**PATH D:\Laragon\www\PathnityTechonnect\resources\views/home.blade.php ENDPATH**/ ?>