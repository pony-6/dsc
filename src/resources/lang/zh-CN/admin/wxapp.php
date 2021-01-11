<?php

return [

    /*
    |--------------------------------------------------------------------------
    | wxapp Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the wxapp
    |
    */

    'add' => '添加',
    'yes' => '是',
    'no' => '否',
    'button_submit' => '提交',
    'button_reset' => '重置',
    'status' => '状态',
    'sequence' => '排序',
    'operating' => '操作',
    'open' => '开启',
    'close' => '关闭',
    'editor' => '编辑',
    'see' => '查看',
    'edit' => '卸载',
    'drop' => '删除',
    'confirm_delete' => '确定删除吗？',
    'button_save' => '保存',
    'add_time' => '添加时间',

    'num_order' => '编号',
    'errcode' => '错误代码：',
    'errmsg' => '错误信息：',
    'control_center' => '管理中心',
    'edit_wechat' => '公众号设置',
    'sort_order' => '排序',
    'empty' => '不能为空',
    'success' => '成功',
    'handler' => '操作',
    'button_search' => '搜索',
    'enabled' => '启用',
    'disabled' => '禁用',
    'already_enabled' => '已启用',
    'already_disabled' => '已禁用',
    'to_enabled' => '点击启用',
    'to_disabled' => '点击禁用',

    'wx_menu' => '小程序',

    //模板消息
    'templates' => '消息提醒',
    'template_title' => '模板标题',
    'template_id' => '模板ID',
    'template_code' => '模板编号',
    'template_content' => '模板内容',
    'template_remark' => '备注',
    'template_edit_fail' => '编辑失败',
    'please_select_industry' => '请选择小程序类目：服装/鞋/箱包',
    'selected_industry' => '已选择小程序类目',
    'please_apply_template' => '请登录微信公众号平台，申请开通订阅消息',
    'confirm_reset_template' => '您确定要重置模板消息吗？',
    'template_tips' => [
        0 => '消息提醒，即小程序订阅消息，需要先登录小程序微信公众号平台。',
        1 => '启用列表所需要的模板消息，即可在相应事件触发订阅消息；编辑模板消息备注，可增加显示自定义提示消息内容',
        2 => '每个小程序账号可以同时使用25个模板，超过将无法使用订阅消息功能。',
    ],

    'wx_config' => '配置',
    'wx_config_tips' => [
        0 => '一、配置前先 <a href="https://mp.weixin.qq.com/debug/wxadoc/introduction/index.html" target="_blank">注册小程序</a>，进行微信认证, 已有微信小程序 <a href="https://mp.weixin.qq.com/" target="_blank">立即登录</a>',
        1 => '二、登录 <a href="https://mp.weixin.qq.com/" target="_blank">微信公众号平台 </a>后，在 设置 - 开发者设置 中，查看到微信小程序的
                    AppID、Appsecret，并配置填写好域名。（注意不可直接使用微信服务号或订阅号的 AppID、AppSecret）',
        2 => '三、微信认证后，开通小程序微信支付。开通后，配置小程序微信支付的商户号和密钥。',
        3 => '四、小程序退款 需要配置证书，证书与公众号支付证书相同，安装支付方式配置证书。',
    ],
    'wx_appname' => '小程序名称',
    'wx_appid' => '小程序AppID',
    'wx_appsecret' => '小程序AppSecret',
    'wx_mch_id' => '小程序微信支付商户号',
    'wx_mch_key' => '小程序微信支付密钥',
    'token_secret' => 'Token授权密钥',
    'make_token' => '生成Token',
    'copy_token' => '复制Token',
    'wxapp_help1' => '小程序AppID，非微信公众号AppID',
    'wxapp_help2' => '小程序AppSecret，非微信公众号AppSecret',
    'wxapp_help3' => '小程序微信支付商户号',
    'wxapp_help4' => '小程序微信支付密钥',
    'wxapp_help5' => 'Token授权加密key（32位字符）,用于小程序授权登录。重要信息，请不要随意泄露给他人！',
    'must_appid' => '请填写小程序AppID',
    'must_appsecret' => '请填写小程序AppSecret',
    'must_mch_id' => '请填写小程序微信支付商户号',
    'must_mch_key' => '请填写小程序微信支付密钥',
    'must_token_secret' => '请填写生成32位token密钥',
    'open_wxapp' => '请配置并开启小程序',
    'wx_sslcert' => '支付证书cert',
    'wx_sslkey' => '支付证书key',
    'wxapp_sslcert_help' => '证书可选填，用于退款。请在微信商户后台下载支付证书，用记事本打开apiclient_cert.pem，并复制里面的内容粘贴到这里',
    'wxapp_sslkey_help' => '证书可选填，用于退款。请在微信商户后台下载支付证书，用记事本打开apiclient_key.pem，并复制里面的内容粘贴到这里',

    'wxapp_live' => '小程序直播',
    'wxapp_live_goods' => '直播商品库',
    'wxapp_live_goods_tips' => [
        '小程序直播间商品库，可添加小程序直播内使用的商品信息并操作提审，将添加的商品提交到微信小程序方进行审核，审核时间为1-7天，商品库审核通过商品上限为2000个，每天最多提审500个，具体文档请参考：
https://developers.weixin.qq.com/miniprogram/dev/framework/liveplayer/live-player-plugin.html；',
        '更新商品：通过点击该按钮可以获取小程序端直播商品信息到本地；'
    ],
    'all_audit_status' => '全部',
    'audit_status_0' => '未审核',
    'audit_status_1' => '审核中',
    'audit_status_2' => '审核通过',
    'audit_status_3' => '审核失败',
    'audit_status_3_today' => '今日提审',
    'add_live_goods' => '添加直播商品',
    'sync_live_goods' => '更新商品',
    'search_keywords' => '搜索商品名称',
    'audit_status' => '审核状态',
    'is_audit' => '是否提审',
    'is_audit_0' => '未提审',
    'is_audit_1' => '已提审',
    'goods_name' => '商品名称',
    'cover_img_url' => '商品封面',
    'goods_url' => '商品链接',
    'audit_time' => '提审时间',
    'audit' => '提审',
    'reset_audit' => '撤回提审',
    'repeat_audit' => '提交审核',
    'price_type' => '价格',
    'price_type_1' => '一口价',
    'price_type_2' => '价格区间',
    'price_type_3' => '显示折扣价',
    'price_type_3_1' => '原价',
    'price_type_3_2' => '现价',

    'add_live_goods_tips' => [
        '添加小程序直播间内商品，需上传商品封面，填写商品名称、价格、关联小程序商品链接，填写后可操作保存和保存并提审；',
        '选择保存则仅保存已填写信息暂不提交至微信方进行审核，保存并提审则在保存信息的同时提交至微信审核，每天提审上限500个'
    ],
    'cover_img_url_notice' => '建议尺寸：200*200，图片大小不超过80K',
    'goods_name_notice' => '商品名称，最长14个汉字，1个汉字相当于2个字符',
    'price_type_notice' => '单位：元，支持3种价格模式，可填写至小数点后两位，如小数点后两位为0则不显示',
    'goods_url_notice' => '填写该商品在小程序内的商品链接，例如：pages/goodsDetail/goodsDetail?id=goods_id',
    'cover_img_url_empty' => '请上传商品封面图',
    'goods_id_empty' => '商品ID不能为空',
    'goods_name_empty' => '请输入商品名称',
    'goods_name_max' => '商品名称长度不能超过14个汉字或28个字符',
    'price_type_empty' => '请选择价格类型',
    'price_type_1_empty' => '一口价不能为空',
    'price_type_2_empty' => '价格区间值不能为空',
    'price_type_3_empty' => '折扣价不能为空',
    'goods_url_empty' => '商品链接不能为空',
    'submit_audit' => '保存并提审',
    'confirm_delete_goods' => '确认删除此商品吗？此操作不可恢复',
    'confirm_submit_audit' => '确认提审商品到微信吗？',
    'confirm_reset_audit' => '确认要撤回商品提审吗？成功撤回后可再次发起提审申请',
    'confirm_repeat_audit' => '确认重新提审吗',

    'edit_live_goods' => '编辑商品',
    'edit_live_goods_tips' => [
        '编辑小程序商品'
    ],
    'sync_live_goods_tips' => [
        '同步更新小程序后台直播商品信息、审核状态'
    ],
    'updating_complete' => '正在更新... 请勿关闭窗口',
    'update_completed' => '更新完成',
];