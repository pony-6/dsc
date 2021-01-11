@include('seller.base.seller_pageheader')

@include('seller.base.seller_nave_header')


<style>
    .type-file-box {
        position: relative;
        float: left;
        width: 320px;
        margin-right: 10px;
    }
    .type-file-box .show {
        float: left;
        margin: 0 0 0 10px;
    }
    .btn {height: auto;}
    .show_text { margin-left: 5px ;line-height: 30px; height: 30px;}
    .chosen-container .chosen-results{height:450px;}
</style>

<div class="ecsc-layout">
    <div class="site wrapper">
        @include('seller.base.seller_menu_left')

        <div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">

                <!-- 当前位置 -->
                <div class="ecsc-path"><span>{{ __('yop.menu') }}</span></div>

                <div class="wrapper-right of">
                    <div class="tabmenu">
                        <ul class="tab">
                            <li class="active"><a href="javascript:;">子商户入网申请</a></li>
                        </ul>
                    </div>
                    <div class="explanation" id="explanation">
                        <div class="ex_tit"><i class="sc_icon"></i><h4>操作提示</h4></div>
                        <ul>
                            <li>一、依次填写企业基本信息与上传资质图片等，提交到易宝官方，等待审核，分配子商户号</li>
                        </ul>
                    </div>

                    <form method="post" action="{{ route('seller/yop/add') }}" class="form-horizontal" role="form"  enctype="multipart/form-data" onsubmit="return false;" >
                        <div class="wrapper-list mt20 ecsc-form-goods">

                            <dl>
                                <dt>{{ __('yop.mer_full_name') }}</dt>
                                <dd class="label_value">
                                    <input type="text" name="data[mer_full_name]" class="text" value=""/>
                                    <div class="form_prompt"><em class="color-red">* 必填。</em></div>
                                </dd>
                            </dl>

                            <dl>
                                <dt>{{ __('yop.mer_short_name') }}</dt>
                                <dd class="label_value">
                                    <input type="text" name="data[mer_short_name]" class="text" value="">
                                    <div class="form_prompt"><em class="color-red">* 必填。</em> 收银台上显示的收款方名称</div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="step_label">{{ __('yop.mer_cert_type') }}</dt>
                                <dd class="step_value">
                                    <div class="checkbox_items">
                                        <div class="checkbox_item">
                                            <input type="radio" name="data[mer_cert_type]" class="ui-radio event_zhuangtai select_mer_cert_type" id="cert_type_2" value="UNI_CREDIT_CODE" checked>
                                            <label for="cert_type_2" class="ui-radio-label">{{ __('yop.mer_cert_type_2') }}</label>
                                        </div>
                                        <div class="checkbox_item">
                                            <input type="radio" name="data[mer_cert_type]" class="ui-radio event_zhuangtai  select_mer_cert_type" id="cert_type_1" value="CORP_CODE"  >
                                            <label for="cert_type_1" class="ui-radio-label active ">{{ __('yop.mer_cert_type_1') }}</label>
                                        </div>
                                    </div>
                                </dd>
                            </dl>

                            <dl>
                                <dt>{{ __('yop.mer_cert_no') }}</dt>
                                <dd>
                                    <input type="text" name="data[mer_cert_no]" class="text" value="">
                                    <div class="form_prompt"><em class="color-red">* 必填。</em></div>
                                </dd>
                            </dl>

                            <dl>
                                <dt>{{ __('yop.legal_name') }}</dt>
                                <dd>
                                    <input type="text" name="data[legal_name]" class="text" value="">
                                    <div class="form_prompt"><em class="color-red">* 必填。</em> {{ __('yop.legal_name_title') }}</div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.legal_id_card') }}</dt>
                                <dd class="label_value">
                                    <input type="text" name="data[legal_id_card]" class="text" value="">
                                    <div class="form_prompt"><em class="color-red">* 必填。</em></div>
                                </dd>
                            </dl>

                            <dl>
                                <dt>{{ __('yop.mer_level') }}</dt>
                                <dd class="label_value">
                                    <div class="fl mr5 mer_level1_no ">
                                        <select name="data[mer_level1_no]" class="input-sm" id="select_category">
                                            <option value="0">{{ __('yop.please') . __('yop.mer_level1_no') }}</option>

                                            @foreach($category_list as $list)

                                                <option value="{{ $list['id'] }}">{{ $list['name'] }}</option>

                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="fl mer_level2_no">
                                        <select name="data[mer_level2_no]" class="input-sm" id="child_category">
                                            <option value="0">{{ __('yop.please') . __('yop.mer_level2_no') }}</option>
                                        </select>
                                    </div>

                                </dd>
                            </dl>

                            <dl>
                                <dt>{{ __('yop.mer_area') }}</dt>
                                <dd>
                                    <div class="level_linkage">
                                        <div class="fl">
                                            <div id="dlProvinces" class="ui-dropdown smartdropdown alien">
                                                <input type="hidden" value="0" name="data[mer_province]" id="selProvinces">
                                                <div class="txt">{{ __('yop.mer_province') }}</div>
                                                <i class="down u-dropdown-icon"></i>
                                                <div class="options clearfix" style="max-height:300px;">

                                                    @foreach($mer_province_list as $list)

                                                        <span class="liv" data-text="{{ $list['region_name'] }}" data-type="2"  data-value="{{ $list['region_id'] }}">{{ $list['region_name'] }}</span>

                                                    @endforeach

                                                </div>
                                            </div>
                                            <div id="dlCity" class="ui-dropdown smartdropdown alien">
                                                <input type="hidden" value="0" name="data[mer_city]" id="selCities">
                                                <div class="txt">{{ __('yop.mer_city') }}</div>
                                                <i class="down u-dropdown-icon"></i>
                                                <div class="options clearfix" style="max-height:300px;">
                                                    @foreach($mer_city_list as $list)
                                                        <span class="liv" data-text="{{ $list['region_name'] }}" data-type="3" data-value="{{ $list['region_id'] }}">{{ $list['region_name'] }}</span>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div id="dlRegion" class="ui-dropdown smartdropdown alien">
                                                <input type="hidden" value="0" name="data[mer_district]" id="selDistricts">
                                                <div class="txt">{{ __('yop.mer_district') }}</div>
                                                <i class="down u-dropdown-icon"></i>
                                                <div class="options clearfix" style="max-height:300px;">

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </dd>
                            </dl>

                            <dl>
                                <dt>{{ __('yop.mer_address') }}</dt>
                                <dd>
                                    <input type="text" name="data[mer_address]" class="text" value="">
                                    <div class="form_prompt"><em class="color-red">* 必填。</em></div>
                                </dd>
                            </dl>

                            <dl>
                                <dt>{{ __('yop.mer_contact_name') }}</dt>
                                <dd>
                                    <input type="text" name="data[mer_contact_name]" class="text" value="">
                                    <div class="form_prompt"><em class="color-red">* 必填。</em></div>
                                </dd>
                            </dl>

                            <dl>
                                <dt>{{ __('yop.mer_legal_phone') }}</dt>
                                <dd>
                                    <input type="text" name="data[mer_legal_phone]" class="text" value="">
                                    <div class="form_prompt"><em class="color-red">* 必填。</em></div>
                                </dd>
                            </dl>

                            <dl>
                                <dt>{{ __('yop.mer_legal_email') }}</dt>
                                <dd>
                                    <input type="text" name="data[mer_legal_email]" class="text" value="">
                                    <div class="form_prompt"> </div>
                                </dd>
                            </dl>

                            <dl>
                                <dt>{{ __('yop.tax_regist_cert') }}</dt>
                                <dd class="label_value">
                                    <input type="text" name="data[tax_regist_cert]" class="text" value="">
                                    <div class="form_prompt"> 证件类型为营业执照，此项必填。 </div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.account_license') }}</dt>
                                <dd class="label_value">
                                    <input type="text" name="data[account_license]" class="text" value="">
                                    <div class="form_prompt"></div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.org_code') }}</dt>
                                <dd class="label_value">
                                    <input type="text" name="data[org_code]" class="text" value="">
                                    <div class="form_prompt"> 证件类型为营业执照，此项必填 </div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.is_org_code_long') }}</dt>
                                <dd class="label_value col-md-10">
                                    <div class="checkbox_items">
                                        <div class="checkbox_item">
                                            <input type="radio" name="data[is_org_code_long]" class="ui-radio evnet_shop_closed" id="is_org_code_long_1" value="false" checked >
                                            <label for="is_org_code_long_1" class="ui-radio-label active ">{{ __('yop.is_org_code_long_0') }}</label>
                                        </div>
                                        <div class="checkbox_item">
                                            <input type="radio" name="data[is_org_code_long]" class="ui-radio evnet_shop_closed" id="is_org_code_long_2" value="true">
                                            <label for="is_org_code_long_2" class="ui-radio-label">{{ __('yop.is_org_code_long_1') }}</label>
                                        </div>
                                    </div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.org_code_expiry') }}</dt>
                                <dd class="label_value">
                                    <input type="text" name="data[org_code_expiry]" class="text" value="" >
                                    <div class="form_prompt">证件类型为“营业执照”，则必填 填写到期时间，格式YYYY-MM-DD，例如 2018-12-18 。如果组织机构代理证长期有效，可不填。 </div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.card_no') }}</dt>
                                <dd class="label_value">
                                    <input type="text" name="data[card_no]" class="text" value="">
                                    <div class="form_prompt"><em class="color-red">* 必填。</em></div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.head_bank_code') }}</dt>
                                <dd class="label_value">
                                    <div class="">
                                        <select name="data[head_bank_code]" class="input-sm" id="head_bank_code">
                                            <option value="0">{{ __('yop.please') }}</option>

                                            @foreach($bank_list as $list)

                                            	<option value="{{ $list['code'] }}">{{ $list['code'] }} - {{ $list['name'] }}</option>

                                            @endforeach

                                        </select>
                                    </div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.bank_area') }}</dt>
                                <dd class="label_value">
                                    <div class="level_linkage">
                                        <div class="fl">
                                            <div id="dlProvinces" class="ui-dropdown smartdropdown alien">
                                                <input type="hidden" value="0" name="data[bank_province]" id="selProvinces">
                                                <div class="txt">{{ __('yop.bank_province') }}</div>
                                                <i class="down u-dropdown-icon"></i>
                                                <div class="options clearfix" style="max-height:300px;">

                                                    @foreach($bank_province_list as $list)

                                                        <span class="liv" data-text="{{ $list['region_name'] }}" data-type="2"  data-value="{{ $list['region_id'] }}">{{ $list['region_name'] }}</span>

                                                    @endforeach

                                                </div>
                                            </div>
                                            <div id="dlCity" class="ui-dropdown smartdropdown alien">
                                                <input type="hidden" value="0" name="data[bank_city]" id="selCities">
                                                <div class="txt">{{ __('yop.bank_city') }}</div>
                                                <i class="down u-dropdown-icon"></i>
                                                <div class="options clearfix" style="max-height:300px;">
                                                    @foreach($bank_city_list as $list)
                                                        <span class="liv hide" data-text="{{ $list['region_name'] }}" data-value="0">{{ $list['region_name'] }}</span>
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.bank_code') }}</dt>
                                <dd class="label_value">
                                    <div class="fl mr10">
                                        <select name="data[bank_code]" class="input-sm" id="child_bank_list">
                                            <option value="0">{{ __('yop.please') }}</option>
                                        </select>
                                    </div>
                                    <div class="form_prompt">
                                        <span class="btn btn-success" id="get_bank_code">{{ __('yop.get_bank_code') }}</span>
                                        <em class="color-red">* 必填。</em> 请先选择开户银行名称、开户行所在省市，点击获取后再选择支行信息。
                                    </div>
                                </dd>
                            </dl>

                            {{--上传企业资质照片--}}

                            <dl>
                                <dt class="label-t">{{ __('yop.legal_idcard_front') }}</dt>
                                <dd class="label_value">
                                    <div class="type-file-box">
                                        <input type="button" id="button" class="type-file-button" value="{{ __('yop.upload_dot') }}" >
                                        <input type="file" class="type-file-file" name="upload_file[IDCARD_FRONT]" id="legal_idcard_front" size="30" data-state="imgfile"  >
                                        <span class="show">
                                            <a href="#legal_idcard_front_preview" class="nyroModal fancybox" title="预览">
                                                <i class="fa fa-picture-o" ></i>
                                            </a>
                                        </span>
                                        <span
                                                @if (isset($file_info['IDCARD_FRONT']) && ($file_info['IDCARD_FRONT']) )
                                                class="show_text"
                                                @else
                                                class="show_text hide"
                                                @endif
                                        >已上传</span>
                                        <input type="text" name="file_path[IDCARD_FRONT]" class="type-file-text" value="{{ $file_info['IDCARD_FRONT'] ?? '' }}" id="textfield"  style="display:none">
                                    </div>
                                    <div class="form_prompt"><em class="color-red">* 必填。</em>图片支持jpg、png格式</div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.legal_idcard_back') }}</dt>
                                <dd class="label_value">
                                    <div class="type-file-box">
                                        <input type="button" id="button" class="type-file-button" value="{{ __('yop.upload_dot') }}">
                                        <input type="file" class="type-file-file" name="upload_file[IDCARD_BACK]" id="legal_idcard_back" size="30" data-state="imgfile" hidefocus="true" >
                                        <span class="show">
                                            <a href="#legal_idcard_back_preview" class="nyroModal fancybox" title="预览">
                                                <i class="fa fa-picture-o" ></i>
                                            </a>
                                        </span>
                                        <span
                                                @if (isset($file_info['IDCARD_BACK']) && ($file_info['IDCARD_BACK']) )
                                                class="show_text"
                                                @else
                                                class="show_text hide"
                                                @endif
                                        >已上传</span>
                                        <input type="text" name="file_path[IDCARD_BACK]" class="type-file-text" value="{{ $file_info['IDCARD_BACK'] ?? '' }}" id="textfield1"  style="display:none">
                                    </div>
                                    <div class="form_prompt"><em class="color-red">* 必填。</em>图片支持jpg、png格式</div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.legal_corp_code') }}</dt>
                                <dd class="label_value">
                                    <div class="type-file-box">
                                        <input type="button" id="button" class="type-file-button" value="{{ __('yop.upload_dot') }}">
                                        <input type="file" class="type-file-file" name="upload_file[CORP_CODE]" id="legal_corp_code" size="30" data-state="imgfile" hidefocus="true" >
                                        <span class="show">
                                            <a href="#legal_corp_code_preview" class="nyroModal fancybox" title="预览">
                                                <i class="fa fa-picture-o" ></i>
                                            </a>
                                        </span>
                                        <span
                                                @if (isset($file_info['CORP_CODE']) && ($file_info['CORP_CODE']) )
                                                class="show_text"
                                                @else
                                                class="show_text hide"
                                                @endif
                                        >已上传</span>
                                        <input type="text" name="file_path[CORP_CODE]" class="type-file-text" value="{{ $file_info['CORP_CODE'] ?? '' }}" id="textfield2"  style="display:none">
                                    </div>
                                    <div class="form_prompt"><em class="color-red">* 必填。</em>图片支持jpg、png格式</div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.legal_tax_code') }}</dt>
                                <dd class="label_value">
                                    <div class="type-file-box">
                                        <input type="button" id="button" class="type-file-button" value="{{ __('yop.upload_dot') }}">
                                        <input type="file" class="type-file-file" name="upload_file[TAX_CODE]" id="legal_tax_code" size="30" data-state="imgfile" hidefocus="true" >
                                        <span class="show">
                                            <a href="#legal_tax_code_preview" class="nyroModal fancybox" title="预览">
                                                <i class="fa fa-picture-o" ></i>
                                            </a>
                                        </span>
                                        <span
                                                @if (isset($file_info['TAX_CODE']) && ($file_info['TAX_CODE']) )
                                                class="show_text"
                                                @else
                                                class="show_text hide"
                                                @endif
                                        >已上传</span>
                                        <input type="text" name="file_path[TAX_CODE]" class="type-file-text" value="{{ $file_info['TAX_CODE'] ?? '' }}" id="textfield3"  style="display:none">
                                    </div>
                                    <div class="form_prompt"><em class="color-red">* 必填。</em>图片支持jpg、png格式</div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.legal_org_code') }}</dt>
                                <dd class="label_value">
                                    <div class="type-file-box">
                                        <input type="button" id="button" class="type-file-button" value="{{ __('yop.upload_dot') }}">
                                        <input type="file" class="type-file-file" name="upload_file[ORG_CODE]" id="legal_org_code" size="30" data-state="imgfile" hidefocus="true" >
                                        <span class="show">
                                            <a href="#legal_org_code_preview" class="nyroModal fancybox" title="预览">
                                                <i class="fa fa-picture-o" ></i>
                                            </a>
                                        </span>
                                        <span
                                                @if (isset($file_info['ORG_CODE']) && ($file_info['ORG_CODE']) )
                                                class="show_text"
                                                @else
                                                class="show_text hide"
                                                @endif
                                        >已上传</span>
                                        <input type="text" name="file_path[ORG_CODE]" class="type-file-text" value="{{ $file_info['ORG_CODE'] ?? '' }}" id="textfield4"  style="display:none">
                                    </div>
                                    <div class="form_prompt"><em class="color-red">* 必填。</em>图片支持jpg、png格式</div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.legal_uni_credit_code') }}</dt>
                                <dd class="label_value">
                                    <div class="type-file-box">
                                        <input type="button" id="button" class="type-file-button" value="{{ __('yop.upload_dot') }}">
                                        <input type="file" class="type-file-file" name="upload_file[UNI_CREDIT_CODE]" id="legal_uni_credit_code" size="30" data-state="imgfile" hidefocus="true" >
                                        <span class="show">
                                            <a href="#legal_uni_credit_code_preview" class="nyroModal fancybox" title="预览">
                                                <i class="fa fa-picture-o" ></i>
                                            </a>
                                        </span>
                                        <span
                                                @if (isset($file_info['UNI_CREDIT_CODE']) && ($file_info['UNI_CREDIT_CODE']) )
                                                class="show_text"
                                                @else
                                                class="show_text hide"
                                                @endif
                                        >已上传</span>
                                        <input type="text" name="file_path[UNI_CREDIT_CODE]" class="type-file-text" value="{{ $file_info['UNI_CREDIT_CODE'] ?? '' }}" id="textfield5"  style="display:none">
                                    </div>
                                    <div class="form_prompt"><em class="color-red">* 必填。</em>图片支持jpg、png格式</div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.legal_op_bank_code') }}</dt>
                                <dd class="label_value">
                                    <div class="type-file-box">
                                        <input type="button" id="button" class="type-file-button" value="{{ __('yop.upload_dot') }}">
                                        <input type="file" class="type-file-file" name="upload_file[OP_BANK_CODE]" id="legal_op_bank_code" size="30" data-state="imgfile" hidefocus="true" >
                                        <span class="show">
                                            <a href="#legal_op_bank_code_preview" class="nyroModal fancybox" title="预览">
                                                <i class="fa fa-picture-o" ></i>
                                            </a>
                                        </span>
                                        <span
                                                @if (isset($file_info['OP_BANK_CODE']) && ($file_info['OP_BANK_CODE']) )
                                                class="show_text"
                                                @else
                                                class="show_text hide"
                                                @endif
                                        >已上传</span>
                                        <input type="text" name="file_path[OP_BANK_CODE]" class="type-file-text" value="{{ $file_info['OP_BANK_CODE'] ?? '' }}" id="textfield6"  style="display:none">
                                    </div>
                                    <div class="form_prompt"><em class="color-red">* 必填。</em>图片支持jpg、png格式</div>
                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">{{ __('yop.mer_authorize_type') }}</dt>
                                <dd class="label_value col-md-10">
                                    <div class="checkbox_items">
                                        <div class="checkbox_item">
                                            <input type="radio" name="data[mer_authorize_type]" class="ui-radio evnet_shop_closed select_mer_authorize_type" id="mer_authorize_type_1" value="SMS_AUTHORIZE" checked >
                                            <label for="mer_authorize_type_1" class="ui-radio-label active ">{{ __('yop.mer_authorize_type_0') }}</label>
                                        </div>
                                        {{--<div class="checkbox_item">--}}
                                        {{--<input type="radio" name="data[mer_authorize_type]" class="ui-radio evnet_shop_closed select_mer_authorize_type" id="mer_authorize_type_2" value="WEB_AUTHORIZE">--}}
                                        {{--<label for="mer_authorize_type_2" class="ui-radio-label">{{ __('yop.mer_authorize_type_1') }}</label>--}}
                                        {{--</div>--}}

                                        <div class="form_prompt">默认: {{ __('yop.mer_authorize_type_0') }}</div>
                                    </div>

                                </dd>
                            </dl>

                            <dl>
                                <dt class="label-t">&nbsp;</dt>
                                <dd class="button_info">
                                    @csrf
                                    <input type="hidden" name="request_no" value="{{ $request_no ?? '' }}"/>
                                    <input type="submit" name="submit" value="{{ $lang['button_submit'] }}" class="sc-btn sc-blueBg-btn btn35"/>
                                    <input type="reset" value="{{ $lang['button_reset'] }}" class="sc-btn sc-blue-btn btn35" />
                                </dd>
                            </dl>

                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>
</div>

{{--预览图片--}}
<div class="panel panel-default" style="display: none;" id="legal_idcard_front_preview">
    <div class="panel-body">
        <img src="{{ $file_info['IDCARD_FRONT'] ?? '' }}" class="img-responsive" />
    </div>
</div>
<div class="panel panel-default" style="display: none;" id="legal_idcard_back_preview">
    <div class="panel-body">
        <img src="{{ $file_info['IDCARD_BACK'] ?? '' }}" class="img-responsive" />
    </div>
</div>
<div class="panel panel-default" style="display: none;" id="legal_corp_code_preview">
    <div class="panel-body">
        <img src="{{ $file_info['CORP_CODE'] ?? '' }}" class="img-responsive" />
    </div>
</div>
<div class="panel panel-default" style="display: none;" id="legal_tax_code_preview">
    <div class="panel-body">
        <img src="{{ $file_info['TAX_CODE'] ?? '' }}" class="img-responsive" />
    </div>
</div>
<div class="panel panel-default" style="display: none;" id="legal_org_code_preview">
    <div class="panel-body">
        <img src="{{ $file_info['ORG_CODE'] ?? '' }}" class="img-responsive" />
    </div>
</div>
<div class="panel panel-default" style="display: none;" id="legal_uni_credit_code_preview">
    <div class="panel-body">
        <img src="{{ $file_info['UNI_CREDIT_CODE'] ?? '' }}" class="img-responsive" />
    </div>
</div>
<div class="panel panel-default" style="display: none;" id="legal_op_bank_code_preview">
    <div class="panel-body">
        <img src="{{ $file_info['OP_BANK_CODE'] ?? '' }}" class="img-responsive" />
    </div>
</div>

<script type="text/javascript" src="{{ asset('assets/seller/js/common.js?v=' . date('YmdHi')) }}"></script>
<script type="text/javascript" src="{{ asset('assets/seller/js/region.js?v=' . date('YmdHi')) }}"></script>
{{--选择下拉框内容搜索--}}
<link rel="stylesheet" type="text/css" href="{{ asset('js/chosen/chosen.css?v=' . date('YmdHi')) }}" />
<script type="text/javascript" src="{{ asset('js/chosen/chosen.jquery.js?v=' . date('YmdHi')) }}"></script>
<script type="text/javascript">
    $(function(){

        $.levelLink();//地区三级联动

        //file移动上去的js
        $(".type-file-box").hover(function(){
            $(this).addClass("hover");
        },function(){
            $(this).removeClass("hover");
        });

        // 选择切换 证件类型
        $(".select_mer_cert_type").click(function(){
            // var val = $(this).find("input[type=radio]").val();
            let val = $(this).val();
            console.log(val)
            if (val == 'CORP_CODE') {
                console.log('CORP_CODE')
            } else if (val == 'UNI_CREDIT_CODE') {
                console.log('UNI_CREDIT_CODE')
            }
        });

        // 上传且预览图片
        $(document).on("click", ".type-file-file", function() {

            let that = $(this);
            //let id_value = $(this).attr('id');
            let id_value = this.id;

            //console.log(id_value)

            // 上传图片预览
            $(this).change(function(event) {
                // 根据这个 <input> 获取文件的 HTML5 js 对象
                let files = event.target.files, file;
                if (files && files.length > 0) {
                    // 获取目前上传的文件
                    file = files[0];

                    // 那么我们可以做一下诸如文件大小校验的动作
                    if(file.size > 1024 * 1024 * 5) {
                        layer.msg('图片大小不能超过 5MB!');
                        return false;
                    }

                    // 预览图片
                    let reader = new FileReader();
                    // 将文件以Data URL形式进行读入页面
                    reader.readAsDataURL(file);
                    reader.onload = function(e){
                        $("#" + id_value + '_preview').find('img').attr("src", this.result);
                        // 显示已上传
                        if (that.parent('.type-file-box').find('.show_text').hasClass('hide')) {
                            that.parent('.type-file-box').find('.show_text').removeClass('hide');
                        }
                    };
                }
            });
        });


        // 选择商户分类 select下拉默认值赋值
        $(document).on("change","#select_category",function(){
            let _this = $(this);
            let cat_id = $(this).children('option:selected').val(); //是selected的值

            if (cat_id){
                $.post("{{ route('seller/yop/select_category') }}", {id:cat_id}, function(result){
                    $("#child_category").html('<option value="0">{{ __('yop.please') }}</option>');
                    if (result.error == 0 && result.data.length > 0) {
                        for (let i = 0; i < result.data.length; i++) {
                            $("#child_category").append("<option value="+result['data'][i]['id']+">"+result['data'][i]['name']+"</option>");
                        }
                    }
                    return false;
                }, 'json');
            }
        });

        // 获取支行信息
        $(document).on("click","#get_bank_code",function(){

            let head_bank_code = $('#head_bank_code').children('option:selected').val(); // 总行编码
            let bank_province = $('input[name="data[bank_province]"]').val(); // 省
            let bank_city = $('input[name="data[bank_city]"]').val();  // 市

            console.log(head_bank_code)
            console.log(bank_province)
            console.log(bank_city)

            if (empty(head_bank_code)) {
                layer.msg('请先选择开户行');
                return false;
            }
            if (empty(bank_province)) {
                layer.msg('请先选择开户行所在省');
                return false;
            }

            if (head_bank_code && bank_province){
                $.post("{{ route('seller/yop/get_bank_code') }}", {
                    head_bank_code:head_bank_code,
                    bank_province:bank_province,
                    bank_city:bank_city,
                }, function(result){
                    $("#child_bank_list").html('<option value="0">{{ __('yop.please') }}</option>');
                    if (result.error == 0 && result.data.length > 0) {

                        /**for (let i = 0; i < result.data.length; i++) {
                            $("#child_bank_list").append("<option value="+result['data'][i]['code']+">"+result['data'][i]['name']+"</option>");
                        }*/

                        $.each(result.data, function (index, e) {
                            //console.log(e)
                            $("#child_bank_list").append("<option value="+e.code+">"+e.name+"</option>");
                        });
                        // 下拉框搜索开户支行
                        $("#child_bank_list").trigger("chosen:updated");
                        $("#child_bank_list").chosen();
                    }
                    return false;
                }, 'json');
            }
        });

        // 下拉框搜索开户行
        $('#head_bank_code').trigger('chosen:updated');
        $("#head_bank_code").chosen({
            width:'40%', //自定义选择下拉框宽度
        }).change();


        // 提交 ind submit handler to form
        $('.form-horizontal').on('submit', function(e) {

            e.preventDefault(); // prevent native submit

            let ajax_data = $(this).serialize();

            // 验证
            let mer_full_name = $('input[name="data[mer_full_name]"]').val();
            let mer_short_name = $('input[name="data[mer_short_name]"]').val();
            let mer_cert_no = $('input[name="data[mer_cert_no]"]').val();
            let legal_name = $('input[name="data[legal_name]"]').val();

            let mer_level1_no = $('#select_category').children('option:selected').val();
            let mer_level2_no = $('#child_category').children('option:selected').val();
            let mer_province = $('input[name="data[mer_province]"]').val();
            let mer_city = $('input[name="data[mer_city]"]').val();
            let mer_district = $('input[name="data[mer_district]"]').val();
            let mer_address = $('input[name="data[mer_address]"]').val();

            let mer_contact_name = $('input[name="data[mer_contact_name]"]').val();
            let mer_legal_phone = $('input[name="data[mer_legal_phone]"]').val();

            let card_no = $('input[name="data[card_no]"]').val();
            let head_bank_code = $('#head_bank_code').children('option:selected').val();
            let bank_province = $('input[name="data[bank_province]"]').val();
            let bank_city = $('input[name="data[bank_city]"]').val();
            let bank_code = $('#child_bank_list').children('option:selected').val();

            if (empty(mer_full_name)){
                layer.msg("商户全称 不能为空");
                return false;
            }
            if (empty(mer_short_name)){
                layer.msg("商户简称 不能为空");
                return false;
            }
            if (empty(mer_cert_no)){
                layer.msg("证件号 不能为空");
                return false;
            }
            if (empty(legal_name)){
                layer.msg("法人姓名 不能为空");
                return false;
            }
            if (empty(mer_level1_no) || empty(mer_level2_no)){
                layer.msg("商户一级分类或商户二级分类 不能为空");
                return false;
            }

            if (empty(mer_province) || empty(mer_city) || empty(mer_district) || empty(mer_address)){
                layer.msg("商户所在省、市、区、地址 不能为空");
                return false;
            }
            if (empty(mer_contact_name) || empty(mer_legal_phone)){
                layer.msg("商户联系人姓名或商户联系人手机号 不能为空");
                return false;
            }
            if (empty(card_no)){
                layer.msg("结算银行账户或银行卡号 不能为空");
                return false;
            }
            if (empty(bank_code)){
                layer.msg("开户银行支行 不能为空");
                return false;
            }

            $(this).ajaxSubmit({
                type: "POST",
                dataType: "json",
                url: "{{ route('seller/yop/add') }}",
                data: {
                    ajax_data
                },
                contentType: false,
                cache: false,
                processData:false,
                success: function(data, textStatus) {
                    layer.msg(data.msg);
                    if(data.error == 0){
                        if(data.url){
                            window.location.href = data.url;
                        }else{
                            window.location.reload();
                        }
                    }else{
                        return false;
                    }
                },
            });
            return false; // 阻止表单自动提交事件
        });
    })
</script>

<script type="text/javascript">
    // 验证是否为空值
    function empty(e) {
        switch (e) {
            case "":
            case 0:
            case "0":
            case null:
            case false:
            case typeof this == "undefined":
                return true;
            default:
                return false;
        }
    }

</script>

@include('seller.base.seller_pagefooter')
