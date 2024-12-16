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
                            <div class="bg-white rounded-lg shadow-md p-4 border border-gray-300 h-48 w-full flex items-center gap-4">
                                <img src="<?php echo e($job['logo']); ?>" alt="Company Logo" class="h-12 w-12 mb-14">
                                <div>
                                    <h3 class="text-lg font-semibold"><?php echo e($job['title']); ?></h3>
                                    <p class="text-gray-600"><?php echo e($job['company_name']); ?></p>
                                    <p class="text-gray-600"><?php echo e($job['location']); ?></p>
                                    <p class="text-gray-600">Status: <?php echo e($job['status']); ?></p>
                                    <p class="text-gray-600">Gaji: Rp <?php echo e(number_format($job['salary'], 0, ',', '.')); ?></p>
                                </div>
                            </div>
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
                        <div class="bg-white rounded-lg shadow-md p-4 border border-gray-300 h-48 w-full flex items-center gap-4">
                            <img src="<?php echo e($volunteer['logo']); ?>" alt="Company Logo" class="h-12 w-12 mb-14">
                            <div>
                                <h3 class="text-lg font-semibold"><?php echo e($volunteer['title']); ?></h3>
                                <p class="text-gray-600"><?php echo e($volunteer['organization'] ?: 'Tidak disebutkan'); ?></p>
                                <p class="text-gray-600"><?php echo e($volunteer['location']); ?></p>
                                <p class="text-gray-600">Tanggal: <?php echo e($volunteer['date']); ?></p>
                            </div>
                        </div>
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

    <div class="bg-[#241365] mt-11">
        <div class="container mx-auto py-8">
            <h1 class="text-4xl font-bold text-white py-4 text-left ml-10">Blog</h1>
            <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8 ml-5 place-items-center h-auto max-w-full">
            <!-- Card 1 -->
            <div class="p-4 bg-white rounded-lg shadow-md h-62 w-60">
                <a href="/login" >  <img src="img/blog/career.png" alt="career" class="mb-4 rounded max-w-full">
                <p class="font-semibold text-center">Explore Career Opportunities</p>
                </a>
                <p class="text-sm text-gray-400 text-center">Sugeng, 56 menit</p>
            </div>
        
            <!-- Card 2 -->
            <div class="p-4 bg-white rounded-lg shadow-md h-62 w-60">
                <a href="/login" > <img src="img/blog/search-job.png" alt="Gambar 2" class="mb-4 rounded max-w-full">
                <p class="font-semibold text-center">Job Search: Tips & Tricks</p>
                </a>
                <p class="text-sm text-gray-400 text-center">Sugeng, 56 menit</p>
            </div>
        
            <!-- Card 3 -->
            <div class="p-4 bg-white rounded-lg shadow-md h-62 w-60">
               <a href="/login" ><img src="img/blog/career1.png" alt="Gambar 3" class="mb-4 rounded max-w-full">
                <p class="font-semibold text-center">Advance Your Career with Us</p>
               </a>
                <p class="text-sm text-gray-400 text-center">Sugeng, 56 menit</p>
            </div>
        
            <!-- Card 4 -->
            <div class="p-4 bg-white rounded-lg shadow-md h-62 w-60">
                <a href="/login" ><img src="img/blog/btc.png" alt="Gambar 4" class="mb-4 rounded max-w-full">
                <p class="font-semibold text-center">Bitcoin: Opportunities in Tech</p>
                </a>
                <p class="text-sm text-gray-400 text-center">Sugeng, 56 menit</p>
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
<?php endif; ?>
<?php /**PATH D:\Kuliah\Semester 5\Praktikum Web\connect-11\resources\views/home.blade.php ENDPATH**/ ?>