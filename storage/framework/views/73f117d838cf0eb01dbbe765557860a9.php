

<?php $__env->startSection('content'); ?>

<p>
<div>Имя: <?php echo e($user->name ?? "N/A"); ?></div>
</p>
<p>
<div>Фамилия: <?php echo e($user->lastname ?? "N/A"); ?></div>
</p>
<p>
<div>Город: <?php echo e($user->city ?? "N/A"); ?></a></div>
</p>
<p>
<div>Email: <?php echo e($user->email ?? "N/A"); ?></div>
</p>
<p>
<div>Конференция: <a href="/conference/<?php echo e($user->conference->id); ?>"><?php echo e($user->conference->name); ?></a></div>
</p>
<p>
<a href="/user/<?php echo e($user->id); ?>/edit">
<button type="submit">Редактировать</button>
</a>

<form method="POST" action="<?php echo e(route('users.delete', $user->id)); ?>">
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<button type="submit">Удалить</button>
</form>
</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/Users/kozic/laravel/resources/views/user.blade.php ENDPATH**/ ?>