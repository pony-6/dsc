@include('seller.base.seller_pageheader')

@include('seller.base.seller_nave_header')

<script src="{{ asset('js/transport_jquery.js') }}"></script>
<script src="{{ asset('js/utils.js') }}"></script>
<script src="{{ asset('js/lib_ecmobanFunc.js') }}"></script>
<script src="{{ asset('assets/seller/js/listtable.js') }}"></script>
<script src="{{ asset('assets/seller/js/listtable_pb.js') }}"></script>

<div class="ecsc-layout">
    <div class="site wrapper">
        @include('seller.base.seller_menu_left')
        <div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">
                @include('seller.base.seller_nave_header_title')

                        <table class="ecsc-default-table goods-default-table">
                            <thead>
                                <tr ectype="table_header">
                                    <th><div class="tDiv">{{ lang('admin/goods_label.label_name') }}</div></th>
                                    <th><div class="tDiv">{{ lang('admin/goods_label.bind_goods_number') }}</div></th>
                                    <th><div class="tDiv">{{ lang('admin/goods_label.label_image') }}</div></th>
                                    <th><div class="tDiv">{{ lang('admin/goods_label.sort') }}</div></th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse ($label_list as $key=>$label)
                                <tr>
                                    <td>
                                        <div class="tDiv">
                                            {{ $label['label_name'] }}
                                            @if ($label['label_url'])
                                            <a href="{{ $label['label_url'] }}" target="_blank">[{{ lang('admin/goods_label.see_url') }}]</a>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tDiv">
                                            {{ $label['bind_goods_number'] }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tDiv">
                                            <img src="{{ $label['label_image'] }}" height="20" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tDiv">
                                            {{ $label['sort'] }}
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <tr><td class="no-records" colspan="10">{{ lang('admin/common.no_records') }}</td></tr>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        @include('seller.base.seller_pageview')
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
        // 筛选 排序
    listTable.recordCount = '{{ $page['count'] ?? 0 }}';// 总共记录数
    listTable.pageCount = '{{ $page['page_count'] ?? 1 }}';// 总共几页

    @if (isset($filter) && !empty($filter))

    @foreach($filter as $key => $item)
        listTable.filter.{{ $key }} = '{{ $item }}';
    @endforeach

    @endif
</script>