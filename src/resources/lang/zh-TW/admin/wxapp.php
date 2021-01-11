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
    'status' => '狀態',
    'sequence' => '排序',
    'operating' => '操作',
    'open' => '開啟',
    'close' => '關閉',
    'editor' => '編輯',
    'see' => '查看',
    'edit' => '卸載',
    'drop' => '刪除',
    'confirm_delete' => '確定刪除嗎？',
    'button_save' => '保存',
    'add_time' => '添加時間',

    'num_order' => '編號',
    'errcode' => '錯誤代碼：',
    'errmsg' => '錯誤信息：',
    'control_center' => '管理中心',
    'edit_wechat' => '公眾號設置',
    'sort_order' => '排序',
    'empty' => '不能為空',
    'success' => '成功',
    'handler' => '操作',
    'button_search' => '搜索',
    'enabled' => '啟用',
    'disabled' => '禁用',
    'already_enabled' => '已啟用',
    'already_disabled' => '已禁用',
    'to_enabled' => '點擊啟用',
    'to_disabled' => '點擊禁用',

    'wx_menu' => '小程序',

    //模板消息
    'templates' => '消息提醒',
    'template_title' => '模板標題',
    'template_id' => '模板ID',
    'template_code' => '模板編號',
    'template_content' => '模板內容',
    'template_remark' => '備注',
    'template_edit_fail' => '編輯失敗',
    'please_select_industry' => '請選擇小程序类目：服装/鞋/箱包',
    'selected_industry' => '已選擇小程序类目',
    'please_apply_template' => '請登錄微信公眾號平台，申請開通订阅消息',

    'confirm_reset_template' => '您確定要重置模板消息嗎？',
    'template_tips' => [
        0 => '消息提醒，即小程序订阅消息，需要先登錄小程序微信公眾號平台。',
        1 => '啟用列表所需要的模板消息，即可在相應事件觸發订阅消息；編輯模板消息備注，可增加顯示自定義提示消息內容',
        2 => '每個小程序賬號可以同時使用25個模板，超過將無法使用订阅消息功能。',
    ],

    'wx_config' => '配置',
    'wx_config_tips' => [
        0 => '一、配置前先 <a href="https://mp.weixin.qq.com/debug/wxadoc/introduction/index.html" target="_blank">注冊小程序</a>，進行微信認證, 已有微信小程序 <a href="https://mp.weixin.qq.com/" target="_blank">立即登錄</a>',
        1 => '二、登錄 <a href="https://mp.weixin.qq.com/" target="_blank">微信公眾號平台 </a>後，在 設置 - 開發者設置 中，查看到微信小程序的
                    AppID、Appsecret，並配置填寫好域名。（注意不可直接使用微信服務號或訂閱號的 AppID、AppSecret）',
        2 => '三、微信認證後，開通小程序微信支付。開通後，配置小程序微信支付的商戶號和密鑰。',
        3 => '四、小程序退款 需要配置證書，證書與公眾號支付證書相同，安裝支付方式配置證書。',
    ],
    'wx_appname' => '小程序名稱',
    'wx_appid' => '小程序AppID',
    'wx_appsecret' => '小程序AppSecret',
    'wx_mch_id' => '小程序微信支付商戶號',
    'wx_mch_key' => '小程序微信支付密鑰',
    'token_secret' => 'Token授權密鑰',
    'make_token' => '生成Token',
    'copy_token' => '復制Token',

    'wxapp_help1' => '小程序AppID，非微信公眾號AppID',
    'wxapp_help2' => '小程序AppSecret，非微信公眾號AppSecret',
    'wxapp_help3' => '小程序微信支付商戶號',
    'wxapp_help4' => '小程序微信支付密鑰',
    'wxapp_help5' => 'Token授權加密key（32位字元）,用於小程序授權登錄。重要信息，請不要隨意泄露給他人！',

    'must_appid' => '請填寫小程序AppID',
    'must_appsecret' => '請填寫小程序AppSecret',
    'must_mch_id' => '請填寫小程序微信支付商戶號',
    'must_mch_key' => '請填寫小程序微信支付密鑰',
    'must_token_secret' => '請填寫生成32位token密鑰',
    'open_wxapp' => '請配置並開啟小程序',
    'wx_sslcert' => '支付證書cert',
    'wx_sslkey' => '支付證書key',
    'wxapp_sslcert_help' => '證書可選填，用於退款。請在微信商戶後台下載支付證書，用記事本打開apiclient_cert.pem，並復制裡面的內容粘貼到這里',
    'wxapp_sslkey_help' => '證書可選填，用於退款。請在微信商戶後台下載支付證書，用記事本打開apiclient_key.pem，並復制裡面的內容粘貼到這里',

    'wxapp_live' => '小程序直播',
    'wxapp_live_goods' => '直播商品库',
    'wxapp_live_goods_tips' => [
        '小程序直播間商品庫，可添加小程序直播內使用的商品信息並操作提審，將添加的商品提交到微信小程序方進行審覈，審覈時間爲1-7天，商品庫審覈通過商品上限爲2000個，每天最多提審500個，具體文檔請參考：
https://developers.weixin.qq.com/miniprogram/dev/framework/liveplayer/live-player-plugin.html；',
        '更新商品：通過點擊該按鈕可以獲取小程序端直播商品信息到本地；'
    ],
    'all_audit_status' => '全部',
    'audit_status_0' => '未審覈',
    'audit_status_1' => '審覈中',
    'audit_status_2' => '審覈通過',
    'audit_status_3' => '審覈失败',
    'audit_status_3_today' => '今日提審',
    'add_live_goods' => '添加直播商品',
    'sync_live_goods' => '更新商品',
    'search_keywords' => '搜索商品名稱',
    'audit_status' => '審覈状态',
    'is_audit' => '是否提審',
    'is_audit_0' => '未提審',
    'is_audit_1' => '已提審',
    'goods_name' => '商品名稱',
    'cover_img_url' => '商品封面',
    'goods_url' => '商品鏈接',
    'audit_time' => '提審時間',
    'audit' => '提審',
    'reset_audit' => '撤回提審',
    'repeat_audit' => '提交審覈',
    'price_type' => '價格',
    'price_type_1' => '一口價',
    'price_type_2' => '價格區間',
    'price_type_3' => '顯示折扣價',
    'price_type_3_1' => '原價',
    'price_type_3_2' => '现價',

    'add_live_goods_tips' => [
        '添加小程序直播间内商品，需上传商品封面，填寫商品名稱、價格、关联小程序商品鏈接，填寫后可操作保存和保存并提審；',
        '選擇保存則僅保存已填寫信息暫不提交至微信方進行審覈，保存并提審則在保存信息的同时提交至微信審覈，每天提審上限500個'
    ],
    'cover_img_url_notice' => '建議尺寸：200*200，圖片大小不超過80K',
    'goods_name_notice' => '商品名稱，最長14個漢字，1個漢字相當於2個字符',
    'price_type_notice' => '单位：元，支持3种價格模式，可填寫至小數點後兩位，如小數點後兩位爲0則不顯示',
    'goods_url_notice' => '填寫该商品在小程序内的商品鏈接，例如：pages/goodsDetail/goodsDetail?id=goods_id',
    'cover_img_url_empty' => '請上傳商品封面圖',
    'goods_id_empty' => '商品ID不能为空',
    'goods_name_empty' => '請输入商品名稱',
    'goods_name_max' => '商品名稱長度不能超過14個漢字或28個字符',
    'price_type_empty' => '請選擇價格类型',
    'price_type_1_empty' => '一口價不能为空',
    'price_type_2_empty' => '價格區間值不能为空',
    'price_type_3_empty' => '折扣價不能为空',
    'goods_url_empty' => '商品鏈接不能为空',
    'submit_audit' => '保存并提審',
    'confirm_delete_goods' => '確認刪除此商品嗎？此操作不可恢復',
    'confirm_submit_audit' => '確認提審商品到微信嗎？',
    'confirm_reset_audit' => '確認要撤回商品提審嗎？成功撤回后可再次发起提審申請',
    'confirm_repeat_audit' => '確認重新提審嗎',

    'edit_live_goods' => '編輯商品',
    'edit_live_goods_tips' => [
        '編輯小程序商品'
    ],
    'sync_live_goods_tips' => [
        '同步更新小程序後臺直播商品信息、審覈状态'
    ],
    'updating_complete' => '正在更新... 請勿關閉窗口',
    'update_completed' => '更新完成',
];