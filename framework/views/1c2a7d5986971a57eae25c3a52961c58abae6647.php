<?php if (isset($component)) { $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040 = $component; } ?>
<?php $component = App\View\Components\AdminLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AdminLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <?php echo e($title); ?>

</h2>
<div>
<div class="shadow px-6 py-4 bg-white rounded sm:px-1 sm:py-1 sm:bg-gray-100 ">
<div class="grid grid-cols-12">
<div class="col-span-6 p-4">
    <a href="<?php echo e(route('murid.create')); ?>">
        <button class="px-4 py-1 text-sm rounded text-purple-600 font-semibold border border-purple200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outlinenone">Tambah</button>
        </a>
        <button class="px-4 py-1 text-sm rounded text-green-600 font-semibold border border-green200 hover:text-white hover:bg-green-600 hover:border-transparent focus:outlinenone">Publish</button>
        <button class="px-4 py-1 text-sm rounded text-red-600 font-semibold border border-red200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outlinenone">Delete</button>
        </div>
        <div class="col-span-6 p-4 flex justify-end">
        <input type="text" class="px-4 py-2 focus:ring-indigo-500 focus:border-indigo-500 roundednone rounded-l-md sm:text-sm border-gray-300">
        <button class="rounded-r-md border border-l-0 px-4 py-1 border-gray-300 bg-gray-50 text-gray500 text-blue-600 hover:text-white hover:bg-blue-600">
        Cari</button>
        </div>
        </div>
        <div class="py-2 align-middle inline-block min-w-full sm:px-4 lg:px-4">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr class="text-lg">
                <th>tandai</th>
                <th>No</th>
                <th>judul</th>
                <th>keterangan</th>
                <th>cover</th>
                <th>aksi</th>
                
            </tr>
             
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php $no=1;?>
                <?php $__currentLoopData = $murid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                <Td><?php echo e($no); ?></Td>
                <td><?php echo e($item->title); ?></td>
                <td><?php echo e($item->description); ?></td>
                <td></td>
                <td>

                </td>
                </tr>
                <?php $no++; ?>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
            
            </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040)): ?>
<?php $component = $__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040; ?>
<?php unset($__componentOriginalbacdc7ee2ae68d90ee6340a54a5e36f99d0a3040); ?>
<?php endif; ?>

    <?php /**PATH D:\semester 3\teknologi web\kecak\resources\views/admin/daftarmurid.blade.php ENDPATH**/ ?>