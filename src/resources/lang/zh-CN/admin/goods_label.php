<?php

return [

	// 标题
	'goods_label' => '活动标签',
	'goods_label_list' => '活动标签列表',
	'goods' => '商品',

	// 列表
	'label_name' => '标签名称',
	'bind_goods_number' => '绑定商品数',
	'label_image' => '标签样式',
	'merchant_use' => '商家可用',
	'status' => '标签状态',
	'sort' => '排序',
	'label_url' => '标签链接',
	'add_label' => '添加标签',
	'use' => '启用',
	'no_use' => '禁用',
	'batch_use' => '批量启用',
	'batch_no_use' => '批量禁用',
	'batch_drop' => '批量删除',
	'see_url' => '查看链接',

	// 添加 编辑
	'add' => '添加',
	'batch_add' => '批量添加',
	'save_success' => '保存成功',
	'upload_file' => '上传文件',
	'filter_one' => '违禁词',
	'filter_two' => '敏感词',
	'rank' => '等级',

	// 提示
	'label_name_notice' => '仅用于后台管理员区分标签使用，不在前端展示',
	'sort_notice' => '同一个商品存在多个标签时，排序数字越小越靠前',
	'merchant_use_notice' => '设置商家是否可使用该标签，为否时该标签仅自营商品可选，非自营商家不可见',
	'label_image_notice' => '展示于前端商品名称前，高度为：40px',
	'status_notice' => '禁用状态标签不在前端显示',
	'label_url_notice' => '添加标签链接，前端点击该标签则跳转至该链接页',
	'success_notice' => '添加活动标签成功',
	'failed_notice' => '添加活动标签失败',
	'edit_success_notice' => '编辑活动标签成功',
	'edit_failed_notice' => '编辑活动标签失败',
	'success_update' => '更新成功',
	'failed_update' => '更新失败',
	'success_drop_notice' => '删除成功',
	'failed_drop_notice' => '删除失败',
	'batch_success_notice' => '批量操作成功',

	'label_name_not_null' => '标签名称不能为空',
	'label_image_not_null' => '标签图片不能为空',
	'sort_not_null' => '标签排序不能为空',
	'label_name_exists' => '标签名称已存在',
	'label_notice' => ['页面展示商城所有商品活动标签，可对标签进行编辑修改操作；', '标签将展示在前端页面，请根据实际需求添加标签；', '未启用标签不在前端页面显示，删除标签将同步删除商品中已绑定标签；', '开启商家可用标签将在商家后台显示，入驻商家可选则已开启商家可用标签绑定商品；'],

	// js提示
	'drop_js_notice' => '当前标签已有绑定商品，删除标时会同步删除绑定商品中的标签，确定删除？',
	'batch_drop_notice' => '删除标签将删除所有已经添加的商品活动标签，确定删除？',

    'no_records' => '没有找到任何记录',
];
