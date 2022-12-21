<?php $__currentLoopData = $data->module['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class=" flex justify-center w-full">
        <div class=" w-4/5 flex flex-col 2xl:w-3/5 ">
            <div class="w-full text-center items-center flex flex-col lg:flex-row lg:items-start ">
                <div class="my-10 w-full items-center flex-col flex md:mr-5">
                    <img class="mb-8 min-w-600 xl:p-0 min-w-854 lg:min-w-726 2xl:min-w-975" src="<?php echo e($item->icon->url); ?>"
                        alt="<?php echo e($item->icon->alt); ?>">
                    <p><?php echo e($item->content); ?></p>
                    <?php if($item->link->url): ?>
                        <a class="no-underline text-red-200"  href="<?php echo e($item->link->url); ?>"
                            target="<?php echo e($item->link->target); ?>"><?php echo e($item->link->title); ?></a>
                    <?php endif; ?>
                    <span class="icomoon icon-chevron-right w-3"></span>
                </div>
            </div>
        </div>


    </section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
