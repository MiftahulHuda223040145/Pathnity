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
    <div class="flex flex-col h-screen">
        <main class="flex-grow flex justify-center items-center bg-gray-100">
            <div class="flex bg-white shadow-lg w-full max-w-4xl">
                <div class="w-1/2 bg-purple-700 text-white p-8">
                    <h1 class="text-3xl font-bold mb-6">PATHNITY</h1>
                    <p class="text-lg">Pathnity helps you connect and get a career according to your passion</p>
                </div>
    
                <div class="w-1/2 p-8">
                    <h2 class="text-2xl font-semibold mb-4">Login</h2>
                    <div class="flex justify-center gap-4 mb-6">
                        <a href="/" class="flex items-center py-2 px-4 rounded text-black border border-transparent hover:border-gray-300 hover:bg-gray-100 text-center mr-10">
                            <img src="<?php echo e(asset('img/google-icon.png')); ?>" alt="Google" class="w-5 h-5 mr-2"> 
                            Google
                        </a>
                        <a href="/" class="flex items-center py-2 px-4 rounded text-black border border-transparent hover:border-gray-300 hover:bg-gray-100 text-center">
                            <img src="<?php echo e(asset('img/facebook-icon.png')); ?>" alt="Google" class="w-5 h-5 mr-2"> 
                            Facebook
                        </a>
                    </div>
                    <form action="/login" method="POST" class="space-y-4">
                        <?php echo csrf_field(); ?>
                        <input type="email" name="email" placeholder="Enter Email or Username" 
                            class="w-full border border-gray-300 p-2 rounded">
                        <input type="password" name="password" placeholder="Enter Password" 
                            class="w-full border border-gray-300 p-2 rounded">
                        <button type="submit" 
                            class="w-full bg-orange-500 text-white py-2 rounded hover:bg-orange-600">Login</button>
                        <a href="#" class="text-orange-500 text-sm">Forgot your password?</a>
                    </form>
                    <div class="flex justify-between mt-6">
                        <a href="/register" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Register</a>
                        <a href="/register-organizer" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Register for Organizer</a>
                    </div>
                </div>
            </div>
        </main>
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
<?php endif; ?><?php /**PATH D:\herd\connect-11\resources\views/login.blade.php ENDPATH**/ ?>