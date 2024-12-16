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
    <div class="container mx-auto">  
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">  
            <div class="bg-white rounded-lg shadow-md p-4">  
                <h2 class="text-xl font-semibold mb-4">Jobs for You!</h2>  
                <div class="bg-gray-50 p-4 rounded-md mb-4">  
                    <h3 class="text-lg font-semibold">Fullstack Developer</h3>  
                    <p>PT. Pertahanan Jaya</p>  
                    <p>Jakarta, Indonesia</p>  
                    <p>Status: Online</p>  
                    <p>Gaji: Rp 20.000.000</p>  
                </div>  
                <div class="bg-gray-50 p-4 rounded-md mb-4">  
                    <h3 class="text-lg font-semibold">Pramuniaga/SPG</h3>  
                    <p>PT. Alihkan</p>  
                    <p>Jakarta, Indonesia</p>  
                    <p>Status: Online</p>  
                    <p>Gaji: Rp 2.000.000</p>  
                </div>  
                <div class="bg-gray-50 p-4 rounded-md mb-4">  
                    <h3 class="text-lg font-semibold">Product Developer</h3>  
                    <p>PT. Pertahanan Jaya</p>  
                    <p>Jakarta, Indonesia</p>  
                    <p>Status: Online</p>  
                    <p>Gaji: Rp 30.000.000</p>  
                </div>  
            </div>  

            <div class="bg-white rounded-lg shadow-md p-4">  
                <h2 class="text-xl font-semibold mb-4">Volunteer Spotlight</h2>  
                <div class="bg-gray-50 p-4 rounded-md mb-4">  
                    <h3 class="text-lg font-semibold">Volunteering Pertanian dan Kehutanan</h3>  
                    <p>Kementerian Pertanian</p>  
                    <p>Jakarta, Indonesia</p>  
                    <p>Tanggal: 02 Februari 2024</p>  
                </div>  
                <div class="bg-gray-50 p-4 rounded-md mb-4">  
                    <h3 class="text-lg font-semibold">Pembersihan Kali Ciliwung</h3>  
                    <p>Jakarta, Indonesia</p>  
                    <p>Tanggal: 02 Februari 2024</p>  
                </div>  
                <div class="bg-gray-50 p-4 rounded-md mb-4">  
                    <h3 class="text-lg font-semibold">Humas Kiai Merah Putih</h3>  
                    <p>Jakarta, Indonesia</p>  
                    <p>Tanggal: 02 Februari 2024</p>  
                </div>  
            </div>  
        </div>  

        <div class="bg-white rounded-lg shadow-md p-4 mt-4">  
            <h2 class="text-xl font-semibold mb-2">The abundance of companies facilitates your job search</h2>  
            <div class="flex flex-wrap">  
                <img src="logo1.png" alt="Logo Perusahaan 1" class="w-24 h-auto m-2">  
                <img src="logo2.png" alt="Logo Perusahaan 2" class="w-24 h-auto m-2">  
                <img src="logo3.png" alt="Logo Perusahaan 3" class="w-24 h-auto m-2">  
                <!-- Tambahkan lebih banyak logo sesuai kebutuhan -->  
            </div>  
            <span class="text-blue-500 cursor-pointer">see more</span>  
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
<?php endif; ?><?php /**PATH D:\herd\connect\resources\views/rekomendation.blade.php ENDPATH**/ ?>