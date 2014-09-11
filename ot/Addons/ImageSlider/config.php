<?php
return array(
	'second'=>array(
		'title'=>'轮播间隔时间（单位 秒）:',
		'type'=>'text',
		'value'=>'3',			 //表单的默认值
	),
    'direction'=>array(
		'title'=>'图片滚动方向:',
		'type'=>'radio',
		'options'=>array(
			'horizontal'=>'横向滚动',
			'vertical'=>'纵向滚动',
		),
		'value'=>'horizontal',
	),
    'imgWidth'=>array(
        'title'=>'容器宽度（单位　像素）',
        'type'=>'text',
        'value'=>'0'
    ),
    'imgHeight'=>array(
        'title'=>'容器高度（单位　像素）',
        'type'=>'text',
        'value'=>'0'
    ),
    'url'=>array(
        'title'=>'图片链接（一行对应一个图片）',
        'type'=>'textarea',
        'value'=>''
    ),
    'images'=>array(
        'title' => '轮播图片1920*800（双击可移除）',
        'type'  => 'picture_union',
        'value' => ''
    )
);
					