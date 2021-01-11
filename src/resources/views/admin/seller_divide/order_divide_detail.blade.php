@include('admin.base.header')

<div class="warpper">
    <div class="title">{{ __('admin/common.seller') }} - {{  __('admin::merchants_commission.commission_bill_detail') }} {{ __('admin/seller_divide.order_divide_detail') }}</div>
    <div class="content">

        <div class="flexilist of">
            <div class="main-info">

                <div class="switch_info" style="overflow: inherit">

                    <div class="item">
                        <div class="label-t"> {{ '' }}</div>
                        <div class="label_value ">
                            {{ $info['pay_trade_data']['transaction_id'] ?? '' }}
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>
<script type="text/javascript">

    $(function () {


    })
</script>
@include('admin.base.footer')