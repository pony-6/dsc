

<div class="main">
    
@if($order_thum)

    
@foreach($order_thum as $order_thum)

    <div class="data-img">
        <img src="{{ $order_thum['goods_thumb'] }}">
    </div>
    
@endforeach

    
@endif


    <div class="kd-content">
        <section class="result-box">
            <div class="result-success" id="success" v-show="!error">
                <ul id="result" class="result-list sortup">
                    
@foreach($list as $k => $list)

                    <li 
@if($k == 0)
 class="last" 
@endif
>
                        <div class="col1">
                            <dl>
                                <dt>{{ $list['time'] }}</dt>
                            </dl>
                        </div>
                        <div class="col2"><span></span></div>
                        <div class="col3">{{ $list['context'] }}</div>
                    </li>
                    
@endforeach

                </ul>
            </div>

        </section>
    </div>
</div>
<style>
    .data-img { width:100px;height: 100px; display: inline-block}
    .data-img img{ width:100px;height: auto; }

    .result-list {
        border-top: 0.0625rem solid #e6e6e6;
    }
    .result-list li {
        display: -webkit-box;
        -webkit-box-align: center;
        overflow: hidden;
        color: #828282;
        border-bottom: 0.0625rem solid #e6e6e6;
    }
    .result-list li.last {
        color: #ff7800;
    }
    .result-list li .col1, .result-list li .col2, .result-list li .col3 {
        position: relative;
        display: block;
    }
    .result-list .col3:before {
        content: '';
        position: absolute;
        top: -2rem;
        bottom: -2rem;
        left: -12px;
        border-left: 1px solid #e6e6e6;
    }
    .result-list .col2 span {
        border: 1px solid #e6e6e6;
        border-radius: 50%;
        position: absolute;
        left: 0;
        top: 50%;
        margin-top: -.5rem;
        width: 1rem;
        height: 1rem;
        background: #FFF;
        z-index: 2;
        color: #e6e6e6;
    }
    .result-list .last .col2 span {
        border-color: #ff7800;
        color: #ff7800;
    }
    .result-list .last.finish .col2 span{
        background: #ff0000;
    }
    .result-list .last.finish .col2 span:before {
        width: 8px;
        height: 4px;
        margin-top: -2px;
        border:none;
        border-left: 1px solid #fff;
        border-bottom: 1px solid #fff;
        -webkit-transform: translate(-50%, -50%) rotate(-45deg);
        transform: translate(-50%, -50%) rotate(-45deg);
    }
    .result-list .col2 span:before {
        position: absolute;
        top: 50%;
        left: 50%;
        content: '';
        width: 6px;
        height: 6px;
        margin-top: -2px;
        border-left: 1px solid;
        border-bottom: 1px solid;
        -webkit-transform: translate(-50%, -50%) rotate(-45deg);
        transform: translate(-50%, -50%) rotate(-45deg);
    }
    .result-list.sortup .col2 span:before {
        border: none;
        border-right: 1px solid;
        border-top: 1px solid;
        margin-top: 2px;
    }
    .result-list li:first-child .col3:before {
        top: 50%;
    }
    .result-list li .col1 {
        width: 5rem;
        padding: 0.625rem;
        text-align: center;
        font-size: 0.875rem;
        font-weight: bold;
        font-family: Helvetica, Arial, sans-serif;
    }
    .result-list li .col2 {
        width: 1.25rem;
        position: relative;
    }
    .result-list li .col3 {
        -webkit-box-flex: 1;
        padding: 0.625rem;
        font-size: 0.875rem;
        line-height: 1.375rem;
    }
    .result-list li .col3 a{
        color:#828282;
        font-weight: bold;
    }
    .result-list li .col1 dd {
        margin-top: 0.25rem;
        font-size: 1.5rem;
    }
    li.last .sortdown .col2 {
        border: solid 1px #ff7800
    }
    .result-list li.last a{
        color:#ff7800;
        font-weight: bold;
    }
</style>