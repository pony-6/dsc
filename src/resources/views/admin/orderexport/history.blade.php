@include('admin.base.header')
<div class="warpper">
    <div class="title">
        <a href="{{ route('admin/export') }}" class="s-back">Back</a>
        {{ __('admin/order_export.title') }} - {{ __('admin/order_export.sub_title') }}</div>

    <div class="content">
        <div class="explanation" id="explanation">
            <div class="ex_tit">
                <i class="sc_icon"></i><h4>{{ __('admin/order_export.tip_title') }}</h4><span id="explanationZoom" title="Tip"></span>
            </div>
            <ul>
                @foreach(__('admin/order_export.tip_content') as $item)
                <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>

        <div class="flexilist">
            <div class="common-head">
                <div class="fl pr10">
                    <a href="javascript:window.location.reload();" class="btn_trash js-sync-transfer">
                        <div class="fbutton">
                            <div class="add "><span><i class="fa fa-refresh"></i>
                                {{ __('admin/order_export.refresh') }}
                                </span></div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="common-content">
                <div class="list-div" id="listDiv">
                    <table cellpadding="0" cellspacing="0" border="0">
                        <thead>
                        <tr>
                            <th width="30%">
                                <div class="tDiv">{{ __('admin/order_export.file_name') }}</div>
                            </th>
                            <th width="15%">
                                <div class="tDiv">{{ __('admin/order_export.file_type') }}</div>
                            </th>
                            <th width="20%">
                                <div class="tDiv">{{ __('admin/order_export.file_status') }}</div>
                            </th>
                            <th width="20%">
                                <div class="tDiv">{{ __('admin/order_export.created_at') }}</div>
                            </th>
                            <th width="15%">
                                <div class="tDiv text-center">{{ __('admin/order_export.handle') }}</div>
                            </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($export_history as $item)
                            <tr>
                                <td>
                                    <div class="tDiv">{{ $item->file_name }}</div>
                                </td>
                                <td>
                                    <div class="tDiv">{{ $item->file_type }}</div>
                                </td>
                                <td>
                                    <div class="tDiv">
                                        @if($item->deleted_at)
                                            {{ __('admin/order_export.file_expired') }}
                                        @elseif($item->updated_at)
                                            <span style="color: green;">
                                                {{ __('admin/order_export.file_generated') }}
                                            </span>
                                        @else
                                            {{ __('admin/order_export.file_in_generated') }}
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="tDiv">{{ $item->created_at }}</div>
                                </td>
                                <td class="handle text-center">
                                    <div class="tDiv">
                                        @if($item->deleted_at)
                                            -
                                        @elseif($item->updated_at)
                                            <a href="{{ route('admin/history/download', ['id' => $item->id]) }}"
                                               onclick="event.preventDefault();
                                                   document.getElementById('history-download-form-{{ $item->id }}').submit();">
                                                {{ __('admin/order_export.download') }}
                                            </a>

                                            <a href="{{ route('admin/history/delete', ['id' => $item->id]) }}"
                                               onclick="event.preventDefault();
                                                   document.getElementById('history-delete-form-{{ $item->id }}').submit();">
                                                {{ __('admin/order_export.delete') }}
                                            </a>

                                            <form method="post" id="history-download-form-{{ $item->id }}"
                                                  action="{{ route('admin/history/download', ['id' => $item->id]) }}">
                                                @csrf
                                            </form>
                                            <form method="post" id="history-delete-form-{{ $item->id }}"
                                                  action="{{ route('admin/history/delete', ['id' => $item->id]) }}">
                                                @csrf
                                            </form>
                                        @else
                                            -
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div style="text-align: center; margin-top: 12px">
                        {{ $export_history->links() }}
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@include('admin.base.footer')
