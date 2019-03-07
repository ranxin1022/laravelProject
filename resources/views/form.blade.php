{{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
<meta charset="UTF-8">
<form action="{{ route('form.submit') }}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
        <label>标题</label>
        <input type="text" name="title" class="form-control" placeholder="输入标题">
    </div>
    <div class="form-group">
        <label>URL</label>
        <input type="text" name="url" class="form-control" placeholder="输入URL">
    </div>
    <div class="form-group">
        <label>电话</label>
        <input type="text" name="phone" class="form-control" placeholder="输入电话">
    </div>
    <div class="form-group">
        <label>email</label>
        <input type="text" name="email" class="form-control" placeholder="输入email">
    </div>
    <div class="form-group">
        <label>性别</label>
        <input name="sex" value="男">
    </div>
    <fileupload-component></fileupload-component>
    <button type="submit" class="btn btn-primary">提交</button>
</form>