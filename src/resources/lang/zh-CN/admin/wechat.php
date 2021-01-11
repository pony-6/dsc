<?php

return [

    /*
    |--------------------------------------------------------------------------
    | wechat Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the wechat
    |
    */

    'num_order' => '编号',
    'wechat' => '公众平台',
    'wechat_number' => '微信号',
    'errcode' => '错误代码：',
    'errmsg' => '错误信息：',
    'control_center' => '管理中心',
    'empty' => '不能为空',
    'handler' => '操作',
    'enabled' => '启用',
    'disabled' => '禁用',
    'already_enabled' => '已启用',
    'already_disabled' => '已禁用',
    'to_enabled' => '点击启用',
    'to_disabled' => '点击禁用',

    //公众平台
    'wechat_num' => '公众平台帐号',
    'wechat_name' => '公众号名称',
    'wechat_type' => '公众号类型',
    'wechat_add_time' => '添加时间',
    'add' => '添加',
    'yes' => '是',
    'no' => '否',
    'button_submit' => '提交',
    'button_reset' => '重置',
    'button_revoke' => '撤销',
    'wechat_status' => '状态',
    'wechat_sequence' => '排序',
    'wechat_operating' => '操作',
    'wechat_manage' => '功能管理',
    'wechat_type0' => '未认证的公众号',
    'wechat_type1' => '订阅号',
    'wechat_type2' => '服务号',
    'wechat_type3' => '认证服务号',
    'wechat_open' => '开启',
    'wechat_close' => '关闭',
    'wechat_editor' => '编辑',
    'wechat_see' => '查看',
    'uninstall' => '卸载',
    'drop' => '删除',
    'disabled_drop' => '禁止删除',
    'confirm_delete' => '确定删除吗？',
    'button_save' => '保存',
    'wechat_register' => '暂时还没有公众号，邀您尝试%s添加一个公众号</a>。',

    'edit_wechat' => '公众号设置',
    'edit_wechat_tips' => [
        0 => '一、配置前先需要申请一个微信服务号，并且通过微信认证。（认证服务号需要注意每年微信官方都需要重新认证，如果认证过期，接口功能将无法使用，具体请登录微信公众号平台了解详情）',
        1 => '二、网站域名 需要通过ICP备案并正确解析到空间服务器，临时域名与IP地址无法配置。',
        2 => '三、登录 <a href="https://mp.weixin.qq.com/" target="_blank"/>微信公众号平台 </a>，获取且依次填写好
                    公众号名称，公众号原始ID，Appid，Appsecret，token值。',
        3 => '四、自定义Token值，必须为英文或数字（长度为3-32字符），如 weixintoken，并保持后台与公众号平台填写的一致。',
        4 => '五、复制接口地址，填写到微信公众号平台 开发=> 基本配置，服务器配置下的 URL地址，验证提交通过后，并启用。（注意仅支持80端口）',
    ],

    'wechat_id' => '公众号原始id',
    'token' => 'Token',
    'appid' => 'AppID',
    'appsecret' => 'AppSecret',
    'aeskey' => 'EncodingAESKey',
    'wechat_add' => '新增',
    'wechat_help1' => '如：ecmoban',
    'wechat_help2' => '请认真填写，如：gh_845581623321',
    'wechat_help3' => '自定义的Token值、确保后台与公众号平台填写的一致',
    'wechat_help4' => 'AppID 请注意需要与微信公众号平台保持一致，且注意信息安全，不要随意透露给第三方',
    'wechat_help5' => 'AppSecret密钥需要与微信公众号平台保持一致，没有特别原因不要随意修改，也不要随意透露给第三方',
    'wechat_help6' => '开启之后，微商城会自动进行授权登录，否则不进行授权登录，只提供普通微商城功能。默认开启。',
    'wechat_help7' => '由开发者手动填写或随机生成，将用作消息体加解密密钥',
    'must_name' => '请填写公众号名称',
    'must_id' => '请填写公众号原始ID',
    'must_token' => '请填写公众号Token',
    'wechat_empty' => '公众号不存在',
    'open_wechat' => '请开启公众号',
    'on_login' => '开启授权登录',
    'wechat_oauth' => '微信OAuth名称',
    'wechat_oauth_callback' => '微信OAuth回调地址',
    'wechat_oauth_push' => '微信OAuth推送量',
    'wechat_api_url' => '微信URL接口地址',
    'make_token' => '生成Token',
    'copy_token' => '复制Token',
    'copy_url' => '复制URL',
    'support_off' => '未开启',

    'wechat_menu' => '微信通',

    // 群发消息
    'mass_message' => '群发消息',
    'mass_history' => '群发记录',
    
    'mass_message_tips' => [
        0 => '1、群发消息暂时仅提供给已微信认证的服务号',
        1 => '2、用户每月只能接收4条群发消息，多于4条的群发将对该用户发送失败。',
        2 => '3、群发图文消息的标题上限为64个字节,群发内容字数上限为1200个字符、或600个汉字。',
        3 => '在返回成功时，意味着群发任务提交成功，并不意味着此时群发已经结束，所以，仍有可能在后续的发送过程中出现异常情况导致用户未收到消息，如消息有时会进行审核、服务器不稳定等。此外，群发任务一般需要较长的时间才能全部发送完毕，请耐心等待。',
    ],
    'select_tags' => '选择标签组',
    'mass_tags_notice' => '每次群发前，需要先更新粉丝',

    'mass_article_news_notice' => '一个图文消息支持1到8条图文，多于8条会发送失败',

    'please_select_massage' => '请选择用户或者选择要发送的信息',
    'mass_sending_wait' => '群发任务已启动，不过一般需要较长的时间才能全部发送完毕，请耐心等待',
    'massage_not_exist' => '消息不存在',

    'mass_history_tips' => [
        0 => '1、只有已经发送成功的消息才能删除',
        1 => '2、删除消息是将消息的图文详情页失效，已经收到的用户，还是能在其本地看到消息卡片。',
        2 => '3、如果多次群发发送的是一个图文消息，那么删除其中一次群发，就会删除掉这个图文消息也，导致所有群发都失效',
        3 => '★ 发送人数，即排除发送时过滤、用户拒收、接收已达到4条的用户数',
    ],
    'mass_list' => '发送记录',
    'mass_title' => '标题',
    'mass_status' => '发送状态',
    'mass_send_time' => '发送时间',
    'mass_totalcount' => '发送人数',
    'mass_sentcount' => '成功人数',
    'mass_filtercount' => '过滤人数',
    'mass_errorcount' => '失败人数',

    //自动回复
    'autoreply_manage' => '自动回复',
    'subscribe_autoreply' => '关注自动回复',
    'msg_autoreply' => '消息自动回复',
    'keywords_autoreply' => '关键词自动回复',

    'autoreply_manage_tips' => [
        0 => '自动回复的类型共分三种：关注自动回复、消息自动回复、关键词自动回复。回复内容可以设置为文字，图片，语音，视频。文本消息回复内容可以直接填写，长度限制1024字节（大约200字，含标点以及其他特殊字符），其他素材需要先在素材管理中添加。',
        1 => '一、关注自动回复：即用户关注微信公众号自动回复的消息（包含重新关注）。例如：欢迎关注微信公众号！',
        2 => '1.1 ★ 关注自动回复，不支持图文消息素材。',
        3 => '二、消息自动回复：当用户输入任意消息，匹配不到系统已有关键词时或者没有在关键词自动回复里添加关键词，默认回复一条消息提示。例如：对不起！你输入的关键词不存在，建议你咨询相关客服。你也可以输入help，查看使用帮助！',
        4 => '2.1 ★ 消息自动回复，可以配合关键词自动回复灵活使用。回复提示用户输入系统已有关键词。',
        5 => '三、关键词自动回复：即自己添加的规则关键词自动回复。',
        6 => '3.1 ★ 字数限制：微信公众平台认证与非认证用户的关键字自动回复设置规则上限为200条规则（每条规则名，最多可设置60个汉字），每条规则内最多设置10条关键字（每条关键字，最多可设置30个汉字）',
        7 => '3.2 ★ 规则设置：一个规则您可设置多个关键字，建议使用常用关键字，如关键词：help,帮助。采取中英文结合的方式最佳。如果用户发送的信息中含有您设置的其中一个关键字，则系统会匹配自动回复。',
        8 => '3.3 ★ 注意事项：关键词 不能设置系统已经存在的关键词，如功能扩展当中的hot、best、news等。',
    ],
    'text' => '文字',

    'rule_add' => '添加规则',
    'rule_name' => '规则名称',
    'rule_keywords' => '关键字',
    'rule_keywords_notice' => '添加多个关键字，用英文逗号","隔开',
    'rule_content' => '回复内容',

    'rule_name_empty' => '请填写规则名称',
    'rule_keywords_empty' => '请至少填写1个关键词',
    'rule_content_empty' => '请填写或选择回复内容',
    'rule_name_length_limit' => '规则名最多60个字',
    'rule_keywords_exit' => '关键词 :val 已经存在了，请重新填写！',

    // 素材管理
    'wechat_article' => '素材管理',
    'article_tips' => [
        0 => '图文素材：分为单图文、多图文素材。支持图片，语音，视频素材。',
        1 => '单图文素材添加好之后，即可将多条单图文素材组合成为一条多图文素材。',
        2 => '★ 注意事项：单图文素材如果经过修改，则原先添加好的多图文素材需要重新组合',
    ],

    'article' => '图文素材',
    'article_edit' => '图文素材编辑',
    'article_edit_news' => '多图文素材编辑',
    'article_add' => '图文添加',
    'article_add_news' => '多图文添加',

    'article_news_tips' => [
        0 => '图文消息个数，限制为8条以内，如果图文数超过8，微信则将会无响应。',
        1 => '建议实际应用当中一条多图文消息条数最多为4条，发送后的显示效果最佳（正好为一个手机屏幕的高度）',
    ],
    'article_news_select' => '选择图文信息',
    'article_news_reset' => '清空重选',
    'article_news' => '图文信息',
    'article_news_notice' => '图文消息最大限制为8条，建议最佳4条单图文（正好显示满一个手机屏）',
    'article_select' => '选择素材',

    'article_title' => '标题',
    'article_author' => '作者',
    'article_file' => '封面',
    'article_file_notice' => '图片建议尺寸：900像素 * 500像素, 支持jpg、png格式',
    'select_gallery_album' => '图片库选择',
    'gallery_album' => '图片库',
    'article_file_show_whether' => '是否显示封面图片',
    'article_digest' => '摘要',
    'article_content' => '正文',
    'article_link' => '原文链接',
    'article_link_notice' => '当前素材链接，填写即可用作外链。链接前请带上http或https',
    'article_sort' => '排序',

    'please_upload' => '请上传图片',
    'button_upload' => '上传',
    'button_download' => '下载',
    'not_file_type' => '文件上传类型不允许',
    'file_size_limit_5' => '图片大小不能超过 5MB!',
    'please_add_again' => '请重新添加',
    'content' => '正文',
    'link_err' => '链接格式不正确',
    'determine' => '确定',
    'reset' => '重置',

    'picture' => '图片',
    'picture_edit' => '图片编辑',
    'picture_name' => '图片名称',
    'picture_tips' => [
        0 => '图片大小: 不超过1M, 格式: jpg。',
    ],

    'voice' => '语音',
    'voice_tips' => [
        0 => '语音素材大小: 不超过2M, 长度: 不超过60s, 格式: mp3, amr',
    ],
    'video' => '视频',
    'video_tips' => [
        0 => '视频素材大小: 建议2MB以下，格式：MP4',
        1 => '建议直接使用优酷等第三方视频网站的视频地址。优点:不占用服务器资源，支持更大、更多格式的视频素材。',
    ],
    'video_add' => '视频添加',
    'upload_video_file' => '上传视频文件',
    'video_title' => '标题',
    'video_desc' => '简介',
    'voice_empty' => '请上传语音',
    'video_empty' => '请上传视频',
    'upload_video' => '上传视频',
    'file_size_limit' => '文件大小超出最大限制，请重新上传',
    'file_not_exist' => '文件不存在',

    'config_wxt' => '请联系管理员配置平台微信通',
    'graphic_message' => '图文消息',
    'small_procedures' => '小程序',
    'fail_message' => '发送失败！仅48小时内给公众号发送过信息的粉丝才能接收到信息',

    //菜单
    'menu' => '自定义菜单',
    'menu_tips' => [
        0 => '微信自定义菜单最多可添加3个一级菜单、5个二级菜单。',
        1 => '微信自定义菜单分为关键词click，网址view两种类型。click是响应关键词指令，view则是直接跳转URL地址（填写绝对路径）。',
        2 => '每次修改自定义菜单后，由于微信客户端缓存，需要24小时左右微信客户端才会显示生效。测试时可以尝试重新关注微信公众号，或者清除微信缓存。',
    ],
    'menu_add' => '菜单添加',
    'menu_edit' => '菜单编辑',
    'menu_name' => '菜单名称',
    'menu_type' => '菜单类型',
    'menu_parent' => '父级菜单',
    'menu_select' => '请选择菜单',
    'menu_click' => '点击',
    'menu_view' => '网页',
    'menu_miniprogram' => '小程序',
    'menu_keyword' => '菜单关键词',
    'menu_url' => '外链URL',
    'menu_mini_appid' => 'AppID',
    'menu_mini_page' => '小程序页面',
    'menu_create' => '生成自定义菜单',
    'menu_show' => '显示',
    'menu_url_length' => 'url链接超出限制长度',
    'menu_empty' => '请至少添加一个自定义菜单',
    'menu_select_del' => '请选择需要删除的菜单',
    'menu_not_exit' => '菜单不存在或已删除',
    'menu_help1' => '如无特殊需要，这里请不要填写 (如果要实现一键拨号，请填写"tel:您的电话号码")',

    //关注用户
    'sub_title' => '粉丝管理',
    'sub_list' => '关注用户',
    'sub_search' => '可输入昵称、城市、国家、省份关键词搜索',
    'search_for' => '搜索',
    'sub_headimg' => '头像',
    'sub_openid' => '微信用户唯一标识(openid)',
    'sub_nickname' => '昵称',
    'sub_area' => '地区',
    'sub_sex' => '性别',
    'sub_province' => '省(直辖市)',
    'sub_city' => '城市',
    'sub_time' => '关注时间',
    'sub_move' => '转移',
    'sub_move_sucess' => '转移分组成功',
    'sub_group' => '所在分组',
    'sub_update_user' => '更新粉丝',
    'send_custom_message' => '发送客服消息',
    'custom_message_list' => '客服消息列表',
    'message_content' => '消息内容',
    'message_time' => '发送时间',
    'button_send' => '发送',
    'select_openid' => '请选择微信用户',
    'sub_help1' => 'PS：仅48小时内与微信公众号有互动的粉丝才能接收到信息，可用于某些活动通知粉丝中奖等应用场景',
    'sub_binduser' => '绑定用户',
    'interactive_user' => '互动用户',
    'official' => '公众号',
    'share_list' => '分享统计',
    'sub_list_tips' => [
        0 => '粉丝管理：显示已经关注微信公众号的用户信息，未关注的不显示。',
        1 => '1.搜索功能支持 通过用户昵称、城市、国家，省份搜索。',
        2 => '2.标签管理,一个公众号，最多可以创建100个标签。每个公众号可以为用户打上最多20个标签',
        3 => '3.发送客服消息，可以单独发送微信消息给微信用户（只有48小时内和公众号有过互动的粉丝才能接收到信息，否则会发送失败）应用场景 例如，通知用户中奖领取奖品等事宜。',
        4 => '★ 注意事项：在对用户进行发送消息，打标签等操作之前，请及时点击更新按钮，以便同步微信公众号平台的用户分组（标签）与数量。'
    ],
    'sub_from' => '粉丝来源',
    'sub_user' => '查看会员',
    'keywords_empty' => '搜索关键字不能为空',

    'update_complete' => '更新完成',

    //分组
    'group_sys' => '同步分组',
    'group_title' => '分组管理',
    'group_num' => '公众平台中的编号',
    'group_name' => '分组名称',
    'group_fans' => '粉丝量',
    'group_add' => '添加分组',
    'group_edit' => '编辑分组',
    'group_update' => '更新',
    'group_move' => '将选中粉丝转入分组',
    'select_please' => '请先选择粉丝',

    //标签
    'tag_sys' => '同步标签',
    'tag_title' => '标签管理',
    'tag_num' => '公众平台中的编号',
    'tag_name' => '标签名称',
    'tag_fans' => '粉丝量',
    'tag_add' => '添加标签',
    'tag_edit' => '编辑标签',
    'tag_update' => '更新',
    'tag_join' => '加入',
    'tag_move' => '将选中粉丝添加标签',
    'tag_move_sucess' => '加入标签成功',
    'tag_move_fail' => '加入标签失败',
    'tag_move_exit' => '已经加入过此标签',
    'tag_move_three' => '一个用户最多只能添加三个标签',
    'user_tag' => '用户标签',
    'tag_delete' => '删除标签',
    'tag_delete_sucess' => '删除标签成功',
    'tag_delete_fail' => '删除标签失败',
    'batch_tagging_limit' => '批量加入标签数量一次不能超过50',
    'edit_remark_name' => '修改备注名',
    'remark_name' => '备注名',
    'input_remark_name' => '请输入备注名',
    'remark_name_empty' => '备注名不能为空',
    'edit_remark_name_success' => '修改备注名成功',
    'confirm_delete_tag' => '您确定要删除此标签吗？',
    'tag_empty' => '请选择标签',

    //二维码
    'qrcode_manage' => '二维码管理',
    'qrcode_list' => '二维码列表',
    'qrcode_list_tips' => [
        0 => '渠道二维码。可生成临时二维码或永久二维码 用于线下某些场景展示，让用户扫描关注，效果类似关注微信公众号。',
        1 => '临时二维码，是有过期时间的，最长可以设置为在二维码生成后的30天（即2592000秒）后过期，但能够生成较多数量。临时二维码主要用于帐号绑定等不要求二维码永久保存的业务场景',
        2 => '永久二维码，是无过期时间的，但数量较少（目前为最多10万个）。永久二维码主要用于适用于帐号绑定、用户来源统计等场景。',
        3 => '应用场景值ID，临时二维码时为32位非0整型(100001-4294967295)，永久二维码时最大值为100000（目前参数只支持1--100000），请从小大到依次填写',
    ],

    'qrcode_edit' => '二维码编辑',
    'qrcode_edit_tips' => [
        0 => '填写系统自带关键词（功能扩展）或自动回复里的关键词自定义回复规则关键词',
        1 => '应用场景值：从小大到依次填写非0整型数值',
    ],
    'qrcode' => '渠道二维码',
    'qrcode_scene' => '应用场景',
    'qrcode_scene_value' => '应用场景值ID',
    'qrcode_scene_limit' => '该用户的二维码已经存在',
    'qrcode_scene_value_limit' => '该应用场景值ID已经存在了，请更换一个',
    'qrcode_type' => '二维码类型',
    'qrcode_function' => '关键词',
    'qrcode_function_desc' => '选择关键词',
    'qrcode_short' => '临时二维码',
    'qrcode_forever' => '永久二维码',
    'qrcode_get' => '获取二维码',
    'qrcode_isdisabled' => '二维码已禁用，请重新启用',
    'qrcode_islosed' => '推荐人不存在，二维码已失效，请重新添加',
    'qrcode_valid_time' => '二维码有效时间',
    'minute' => '分钟',
    'hour' => '小时',
    'day' => '天',
    'qrcode_help1' => '默认30分钟（1800秒），临时二维码最大不超过30天（即2592000秒）,永久二维码不用填写',
    'qrcode_help2' => '临时二维码取值 100001-4294967295 之间，永久二维码取值 1-100000 之间，不要重复',
    'qrcode_short_limit' => '临时二维码最大不能超过30天',
    'qrcode_short_range' => '临时二维码取值区间 100001 - 4294967295',
    'qrcode_forever_range' => '永久二维码取值区间 1- 100000',
    'goto_reply_keywords' => '去添加自定义关键词',
    'qrcode_get_notice' => '复制二维码链接，可分享到朋友圈',
    'qrcode_valid_time_placeholder' => '默认30分钟（1800秒）',

    //扫码引荐
    'share' => '扫码引荐',
    'share_qrcode' => '推荐二维码',
    'share_name' => '推荐人',
    'share_userid' => '推荐人用户ID',
    'share_userid_desc' => '即会员编号（只支持1--100000）',
    'share_account' => '现金分成',
    'scan_num' => '扫描量',
    'expire_seconds' => '有效时间',
    'share_help' => '不填则为无限制，如果填写了则二维码有过期时间，过期失效！',
    'no_limit' => '无限制',
    'users_not_exit' => '用户不存在或已被删除',
    'share_tips' => [
        '扫码引荐：即管理员可以使用网站已有会员生成带推荐功能的二维码（默认永久二维码），让新用户扫码关注，即与推荐人形成上下级关系。',
        '推荐二维码的扫描量为新用户首次扫码量，即每注册一个新用户算一次',
        '需要开启网站推荐注册分成功能使用。<a href="../affiliate.php?act=list">去开启推荐设置</a>'
    ],

    //模板消息
    'templates' => '消息提醒',
    'template_title' => '模板标题',
    'template_id' => '模板ID',
    'template_code' => '模板编号',
    'template_content' => '模板内容',
    'template_remark' => '备注',
    'template_edit_fail' => '编辑失败',
    'please_select_industry' => '请选择主行业和副行业',
    'please_apply_template' => '请登录微信公众号平台，申请开通模板消息',
    'templates_tips' => [
        '消息提醒，即微信模板消息，需要先登录微信公众号平台，添加插件，申请开通模板消息。',
        '然后选择填写所在行业： IT科技/互联网|电子商务，如果有其他行业则选填：IT科技/电子技术。每月可更改1次所选行业',
        '启用列表所需要的模板消息，即可在相应事件触发模板消息；编辑模板消息备注，可增加显示自定义提示消息内容',
        '每个公众号账号可以同时使用25个模板，超过将无法使用模板消息功能。'
    ],
    'industry' => '所在行业',
    'main_industry' => '主营行业',
    'deputy_industry' => '副营行业',
    'edit_industry' => '修改行业',
    'choose_main_industry' => '选择主行业',
    'main_industry_01' => 'IT科技 / 互联网|电子商务',
    'choose_deputy_industry' => '选择副行业',
    'deputy_industry_01'=> 'IT科技 / 电子技术',
    'confirm_reset' => '您确定要重置模板消息吗？',

    // 功能扩展
    'wechat_extend' => '功能扩展',
    'wechat_extend_tips' => [
        0 => '功能扩展，为系统默认提供的关键词自动回复功能，结合网站商品，会员，订单等功能提供互动查询服务，配合微信自定义菜单使用。',
        1 => '如果需要则安装并填写一下配置信息，复制对应的关键词，加入到微信自定义菜单中使用。',
        2 => '例如，精品 对应的关键词是 best（也可以使用相应的扩展词），在自定义菜单中添加一个菜单，菜单类型选择 关键词click。'
    ],
    'extend_edit' => '安装扩展',
    'confirm_uninstall' => '确定要卸载此插件吗？',
    'export' => '导出',
    'must_keywords' => '请填写扩展词',
    'extend_is_enabled' => '插件已安装',
    'please_select_commond' => '请选择要操作的功能',
    'extend_name' => '功能名称',
    'extend_command' => '功能关键词',
    'extend_keywords' => '扩展词',
    'extend_keywords_notice' => '多个扩展词，请用英文“,”隔开',
    'point_status' => '是否开启积分赠送',
    'point_value' => '成长值',
    'point_num' => '有效次数',
    'point_num_notice' => '时间间隔内的有效次数',
    'point_interval' => '时间间隔',
    'people_num' => '参与人数',
    'people_num_notice' => '统计所有参与过此活动的微信用户数量（包含未中奖和已中奖用户）',
    'period_time' => '起止时间',
    'prize_num' => '抽奖次数',
    'prize_num_notice' => '即起止时间段内，用户总共可抽奖的次数',
    'prize_list' => '奖品列表',
    'prize_level' => '奖项',
    'prize_count' => '奖品数量',
    'prize_prob' => '概率(总数为100%)',
    'for_example' => '例如',
    'activity_rules' => '活动规则',
    'media_info' => '素材信息',
    'edit_media' => '编辑素材',
    'media_info_notice' => '对应素材管理中的素材，请注意不要删除',
    'prize_level_0' => '未中奖',
    'prize_level_1' => '一等奖',
    'prize_level_2' => '二等奖',
    'prize_level_3' => '三等奖',
    'prize_level_4' => '四等奖',
    'prize_level_5' => '五等奖',
    'prize_level_6' => '六等奖',
    'wechat_js_languages' => [
        'prize_level_limited_6' => '奖项不能超过6项',
        'prize_count_not_minus' => '数量不能为负数',
        'prize_prob_not_minus' => '中奖概率值不能为负数',
        'prize_prob_max_limited_100' => '中奖概率值不能超过100',
        'prize_prob_sum_max_limited_100' => '中奖概率总和不能超过100',
    ],

    'winner_list' => '中奖记录',
    'winner_list_tips' => [
        0 => '中奖名称显示所有中奖的用户信息，未中奖的、未关注微信公众号的不显示。',
        1 => '可根据用户填写的联系方式，线下联系用户相关领奖事宜，点击通知用户可以推送一条微信通知消息。（此消息需要用户关注微信公众号，并且48小时内与之有过互动，才能发送成功）',
        2 => '相关奖品发送并与用户确认完成后，点击 立即发放，以标识此用户已经领奖。'
    ],
    'prize_name' => '奖品',
    'issue_status' => '是否发放',
    'winner_info' => '中奖用户信息',
    'prize_time' => '中奖时间',
    'please_select_prize' => '请选择中奖记录',
    'unset_issue_status' => '取消发放',
    'set_issue_status' => '发放奖品',
    'send_message' => '通知用户',
    'already_issue' => '已发放',
    'no_issue' => '未发放',
    'user_name' => '姓名',
    'user_mobile' => '手机号',
    'user_address' => '联系地址',

    'sign_list' => '签到记录',
    'sign_list_tips' => [
        0 => '显示所有粉丝签到记录，未关注微信公众号的不显示。',
    ],
    'sign_time' => '签到时间',
    'sign_prize' => '签到奖励',
    'sign_remark' => '签到备注',
    'cou_man_0' => '无门槛',
    'cou_man_1' => '购物满:cou_man元可用',

    // 营销模块
    'wechat_market' => '营销中心',
    'wechat_market_tips' => [
        0 => '营销中心，点击管理，进入创建活动页面，配置参数。',
    ],

    'wechat_wall' => '微信墙',
    'wechat_zjd' => '砸金蛋',
    'wechat_dzp' => '大转盘',
    'wechat_ggk' => '刮刮卡',
    'wechat_redpack' => '现金红包',
    'no_start' => '未开始',
    'start' => '进行中',
    'over' => '已结束',
    'market_list' => '活动列表',
    'market_name' => '活动名称',
    'market_edit' => '编辑活动',
    'market_add' => '添加活动',
    'market_qrcode' => '活动二维码',
    'market_delete' => '删除活动',
    'data_list' => '数据列表',

    'is_checked' => '已审核',
    'no_check' => '未审核',
    'check' => '审核',
    'is_sended' => '已发放',
    'cancle_send' => '取消发放',
    'no_send' => '未发放',
    'send' => '立即发放',


    'normal_redpack' => '普通红包',
    'group_redpack' => '裂变红包',

    'share_title' => '分享标题',
    'share_description' => '分享描述',
    'activity_title' => '活动页标题',
    'advertice_content' => '广告内容',

    'data_null' => '没有可导出数据',

];
