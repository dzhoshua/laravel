

<?php $__env->startSection('content'); ?>

<p>
<div>Название конфренции: <?php echo e($conference->name ?? "N/A"); ?></div>
</p>
<p>
<div>Дата: <?php echo e($conference->date ?? "N/A"); ?></div>
</p>
<p>
<div>Время: <?php echo e($conference->time ?? "N/A"); ?></div>
</p>
<p>
<a href="/conference/<?php echo e($conference->id); ?>/edit">
<button type="submit">Редактировать</button>
</a>

<form method="POST" action="<?php echo e(route('conferences.delete', $conference->id)); ?>">
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit">Удалить</button>
</form>
</p>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/Users/kozic/laravel/resources/views/conference.blade.php ENDPATH**/ ?>