# {{ $title }}

#### 接口描述：

{{ $description }}

#### 请求方式：

{{ $method }}

@if(!empty($header))
#### 请求头：

| 参数名 | 是否必须 | 类型  | 说明 |
| :---  | :---    | :---  | --- |
@foreach($header as $k => $v)
| {{ $k }} | 是 | string |  |
@endforeach
@endif

@if(!empty($query))
#### GET参数：

| 参数名 | 是否必须 | 类型  | 说明 |
| :---  | :---    | :---  | --- |
@foreach($query as $k => $v)
| {{ $k }} | 是 | string |  |
@endforeach
@endif

@if(!empty($post))
#### POST参数：

| 参数名 | 是否必须 | 类型  | 说明 |
| :---  | :---    | :---  | --- |
@foreach($post as $k => $v)
| {{ $k }} | 是 | string |  |
@endforeach
@endif

@if(!empty($response))
#### 响应参数：

| 参数名 | 类型 | 说明 |
| :---  | :--- | --- |
@foreach($response as $k => $v)
| {{ $k }} | string |  |
@endforeach
@endif

#### 响应示例:

```
{!! $content !!}
```

#### 异常示例:

```
c
```

#### 错误码解释
| 错误码 | 错误消息 | 解决方案 |
| :---  | :---    | ---     |
| as    | sss     | ssss    |

#### API 工具

- API测试工具
- 错误码查询工具
