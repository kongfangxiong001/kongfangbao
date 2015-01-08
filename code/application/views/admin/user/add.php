<?php echo Form::open() ?>
<?php if ($errors): ?>
<p class="message">Some errors were encountered, please check the details you entered.</p>
<ul class="errors">
<?php foreach ($errors as $message): ?>
    <li><?php echo $message ?></li>
<?php endforeach ?>
<?php endif ?>
 
<dl>
    <dt><?php echo Form::label('username', '用户名') ?></dt>
    <dd><?php echo Form::input('username', isset($post['username'])?$post['username']:'') ?></dd>
 	
    <dt><?php echo Form::label('password', '密码') ?></dt>
    <dd><?php echo Form::password('password') ?></dd>
    <dd class="help">请输入6个字符的长度.</dd>
    <dt><?php echo Form::label('confirm', '确认密码') ?></dt>
    <dd><?php echo Form::password('confirm') ?></dd>
    <dt><?php echo Form::label('type_id','用户类型')?></dt>
    <dd><?php echo Form::select('type_id',$user_type) ?></dd>
</dl>
<?php echo Form::submit(NULL, '提交') ?>
<?php echo Form::close() ?>