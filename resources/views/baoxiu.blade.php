@extends('layouts.wg')

@section('content')
		<h2>GDMU网络报修</h2>
            <form action="{{url('baoxiu')}}" method="post">
            {{ csrf_field() }}
<br>
<br>
                <input class="form-control" name="stunum" type="text"  placeholder="学号" value="{{ old('stunum') }}">
                
				@if ($errors->has('stunum'))
					<span class="help-block">
						<strong>{{ $errors->first('stunum') }}</strong>
					</span>
				@endif
<br>
<br>
                <input class="form-control" name="stuname" type="text" placeholder="姓名" value="{{ old('stuname') }}">
				@if ($errors->has('stuname'))
					<span class="help-block">
						<strong>{{ $errors->first('stuname') }}</strong>
					</span>
				@endif
<br>
<br>
                <input class="form-control" name="phone" type="text" placeholder="联系电话" value="{{ old('phone') }}">
				@if ($errors->has('phone'))
					<span class="help-block">
						<strong>{{ $errors->first('phone') }}</strong>
					</span>
				@endif
<br>
<br>
                <input class="form-control" name="phone2" type="text" placeholder="短号（可选）" value="{{ old('phone2') }}">
				@if ($errors->has('phone2'))
					<span class="help-block">
						<strong>{{ $errors->first('phone2') }}</strong>
					</span>
				@endif
<br>
<br>
                <select class="form-control" name="sushe" id="sushe">
					<option selected="selected" value="0">宿舍楼</option>
				    @foreach ($sushes as $data)
						<option value="{{$data->sushe}}">{{$data->sushe}}</option>
				    @endforeach
				</select>
				@if ($errors->has('sushe'))
					<span class="help-block">
						<strong>{{ $errors->first('sushe') }}</strong>
					</span>
				@endif
<br>
<br>

				<div class="row">
	                <div class="col-xs-8" >
	                <input class="form-control" name="fangjian" type="text" placeholder="房间号（3位数字）" value="{{ old('fangjian') }}">
	                </div><div class="col-xs-4" >
	                <select class="form-control" name="port" id="port">
						<option selected="selected" value="0">端口号</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
	                </select></div>
	        	</div>
				@if ($errors->has('fangjian'))
					<span class="help-block">
						<strong>{{ $errors->first('fangjian') }}</strong>
					</span>
				@endif
				@if ($errors->has('port'))
					<span class="help-block text-right">
						<strong>{{ $errors->first('port') }}</strong>
					</span>
				@endif
<br>
<br>
				
				<textarea name="info"  rows="8"  class="form-control" placeholder="故障情况描述，简要介绍一下故障情况，如：错误代码等" >{{ old('info') }}</textarea>
				@if ($errors->has('info'))
					<span class="help-block">
						<strong>{{ $errors->first('info') }}</strong>
					</span>
				@endif
<br>
<br>
				
				<input class="form-control btn btn-default" type="submit">
<br>
<br>
                
            </form>
@endsection