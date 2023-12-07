

<?php $__env->startSection('content'); ?>

<table>
    <tr>
        <th>name</th>
        <th>lastname</th>
        <th>city</th>
        <th>email</th>
        <th>conference</th>
    </tr>
    <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<td><a href="/user/<?php echo e($row->id); ?>"><?php echo e($row->name  ?? "N/A"); ?></a></td>
		<td><?php echo e($row->lastname  ?? "N/A"); ?></td>
        <td><?php echo e($row->city  ?? "N/A"); ?></td>
		<td><?php echo e($row->email  ?? "N/A"); ?></td>
        <td><a href="/conference/<?php echo e($row->conference->id); ?>"><?php echo e($row->conference->name  ?? "N/A"); ?></a></td>
		
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
<p><a href="/user/add">Добавить пользователя</a></p>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/c/Users/kozic/laravel/resources/views/users.blade.php ENDPATH**/ ?>