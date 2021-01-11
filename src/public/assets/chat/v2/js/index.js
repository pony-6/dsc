;!function (window) {
    var $ = layui.jquery
        , element = layui.element
        , form = layui.form
        , layer = layui.layer
        , layedit = layui.layedit;

    var app = new Vue({
        el: '.wrap',
        data: {
            user: {
                name: 'zhsan',
                avatar: 'avatar.png'
            },
            dialogs: [
                {id: 1}
            ],
            shop: {},
            message: 'Hello Vue!'
        },
        created: function () {
            $.get(setting.url + '/cs/api/init', function (res) {
                console.log(res)
            })
        }
    });

    layedit.build('message', {
        tool: ['face', 'image'],
        height: 144,
        uploadImage: {url: setting.url + '/cs/api/upload', type: 'post'}
    }); // 建立编辑器
}(window);
