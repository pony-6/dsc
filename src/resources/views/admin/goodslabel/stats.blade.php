@include('admin.filterwords.pageheader')
<style>
.article{border:1px solid #ddd;padding:5px 5px 0 5px;}
.cover{height:160px; position:relative;margin-bottom:5px;overflow:hidden;}
.article .cover img{width:100%; height:auto;}
.article span{height:40px; line-height:40px; display:block; z-index:5; position:absolute;width:100%;bottom:0px; color:#FFF; padding:0 10px; background-color:rgba(0,0,0,0.6)}
.article_list{padding:5px;border:1px solid #ddd;border-top:0;overflow:hidden;}
.radio label{width:100%;position:relative;padding:0;}
.radio .news_mask{position:absolute;left:0;top:0;background-color:#000;opacity:0.5;width:100%;height:100%;z-index:10;}
</style>
<div class="wrapper">
    <div class="title">{{ lang('admin/filter_words.filter_words') }} - {{ lang('admin/filter_words.batch_add') }}</div>
    <div class="content_tips">
    <div class="tabs_info">
        <ul>
            <li><a href="{{ route('admin/filter/index') }}">{{ lang('admin/filter_words.words_config') }}</a></li>
            <li><a href="{{ route('admin/filter/words') }}">{{ lang('admin/filter_words.words_store') }}</a></li>
            <li><a href="{{ route('admin/filter/logs') }}">{{ lang('admin/filter_words.words_logs') }}</a></li>
            <li class="curr"><a href="{{ route('admin/filter/stats') }}">{{ lang('admin/filter_words.words_stats') }}</a></li>
        </ul>
    </div>
    <div class="explanation" id="explanation">
        <div class="ex_tit">
            <i class="sc_icon"></i>
                <h4>{{ lang('admin/common.operating_hints') }}</h4>
                <span id="explanationZoom" title="{{ lang('admin/common.fold_tips') }}"></span>
        </div>
        <ul>
            <li>{{ lang('admin/filter_words.stats_notice') }}</li>
        </ul>
    </div>
        <div class="flexilist of">
            <div class="common-head">
                <div class="search">
                    <form action="{{ route('admin/filter/stats') }}" name="searchForm" method="post" role="search">
                    <div class="input">
                        @csrf
                        <input type="text" name="keywords" class="text" placeholder="{{ lang('admin/filter_words.words_name') }}" autocomplete="off">
                        <input type="submit" value="" class="btn search_button">
                    </div>
                    </form>
                </div>
            </div>
            <div class="common-content">
                <div class="list-div">
                    <table cellspacing="0" cellpadding="0" border="0">
                        <tr>
                            <th width="20%"><div class="tDiv">{{ lang('admin/filter_words.words') }}</div></th>
                            <th width="20%"><div class="tDiv">{{ lang('admin/filter_words.count') }}</div></th>
                            <th width="20%"><div class="tDiv">{{ lang('admin/filter_words.today') }}</div></th>
                            <th width="20%"><div class="tDiv">{{ lang('admin/filter_words.seven_days') }}</div></th>
                            <th width="20%"><div class="tDiv">{{ lang('admin/filter_words.thirty_days') }}</div></th>
                        </tr>
                        @forelse ($stats_list as $key=>$stats)
                        <tr>
                            <td><div class="tDiv">{{ $stats['words'] }}</div></td>
                            <td><div class="tDiv">{{ $stats['click_count'] }}</div></td>
                            <td><div class="tDiv">{{ $stats['today'] }}</div></td>
                            <td><div class="tDiv">{{ $stats['seven_days'] }}</div></td>
                            <td><div class="tDiv">{{ $stats['thirty_days'] }}</div></td>
                        </tr>
                        @empty
                        <tr>
                            <tr><td class="no-records" colspan="10">{{ lang('admin/filter_words.no_records') }}</td></tr>
                        </tr>
                        @endforelse
                        <tfoot>
                            <tr>
                                <td colspan="8">
                                @include('admin.base.pageview')
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
  </div>
</div>
@include('admin.filterwords.pagefooter')
