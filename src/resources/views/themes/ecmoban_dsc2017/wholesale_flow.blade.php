<!doctype html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="Keywords" content="{{ $keywords }}"/>
    <meta name="Description" content="{{ $description }}"/>

    <title>{{ $page_title }}</title>


    <link rel="shortcut icon" href="favicon.ico"/>
    @include('frontend::library/js_languages_new')
    <link rel="stylesheet" type="text/css" href="{{ skin('css/wholesale_new.css') }}"/>
</head>

<body class="bg-ligtGary">
@include('frontend::library/page_header_business')

@if($step == "cart")

    <div class="content b2b-content">

        @if($goods_data)

            <form name="formCart" method="post" action="wholesale_flow.php" onsubmit="return submit_order();">
                <div class="w w1200">
                    <div class="b2b-cart">
                        <div class="b2b-cart-filter">
                            <i class="iconfont icon-b2b-cart"></i>
                            <div class="tit">{{ $lang['my_purchase_list'] }}（<em class="org"
                                                                                 ectype="cartNum">{{ $cart_info['rec_count'] }}</em>）
                            </div>
                        </div>
                        <div class="cart-table b2b-cart-table">
                            <div class="cart-head">
                                <div class="column c-checkbox">
                                    <div class="cart-checkbox cart-all-checkbox" ectype="ckList">
                                        <input type="checkbox" id="cart-selectall" class="ui-checkbox checkboxshopAll"
                                               ectype="ckAll">
                                        <label for="cart-selectall" class="ui-label-14">{{ $lang['check_all'] }}</label>
                                    </div>
                                </div>
                                <div class="column c-goods">{{ $lang['product'] }}</div>
                                <div class="column c-quantity">{{ $lang['number'] }}</div>
                                <div class="column c-price">{{ $lang['unit_price'] }}</div>
                                <div class="column c-pay">{{ $lang['trading'] }}</div>
                                <div class="column c-sum">{{ $lang['subtotal'] }}</div>
                            </div>
                            <div class="cart-tbody" ectype="cartTboy">

                                @foreach($goods_data as $data)

                                    <div class="cart-item" ectype="shopItem">
                                        <div class="shop">
                                            <div class="cart-checkbox" ectype="ckList">
                                                <input type="checkbox" id="shopid_{{ $data['ru_id'] }}" name="checkShop"
                                                       class="ui-checkbox CheckBoxShop" ectype="ckShopAll">
                                                <label for="shopid_{{ $data['ru_id'] }}"
                                                       class="ui-label-14">&nbsp;</label>
                                            </div>
                                            <div class="shop-txt">
                                                <a href="merchants_store.php?merchant_id={{ $data['ru_id'] }}"
                                                   target="_blank" class="shop-name">{{ $data['shop_name'] }}</a>
                                                <!--<a href="#" class="p-kefu p-c-org" target="_blank"><i class="iconfont icon-kefu"></i></a>-->

                                                <a id="IM" href="javascript:openWin(this)"
                                                   goods_id="{{ $goods['goods_id'] }}" class="p-kefu
@if($data['ru_id'] == 0)
                                                        p-c-violet
@endif
                                                        " target="_blank"><i class="iconfont icon-kefu"></i></a>

                                            </div>
                                        </div>

                                        @foreach($data['goods_list'] as $goods)

                                            <div class="item-list" ectype="itemList"
                                                 data-goods_id="{{ $goods['goods_id'] }}"
                                                 data-moq="{{ $goods['moq'] }}">
                                                <div class="item-single">
                                                    <div class="item-item" ectype="item">
                                                        <div class="item-form">

                                                            @if($goods['enabled'])

                                                                <div class="cell s-checkbox">
                                                                    <div class="cart-checkbox" ectype="ckList">
                                                                        <input type="checkbox"
                                                                               id="checkItem_{{ $goods['goods_id'] }}"
                                                                               value="{{ $goods['goods_id'] }}"
                                                                               name="checkItem" class="ui-checkbox"
                                                                               ectype="ckGoods">
                                                                        <label for="checkItem_{{ $goods['goods_id'] }}"
                                                                               class="ui-label-14">&nbsp;</label>
                                                                    </div>
                                                                </div>

                                                            @endif

                                                            <div class="cell s-image"><a href="{{ $goods['url'] }}"
                                                                                         target="_blank"><img
                                                                            src="{{ $goods['goods_thumb'] }}"></a></div>
                                                            <div class="cell s-name"><a href="{{ $goods['url'] }}"
                                                                                        target="_blank">{{ $goods['goods_name'] }}</a>
                                                                @if(!$goods['enabled'])
                                                                    <span class="red">（该商品已下架）</span>
                                                                @endif
                                                            </div>
                                                            <div class="sg-warp">
                                                                <div class="sgw-section" ectype="attrItems">
                                                                    <table class="table">
                                                                        <colgroup>
                                                                            <col width="180">
                                                                            <col width="180">
                                                                            <col width="180">
                                                                            <col width="180">
                                                                            <col width="150">
                                                                            <col>
                                                                        </colgroup>

                                                                        @foreach($goods['list'] as $one)

                                                                            <tr data-goods_id="{{ $goods['goods_id'] }}"
                                                                                data-rec_id="{{ $one['rec_id'] }}">
                                                                                <td class="row">

                                                                                    @foreach($one['goods_attr'] as $attr)


                                                                                        @if(!$loop->last)

                                                                                            <span class="area">{{ $attr['attr_name'] }}
                                                                                                ：<em>{{ $attr['attr_value'] }}</em></span>

                                                                                        @endif


                                                                                    @endforeach

                                                                                </td>
                                                                                <td class="row">
                                                                                    @if (!empty($one['goods_attr']))
                                                                                        @foreach($one['goods_attr'] as $attr)


                                                                                        @if($loop->last)


                                                                                            @if($goods['enabled'])

                                                                                                <div class="lie">
                                                                                                    <div class="cart-checkbox
@if(!$attr['attr_value'])
                                                                                                            hide
@endif
                                                                                                            " ectype="">
                                                                                                        <input type="checkbox"
                                                                                                               id="attr_item_{{ $one['rec_id'] }}"
                                                                                                               value="{{ $one['rec_id'] }}"
                                                                                                               name="rec_ids[]"
                                                                                                               class="ui-checkbox"
                                                                                                               ectype="attrItem"
                                                                                                               @if($one['is_checked'])
                                                                                                               checked
                                                                                                                @endif
                                                                                                        >
                                                                                                        <label for="attr_item_{{ $one['rec_id'] }}"
                                                                                                               class="ui-label-14">{{ $attr['attr_name'] }}
                                                                                                            ：</label>
                                                                                                    </div>
                                                                                                    <div class="value">
                                                                                                        @if($attr['attr_value'])
                                                                                                            {{ $attr['attr_value'] }}
                                                                                                        @endif
                                                                                                    </div>
                                                                                                </div>

                                                                                            @else

                                                                                                <div class="lie">
                                                                        <span>{{ $attr['attr_name'] }}：
                                                                            @if($attr['attr_value'])
                                                                                {{ $attr['attr_value'] }}
                                                                            @endif
</span>
                                                                                                </div>

                                                                                            @endif


                                                                                        @endif


                                                                                    @endforeach
                                                                                    @else
                                                                                        <div class="lie">
                                                                                            <div class="cart-checkbox hide" ectype="">
                                                                                                <input type="checkbox"
                                                                                                       id="attr_item_{{ $one['rec_id'] }}"
                                                                                                       value="{{ $one['rec_id'] }}"
                                                                                                       name="rec_ids[]"
                                                                                                       class="ui-checkbox"
                                                                                                       ectype="attrItem"
                                                                                                       @if($one['is_checked'])
                                                                                                       checked
                                                                                                        @endif
                                                                                                >
                                                                                                <label for="attr_item_{{ $one['rec_id'] }}"
                                                                                                       class="ui-label-14"></label>
                                                                                            </div>
                                                                                            <div class="value">
                                                                                            </div>
                                                                                        </div>
                                                                                    @endif
                                                                                </td>
                                                                                <td class="row is-size" ectype="buyNum">

                                                                                    @if($goods['enabled'])

                                                                                        <div class="lie">
                                                                                            <div class="number">
                                                                                                <a href="javascript:void(0)"
                                                                                                   class="decrement btn-reduce">-</a>
                                                                                                <input name="goods_number[{{ $one['rec_id'] }}]"
                                                                                                       type="text"
                                                                                                       id="quantity"
                                                                                                       class="itxt buy-num"
                                                                                                       value="{{ $one['goods_number'] }}"
                                                                                                       size="10">
                                                                                                <a href="javascript:void(0)"
                                                                                                   class="increment btn-add">+</a>
                                                                                            </div>
                                                                                        </div>

                                                                                    @else

                                                                                        <div class="lie">
                                                                                            <span>{{ $one['goods_number'] }}</span>
                                                                                        </div>

                                                                                    @endif

                                                                                </td>

                                                                                @if($loop->first)

                                                                                    <td rowspan="{{ $goods['count'] }}"
                                                                                        class="row"
                                                                                        ectype="rec_volume_price">
                                                                                        @include('frontend::library/wholesale_cart_volume_price')
                                                                                    </td>
                                                                                    <td rowspan="{{ $goods['count'] }}"
                                                                                        class="row">{{ $lang['self-selection'] }}</td>

                                                                                @endif

                                                                                <td class="row"
                                                                                    ectype="rec_total_price">
                                                                                    <div class="lie">
                                                                                        <div class="p-price">{{ $one['total_price_formatted'] }}</div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                        @endforeach

                                                                    </table>
                                                                    <div class="row-delete"><a
                                                                                href="javascript:void(0);"
                                                                                ectype="delete"
                                                                                data-goods_id="{{ $goods['goods_id'] }}"><i
                                                                                    class="iconfont icon-remove-alt"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach

                                    </div>

                                @endforeach

                            </div>
                            <div class="cart-tfoot" ectype="tfoot-toolbar">
                                <div class="cart-toolbar">
                                    <div class="w w1200">
                                        <div class="cart-checkbox cart-all-checkbox" ectype="ckList">
                                            <input type="checkbox" id="toggle-checkboxes-down"
                                                   class="ui-checkbox checkboxshopAll" ectype="ckAll">
                                            <label for="toggle-checkboxes-down"
                                                   class="ui-label-14">{{ $lang['check_all'] }}</label>
                                        </div>
                                        <div class="operation">
                                            <a href="javascript:void(0);" class="cart-remove-batch"
                                               ectype="batch_delete">{{ $lang['delete-check-goods'] }}</a>
                                        </div>
                                        <div class="toolbar-right">
                                            <div class="comm-right">
                                                <div class="btn-area">
                                                    <input name="step" value="checkout" type="hidden">
                                                    <input name="goPay" type="button" class="submit-btn" value="去下单"
                                                           ectype="submit">
                                                </div>
                                                <div class="price-sum" id="total_desc">
                                                    <span class="txt">{{ $lang['product_all_subtotal'] }}：</span>
                                                    <span class="price sumPrice org" id="cart_goods_amount"
                                                          ectype="total_price">{{ $cart_info['total_price_formatted'] }}</span>
                                                </div>
                                                <div class="amount-sum"><span class="ftx-03">{{ $lang['all_number'] }}
                                                        ：</span><em
                                                            ectype="total_number">{{ $cart_info['total_number'] }}</em>{{ $lang['piece'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hide" ectype="daDialog">
                    <div class="deliveryAddress">
                        <div class="items">
                            <div class="item">
                                <div class="label"><em class="org">*</em>{{ $lang['linkman'] }}：</div>
                                <div class="value">
                                    <input type="text" class="text" name="consignee" value="" autocomplete="off">
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><em class="org">*</em>{{ $lang['phone'] }}：</div>
                                <div class="value"><input type="text" class="text" name="mobile" value=""></div>
                            </div>
                            <div class="item">
                                <div class="label"><em class="org">*</em>{{ $lang['shipping_address'] }}：</div>
                                <div class="value"><input type="text" class="text" name="address" value=""></div>
                            </div>
                            <div class="item" style="margin-bottom:0px;">
                                <div class="label">{{ $lang['whether_invoice'] }}：</div>
                                <div class="value">
                                    <div class="checkbox_items">
                                        <div class="checkbox_item">
                                            <input type="radio" class="ui-radio" name="inv_type" value="0"
                                                   id="need_invoice_0" ectype="invPayee" autocomplete="off"
                                                   checked="checked">
                                            <label for="need_invoice_0"
                                                   class="ui-b2b-radio-label">{{ $lang['invoice']['0'] }}</label>
                                        </div>
                                        <div class="checkbox_item">
                                            <input type="radio" class="ui-radio" name="inv_type" value="1"
                                                   id="need_invoice_1" ectype="invPayee" autocomplete="off">
                                            <label for="need_invoice_1"
                                                   class="ui-b2b-radio-label">{{ $lang['invoice']['1'] }}</label>
                                        </div>
                                        <div class="checkbox_item">
                                            <input type="radio" class="ui-radio" name="inv_type" value="2"
                                                   id="need_invoice_2" ectype="invPayee" autocomplete="off">
                                            <label for="need_invoice_2"
                                                   class="ui-b2b-radio-label">{{ $lang['invoice']['2'] }}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item" style="display:none;" id="inv_payee">
                                <div class="label">{{ $lang['invoice_title'] }}：</div>
                                <div class="value"><input type="text" class="text" name="inv_payee" value=""></div>
                            </div>
                            <div class="item" style="display:none;" id="tax_id">
                                <div class="label">{{ $lang['registration_number'] }}：</div>
                                <div class="value"><input type="text" class="text" name="tax_id" value=""></div>
                            </div>
                            <div class="item">
                                <div class="label">{{ $lang['pattern_payment'] }}：</div>
                                <div class="value">
                                    <div class="checkbox_items">

                                        @foreach($payment_list as $payment)

                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="pay_id"
                                                       value="{{ $payment['pay_id'] }}"
                                                       id="pay_id_{{ $payment['pay_id'] }}" autocomplete="off"
                                                       @if($pay_id == $payment['pay_id'])
                                                       checked="checked"
                                                        @endif
                                                >
                                                <label for="pay_id_{{ $payment['pay_id'] }}"
                                                       class="ui-b2b-radio-label">{{ $payment['pay_name'] }}</label>
                                            </div>

                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label">{{ $lang['remark'] }}：</div>
                                <div class="value"><textarea name="postscript" class="textarea"></textarea></div>
                            </div>
                        </div>
                    </div>
                </div>
                @csrf </form>

        @else

            <div class="w w1200">
                <div class="cart-empty mt15">
                    <div class="cart-message">
                        <div class="txt">{{ $lang['cart_goods_nothing'] }}</div>
                        <div class="info">
                            <a href="./wholesale.php" class="btn sc-redBg-btn">{{ $lang['goto_stroll'] }}</a>

                            @if(!$user_id)
                                <a href="javascript:void(0);" id="go_pay" data-url="wholesale_flow.php"
                                   class="login">{{ $lang['go_login'] }}</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>

        @endif

    </div>

@elseif ($step == "checkout")

    <div class="container">
        <form action="wholesale_flow.php" method="post" name="doneTheForm" class="validator" id="theForm">
            <div class="w w1200">
                <div class="checkout-warp">

                    <div class="ck-step" id="consignee_list">
                        <div class="ck-step-tit">
                            <h3>{{ $lang['consignee_info'] }}</h3>
                            <a href="user_address.php?act=address_list" class="extra-r"
                               target="_blank">{{ $lang['consignee_address'] }}</a>
                        </div>
                        <div class="ck-step-cont" id="consignee-addr">
                            @include('frontend::library/wholesale_consignee_flow')
                        </div>
                    </div>


                    @if($is_exchange_goods != 1 || $total['real_goods_count'] != 0)

                        <div class="ck-step checkout">
                            <div class="ck-step-tit">
                                <h3>{{ $lang['payment_method'] }}</h3>
                            </div>
                            <div class="ck-step-cont">
                                <div class="payment-warp">
                                    <div class="payment-list" ectype="wholesalePaymentType">

                                        @if($is_presale_goods != 1 && !$store_id)


                                            @foreach($payment_list as $payment)


                                                @if($loop->count == 1)

                                                    <div class="p-radio-item payment-item item-selected"
                                                         data-value='{"type":"{{ $payment['pay_code'] }}","payid":"{{ $payment['pay_id'] }}","allow":"{{ $allow_use_surplus }}"}'>
										<span>
                                            <input type="radio" checked isCod="{{ $payment['is_cod'] }}" name="payment"
                                                   class="ui-radio" value="{{ $payment['pay_id'] }}"/>
                                            <input type="radio" checked name="pay_code" class="ui-radio"
                                                   value="{{ $payment['pay_code'] }}"/>
                                            {{ $payment['pay_name'] }}
                                        </span>
                                                        <b></b>
                                                    </div>

                                                @else


                                                    @if($payment['pay_code'] == 'wxpay' || $payment['pay_code'] == 'alipay' || $payment['pay_code'] == 'balance')

                                                        <div class="p-radio-item payment-item
@if($order['pay_id'] == $payment['pay_id'])
                                                                item-selected
@if($cod_disabled && $payment['is_cod'] == 1)
                                                                hide
@endif

                                                        @else

                                                        @if($cod_disabled && $payment['is_cod'] == 1)
                                                                hide
@endif

                                                        @endif
                                                                "
                                                             data-value='{"type":"{{ $payment['pay_code'] }}","payid":"{{ $payment['pay_id'] }}","allow":"{{ $allow_use_surplus }}"}'>
										<span>
                                            <input type="radio"
                                                   @if($order['pay_id'] == $payment['pay_id'])
                                                   checked
                                                   @endif
                                                   isCod="{{ $payment['is_cod'] }}" name="payment" class="ui-radio"
                                                   value="{{ $payment['pay_id'] }}"/>
                                            <input type="radio"
                                                   @if($order['pay_id'] == $payment['pay_id'])
                                                   checked
                                                   @endif
                                                   name="pay_code" class="ui-radio" value="{{ $payment['pay_code'] }}"/>
                                            {{ $payment['pay_name'] }}
                                        </span>
                                                            <b></b>
                                                        </div>

                                                    @endif


                                                @endif


                                            @endforeach


                                        @else


                                            @foreach($payment_list as $payment)


                                                @if($payment['pay_code'] == 'onlinepay' || $payment['pay_code'] == 'balance')

                                                    <div class="p-radio-item payment-item
@if($order['pay_id'] == $payment['pay_id'])
                                                            item-selected
@if($cod_disabled && $payment['is_cod'] == 1)
                                                            hide
@endif

                                                    @else

                                                    @if($cod_disabled && $payment['is_cod'] == 1)
                                                            hide
@endif

                                                    @endif
                                                            "
                                                         data-value='{"type":"{{ $payment['pay_code'] }}","payid":"{{ $payment['pay_id'] }}"}'>
                                                <span>
                                                    <input type="radio"
                                                           @if($order['pay_id'] == $payment['pay_id'])
                                                           checked
                                                           @endif
                                                           isCod="{{ $payment['is_cod'] }}" name="payment"
                                                           class="ui-radio" value="{{ $payment['pay_id'] }}"/>
                                                    <input type="radio"
                                                           @if($order['pay_id'] == $payment['pay_id'])
                                                           checked
                                                           @endif
                                                           name="pay_code" class="ui-radio"
                                                           value="{{ $payment['pay_code'] }}"/>
                                                    {{ $payment['pay_name'] }}
                                                </span>
                                                        <b></b>
                                                    </div>

                                                @endif


                                            @endforeach


                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif


                    <div class="ck-step">
                        <div class="ck-step-tit">
                            <h3>{{ $lang['goods_info'] }}</h3>

                            @if($order['extension_code'] == '')

                                <a href="wholesale_flow.php" class="extra-r">{{ $lang['back_cart'] }}</a>

                            @else

                                <a href="javascript:history.go(-1);" class="extra-r">{{ $lang['go_back'] }}</a>

                            @endif

                        </div>
                        <div class="ck-step-cont">
                            <div class="ck-goods-warp" id="goods_inventory">
                                @include('frontend::library/wholesale_flow_cart_goods')
                            </div>
                            <div class="ck-order-remark">
                                <input name="postscript" type="text" id="remarkText" maxlength="45" size="15"
                                       class="text" placeholder="{{ $lang['order_Remarks_desc'] }}" autocomplete="off"
                                       onblur="if(this.value==''||this.value=='{{ $lang['order_Remarks_desc'] }}'){this.value='{{ $lang['order_Remarks_desc'] }}';this.style.color='#cccccc'}"
                                       onfocus="if(this.value=='{{ $lang['order_Remarks_desc'] }}') {this.value='';};this.style.color='#666';">
                                <span class="prompt">{{ $lang['order_Remarks_desc_one'] }}</span>
                            </div>
                        </div>
                    </div>


                    @if($config['can_invoice'] && $is_exchange_goods != 1)

                        <div class="ck-step">
                            <div class="ck-step-tit">
                                <h3>{{ $lang['Invoice_information'] }}</h3>
                                <div class="tips-new-white">
                                    <b></b><span><i></i>{{ $lang['company_title_invoice'] }}</span>
                                </div>
                            </div>
                            <div class="ck-step-cont" id='inv_content'>
                                <div class="invoice-warp">
                                    <div class="invoice-part">
                                <span>
                                	<em class="invoice_type">{{ $lang['Ordinary_invoice'] }}</em>
                                    <em class="inv_payee">{{ $lang['personal'] }}</em>
                                    <em class="inv_content">{{ $inv_content }}</em>
                                </span>
                                        <a href="javascript:void(0);" class="i-edit" ectype="wholesale_invEdit"
                                           data-value='{"divid":"edit_invoice","url":"ajax_wholesale.php?act=edit_wholesale_invoice","title":"{{ $lang['Invoice_information'] }}"}'>{{ $lang['edit'] }}</a>
                                        <input type="hidden" name="inv_payee" value="{{ $lang['personal'] }}">
                                        <input type="hidden" name="inv_content" value="{{ $inv_content }}">
                                        <input type="hidden" name="invoice_type" value="0">
                                        <input type="hidden" name="tax_id" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif





                    @if($flow_type != 5)

                        <div class="ck-step hide">
                            <div class="ck-step-tit">
                                <h3>{{ $lang['Other_information'] }}</h3>
                            </div>
                            <div class="ck-step-cont">
                                <div class="other-warp">
                                    <div class="other-list">

                                        @if($allow_use_surplus)

                                            <div class="qt_item hide" id="qt_balance"
                                                 @if($disable_surplus)
                                                 style="display:none"
                                                    @endif
                                            >
                                                <div class="item_label">{{ $lang['use_surplus'] }}：</div>
                                                <div class="item_value">
                                                    <input type="text" class="qt_text" name="surplus" id="ECS_SURPLUS"
                                                           size="10" value="{{ $order['surplus'] }}"
                                                           data-yoursurplus="{{ $your_surplus ?? 0 }}"
                                                           onblur="changeSurplus(this.value)"/>
                                                    <input type="hidden" class="sur"
                                                           value="{{ $total['goods_price_formated'] }}"/>
                                                    <input type="hidden" class="shipping"
                                                           value="{{ $total['shipping_fee_formated'] }}"/>
                                                    <div class="sp">
                                                        <span>{{ $lang['at_present'] }}{{ $lang['your_surplus'] }}</span><em>￥{{ $your_surplus ?? 0 }}</em>
                                                    </div>
                                                    <div class="sp ftx-01" id="ECS_SURPLUS_NOTICE"></div>
                                                </div>
                                            </div>

                                        @endif



                                        @if($open_pay_password)

                                            <div class="qt_item" id="qt_onlinepay">
                                                <div class="item_label">{{ $lang['pay_password'] }}：</div>
                                                <div class="item_value">
                                                    <input type="password" style="display:none" autocomplete="off"/>
                                                    <input type="password" class="qt_text" name="pay_pwd" size="20"
                                                           value="" autocomplete="off"/>
                                                    <input name="pay_pwd_error" type="hidden" id="pwd_error"
                                                           value="{{ $pay_pwd_error }}" autocomplete="off"/>
                                                    <div class="sp ftx-01" id="ECS_PAY_PAYPWD"></div>
                                                </div>
                                            </div>

                                        @endif



                                        @if($how_oos_list)

                                            <div class="qt_item">
                                                <div class="item_label">{{ $lang['booking_process'] }}：</div>
                                                <div class="item_value">

                                                    @foreach($how_oos_list as $how_oos_id => $how_oos_name)


                                                        <div class="radio-item">
                                                            <input type="radio" name="how_oos" class="ui-radio"
                                                                   value="{{ $how_oos_id }}"
                                                                   @if($order['how_oos'] == $how_oos_id)
                                                                   checked
                                                                   @endif
                                                                   id="checkbox_{{ $how_oos_id }}"
                                                                   onclick="changeOOS(this)" autocomplete="off"/>
                                                            <label for="checkbox_{{ $how_oos_id }}"
                                                                   class="ui-radio-label">{{ $how_oos_name }}</label>
                                                        </div>

                                                    @endforeach

                                                </div>
                                            </div>

                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif


                </div>
                <div id="ECS_ORDERTOTAL">
                    @include('frontend::library/wholesale_order_total')
                </div>

                <input type="hidden" name="user_id" value="{{ $user_id }}" autocomplete="off"/>
                <input type="hidden" name="done_cart_value" value="{{ $cart_value }}" autocomplete="off"/>
                <input type="hidden" name="step" value="done" autocomplete="off"/>
                <input type="hidden" name="is_address" value="0" autocomplete="off"/>
            </div>
            @csrf </form>
    </div>

@elseif ($step == 'order_pay')

    <div class="container">
        <div class="w w1200">
            <div class="payOrder-warp mt15 mb0">
                <div class="payOrder-desc">
                    <div class="pay-top">
                        <h3>
                            @if($is_pay == 0)
                                {{ $lang['order_submit_succeed'] }}
                            @else
                                {{ $lang['order_pay_succeed'] }}
                            @endif
                        </h3>
                        <div class="pay-total">
                            <span>{{ $lang['total_order_amount'] }}：</span>
                            <div class="pay-price">￥{{ $order['order_amount'] }}</div>
                        </div>
                    </div>
                    <div class="pay-txt">
                        <p>{{ $lang['order_sn'] }}：<em id="nku">{{ $main_order['order_sn'] }}</em></p>
                        <p>{{ $lang['pattern_payment'] }}：<span>{{ $order['pay_name'] }}
                                @if($order['pay_fee'] > 0)
                                    ，{{ $lang['service_charge'] }}：{{ $order['pay_fee'] }}
                                @endif

                                @if($is_pay == 0)
                                    &nbsp;<a href="javascript:;" class="red" ectype="changePayment"/>
                                    （{{ $lang['change_payment'] }}）</a>
                                @endif
</span></p>
                        <p><span class="txt"></span></p>

                        @if($child_num > 1)

                            <p><span class="txt">{{ $lang['order_different_seller'] }}
                                    <em>{{ $child_num }}</em>{{ $lang['different_order_num'] }}：</span></p>

                        @endif


                        @if($payment['pay_code'] == "bank")

                            <p class="yh-zz">{{ $payment['pay_desc'] }}</p>

                        @endif

                    </div>

                    @if($child_num == 1)

                        <div class="o-list">
                            <div class="o-list-info">
                                <span>{{ $lang['parcel_send'] }}：{{ $main_order['address'] }}</span>
                                <span>{{ $lang['linkman'] }}：{{ $main_order['consignee'] }}</span>
                                <span>{{ $main_order['mobile'] }}</span>
                            </div>
                        </div>

                    @endif

                    <a href="index.php" class="orderPrint ftx-05 mr10">{{ $lang['pay_qt'] }}</a>
                    <a href="user_wholesale.php?act=wholesale_buy"
                       class="orderPrint ftx-05">{{ $lang['view_order'] }}</a>
                </div>


                @if($child_num > 1)

                    <div class="w1200" style="height:10px; overflow:hidden;">&nbsp;</div>
                    <div class="w1200" style="background:#FFF;">
                        <div class="shopend-info-many mt10" style="text-align:center; padding-top:20px;">
                            <div class="shopend-info-items">

                                @foreach($child_order_info as $c_order)

                                    <div class="shopend-info-item">
                                        <p>{{ $lang['order_sn'] }}：<em class="nku">{{ $c_order['order_sn'] }}</em></p>

                                        <p>{{ $lang['amount_payable'] }}：<em>{{ $c_order['order_amount'] }}</em></p>

                                        <p>{{ $lang['Consignee'] }}：<span>{{ $c_order['consignee'] }}</span><span
                                                    id="tel" class="ml20">{{ $c_order['mobile'] }}</span></p>
                                        <p>{{ $lang['parcel_send'] }}：<span>{{ $c_order['address'] }}</span></p>
                                    </div>

                                @endforeach

                            </div>
                        </div>
                    </div>

                @endif


                @if($payment['pay_button'] && $payment['pay_code'] != 'bank')

                    <div class="payOrder-mode">
                        <div class="payOrder-list">
                            <div class="p-mode-tit">
                                <h3>{{ $lang['pattern_payment'] }}</h3>
                            </div>
                            <div class="p-mode-list">

                                <div class="p-mode-item {{ $payment['pay_code'] }}">
                                    {{ $payment['pay_button'] }}
                                </div>
                            </div>
                        </div>
                    </div>

                @endif

            </div>
            <div class="hide" ectype="selectPayment">
                <div class="deliveryAddress">
                    <div class="items">
                        <div class="item">
                            <div class="label">{{ $lang['pattern_payment'] }}：</div>
                            <div class="value">
                                <div class="checkbox_items">
                                    <!--<div class="checkbox_item">
                                        <input type="radio" class="ui-radio" name="pay_id" value="0" id="pay_id_0" autocomplete="off" checked="checked">
                                        <label for="pay_id_0" class="ui-b2b-radio-label">线下支付</label>
                                    </div>-->

                                    @foreach($payment_list as $item)


                                        @if($item['pay_code'] == 'wxpay' || $item['pay_code'] == 'alipay' || $item['pay_code'] == 'balance')

                                            <div class="checkbox_item">
                                                <input type="radio" class="ui-radio" name="pay_id"
                                                       value="{{ $item['pay_id'] }}" id="pay_id_{{ $item['pay_id'] }}"
                                                       autocomplete="off"
                                                       @if($payment['pay_id'] == $item['pay_id'])
                                                       checked="checked"
                                                        @endif
                                                >
                                                <label for="pay_id_{{ $item['pay_id'] }}"
                                                       class="ui-b2b-radio-label">{{ $item['pay_name'] }}</label>
                                            </div>

                                        @endif


                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif

@include('frontend::library/page_footer')

<script type="text/javascript" src="{{ asset('js/jquery.SuperSlide.2.1.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/shopping_flow.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/warehouse.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.nyroModal.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ skin('js/dsc-common.js') }}"></script>
<script type="text/javascript" src="{{ skin('js/jquery.purebox.js') }}"></script>
<script type="text/javascript" src="{{ skin('js/region.js') }}"></script>
<script type="text/javascript">

    @if($step == "cart")

    //购物车底边悬浮栏
    tfootScroll();
    calculate_cart_info();

    @endif


    function submit_order() {
        return true;
    }

    //打开弹窗
    $(document).on('click', "[ectype='submit']", function () {
        //取出所有rec_id
        var rec_ids = new Array();
        $("[ectype='cartTboy']").find("[ectype='attrItem']").each(function () {
            if ($(this).prop("checked") == true) {
                rec_ids.push($(this).val());
            }
        });

        //判断选中和起订量
        if (rec_ids.length == 0) {
            pbDialog("{{ $lang['please_checked_goods'] }}", "", 0);
            return false;
        }
        var checkMoq = true;
        $("[ectype='itemList']").each(function () {
            var moq = $(this).data('moq');
            var item = $(this);
            if (item.find("[ectype='attrItem']:checked").length > 0) {
                var goods_number = 0;
                item.find("[ectype='attrItem']:checked").each(function () {
                    var num_obj = $(this).parents("tr:first").find(".buy-num");
                    goods_number += parseInt(num_obj.val());
                });
                if (goods_number < moq) {
                    checkMoq = false;
                    //警告
                    if (item.find(".text-warning").length == 0) {
                        var html = '<p class="org fl mt10 text-warning">' + '{{ $lang['number_amount_dissatisfy'] }}' + '</p>';
                        item.find("[ectype='buyNum']:last").append(html);
                    }
                } else {
                    item.find(".text-warning").remove();
                }
            }
        })
        if (checkMoq == false) {
            pbDialog("{{ $lang['purchase_goods_min_cart'] }}", "", 0, "", "", 80);
            return false;
        }

        $("form[name='formCart']").submit();
    });


    function b2bCart() {
        var
            ck = "*[ectype='ckList'] input[type='checkbox']",	//所有ckList单选框
            ckGoods = "*[ectype='ckGoods']",         			//单个商品
            ckAll = "*[ectype='ckAll']",	  					//全选
            ckShopAll = "*[ectype='ckShopAll']", 				//每个店铺
            ckAttr = "*[ectype='attrItem']";					//商品属性单选

        //初始化全选状态
        // $(ck).prop("checked",true);

        //全选
        $(document).on("click", ckAll, function () {
            var t = $(this);
            if (t.prop("checked") == true) {
                $(ck).prop("checked", true);
            } else {
                $(ck).prop("checked", false);
            }

            //所有商品下的属性全部选中
            if (t.prop("checked") == true) {
                $(ckAttr).prop("checked", true);
            } else {
                $(ckAttr).prop("checked", false);
            }

            calculate_cart_info();
        });

        //每个店铺商品全选
        $(document).on("click", ckShopAll, function () {
            var t = $(this);
            var shopItem = t.parents("*[ectype='shopItem']");
            if (t.prop("checked") == true) {
                shopItem.find(ck).prop("checked", true);
            } else {
                shopItem.find(ck).prop("checked", false);
            }

            //每个店铺下的属性全部选中
            if (t.prop("checked") == true) {
                shopItem.find(ckAttr).prop("checked", true);
            } else {
                shopItem.find(ckAttr).prop("checked", false);
            }

            //判断是否已经全选
            sfAll();
        });

        //单个商品勾选
        $(document).on("click", ckGoods, function () {
            var t = $(this);
            var Item = t.parents("*[ectype='item']");
            var shopItem = t.parents("*[ectype='shopItem']");
            var itemlist = shopItem.find("*[ectype='itemList']");
            var length = itemlist.find(ck).length;

            //判断店铺商品是否全选
            if (itemlist.find(ck).filter(":checked").length == length) {
                shopItem.find(ckShopAll).prop("checked", true);
            } else {
                shopItem.find(ckShopAll).prop("checked", false);
            }

            //选中单个商品，单个商品下的属性全部选中
            if (t.prop("checked") == true) {
                Item.find(ckAttr).prop("checked", true);
            } else {
                Item.find(ckAttr).prop("checked", false);
            }

            //判断全部商品是否全选
            sfAll();
        });

        //单个属性选择
        $(document).on("click", ckAttr, function () {
            var t = $(this);
            var itemlist = t.parents("*[ectype='itemList']");
            var items = t.parents("*[ectype='attrItems']");
            var length = items.find(ckAttr).length;
            var shopItem = t.parents("*[ectype='shopItem']");

            //判断当前商品属性是否全选
            if (items.find(ckAttr).filter(":checked").length == 0) {
                itemlist.find(ck).prop("checked", false);

                shopItem.find(ckShopAll).prop("checked", false);
            } else {
                itemlist.find(ck).prop("checked", true);

                shopItem.find(ckShopAll).prop("checked", true);
            }

            //判断全部商品是否全选
            sfAll();
        });


        //判断是否全选了
        function sfAll() {
            var c = $("*[ectype='cartTboy']").find(ck);
            var length = c.filter(":checked").length;
            if (length == c.length) {
                $(ckAll).prop("checked", true);
            } else {
                $(ckAll).prop("checked", false);
            }

            calculate_cart_info();
        }

    }

    b2bCart();

    /**********购物车操作 start**********/

    //删除商品
    $(document).on('click', "[ectype='delete']", function () {
        var goods_id = $(this).data('goods_id');

        pbDialog("是否确定删除商品？", "", 0, "", "", "", true, function () {
            $.jqueryAjax('wholesale_flow.php?step=remove', 'goods_id=' + goods_id, function (data) {
                location.reload();
            });
        });
    });

    //批量删除商品
    $(document).on('click', "[ectype='batch_delete']", function () {
        var goods_id = new Array();
        $("input[ectype='ckGoods']:checked").each(function () {
            goods_id.push($(this).val());
        });

        goods_id = goods_id.join(',');

        if (goods_id == "") {
            pbDialog("{{ $lang['please_checked_cart_goods'] }}", "", 0);
        } else {
            pbDialog("{{ $lang['whether_delete_goods'] }}", "", 0, "", "", "", true, function () {
                $.jqueryAjax('wholesale_flow.php?step=batch_remove', 'goods_id=' + goods_id, function (data) {
                    location.reload();
                });
            });
        }
    });

    $(document).on('click', '.btn-add', function () {
        var num = $(this).siblings('.buy-num').val();
        num = parseInt(num);
        $(this).siblings('.buy-num').val(num + 1);

        $("*[ectype='whodet']").show();
        update_rec_number($(this));
    });

    $(document).on('click', '.btn-reduce', function () {
        var num = $(this).siblings('.buy-num').val();
        num = parseInt(num);

        if (num > 1) {
            $(this).siblings('.buy-num').val(num - 1);
        } else {
            pbDialog("{{ $lang['goods_not_little'] }}1", "", 0);
        }
        update_rec_number($(this));
    });

    $(document).on('keyup', '.buy-num', function () {
        if ($(this).val() < 0 || isNaN($(this).val()) || $(this).val() == '') {
            $(this).val(0);
        }
        update_rec_number($(this));
    });

    //设置全局时间戳变量
    var timestamp = new Date().getTime();

    function update_rec_number(obj) {
        //转换对象
        if (!obj.hasClass('buy-num')) {
            obj = obj.siblings('.buy-num');
        }
        var rec_num = obj.val(); //数量
        var rec_id = obj.parents("tr:first").data('rec_id');
        $.jqueryAjax('wholesale_flow.php?step=update_rec_num', 'rec_id=' + rec_id + '&rec_num=' + rec_num, function (data) {
            if (data.error > 0) {
                obj.val(data.goods_number);
                //警告
                if (obj.parents("[ectype='buyNum']:first").find(".text-warning").length == 0) {
                    var html = '<p class="org fl mt10 text-warning">' + data.message + '</p>';
                    obj.parents("[ectype='buyNum']:first").append(html);
                    setTimeout(function () {
                        obj.parents("[ectype='buyNum']:first").find(".text-warning").remove();
                    }, 2000); //延迟执行
                }
            }

            //calculate_cart_info();
            timestamp = new Date().getTime(); //更新时间戳
            setTimeout("calculate_cart_info()", 500); //延迟执行
        })
    }

    //更新并计算价格
    function calculate_cart_info() {
        //延迟时间内不执行
        if (new Date().getTime() - timestamp < 500) {
            return false;
        }

        var rec_ids = new Array();
        var obj = $("*[ectype='cartTboy']");

        obj.find("*[ectype='attrItem']:checked").each(function () {
            var val = $(this).val();
            rec_ids.push(val);
        });

        $.ajax({
            url: 'wholesale_flow.php?step=ajax_update_cart',
            data: {rec_ids: rec_ids},
            type: 'post',
            dataType: 'json',
            success: function (data) {

                //全部不选中价格清零
                if (rec_ids.length == 0) {
                    $("[ectype='total_number']").html('0');
                    $("[ectype='total_price']").html('￥0.00');
                    $("[ectype='cartNum']").html('0');
                    //return false;
                } else {
                    $("[ectype='total_number']").html(data.cart_info.total_number);
                    $("[ectype='total_price']").html(data.cart_info.total_price_formatted);
                    $("[ectype='cartNum']").html(rec_ids.length);
                    //更新阶梯价和单品总价
                    var goods_list = data.goods_list;
                    for (goods_id in goods_list) {
                        var this_goods = goods_list[goods_id]; //单商品
                        //更新阶梯价
                        var this_tr = $("[ectype=attrItems] tr[data-goods_id='" + this_goods.goods_id + "']");
                        this_tr.find("[ectype='rec_volume_price']").html(this_goods.volume_price_lbi);
                        for (rec_id in this_goods.list) {
                            var this_rec = this_goods.list[rec_id]; //单记录
                            //更新单品总价
                            var this_row = $("[ectype=attrItems] tr[data-rec_id='" + this_rec.rec_id + "']"); //单行
                            this_row.find("[ectype='rec_total_price'] .p-price").html(this_rec.total_price_formatted);
                        }
                    }
                }

            }
        })


    }

    $(document).on('click', "[ectype='invPayee']", function () {
        var val = $(this).val();
        if (val == 0) {
            $('#inv_payee').hide();
            $('#tax_id').hide();
        } else {
            $('#inv_payee').show();
            $('#tax_id').show();
        }
    })

    /**********购物车操作 end**********/

    //打开弹窗
    $(document).on('click', "[ectype='changePayment']", function () {
        var content = $("*[ectype='selectPayment']").html();
        $("*[ectype='selectPayment']").find(".deliveryAddress").remove();
        pb({
            id: "payment_dialog",
            title: '{{ $lang['change_payment'] }}',
            width: 550,
            ok_title: '{{ $lang['submit'] }}', 	//按钮名称
            cl_title: '{{ $lang['cancel'] }}', 	//按钮名称
            content: content, 	//调取内容
            drag: false,
            foot: true,
            onOk: function () {
                var pay_id = $("#payment_dialog").find("input[name='pay_id']:checked").val();
                var order_id = {{ $order_id ?? 0 }};

                if (typeof pay_id == 'undefined' || pay_id == "" || pay_id == 0) {
                    pbDialog("{{ $lang['please_select_payment'] }}", "", 0);
                    return false;
                } else {
                    Ajax.call('wholesale_flow.php?step=change_payment', 'order_id=' + order_id + '&pay_id=' + pay_id, function (data) {
                        location.reload();
                    }, 'POST', 'JSON');
                }
            },
            onCancel: function () {
                $(".container").find("*[ectype='selectPayment']").append(content);
            },
            onClose: function () {
                $(".container").find("*[ectype='selectPayment']").append(content);
            }
        });
    });

    //微信扫码
    $("[data-type='wxpay']").on("click", function () {
        var content = $("#wxpay_dialog").html();
        pb({
            id: "scanCode",
            title: "",
            width: 716,
            content: content,
            drag: true,
            foot: false,
            cl_cBtn: false,
            cBtn: false
        });
    });

    var timer;

    function checkOrder() {
        var pay_name = "{{ $order['pay_name'] }}";
        var pay_status = "{{ $main_order['pay_status'] }}";
        var log_id = "{{ $order['log_id'] }}";
        var url = "wholesale_flow.php?step=checkorder&order_id={{ $main_order['order_id'] }}";
        if (pay_name == "{{ $lang['wxpay'] }}" && pay_status == 0) {
            $.get(url, {}, function (data) {
                //已付款
                if (data.code > 0 && data.pay_code == 'wxpay') {
                    clearTimeout(timer);
                    location.href = "respond.php?code=wxpay&status=1&log_id=" + log_id;
                }
            }, 'json');
        }
        timer = setTimeout("checkOrder()", 5000);
    }

    checkOrder();
</script>
</body>
</html>
