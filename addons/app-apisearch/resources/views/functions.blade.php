@extends('api-search:layout')

@section('content')
<h1>Laravel API</h1>

<table class="pure-table">
	<thead>
        <tr>
            <th>#</th>
            <th>名前</th>
            <th>シグネチャ</th>
            <th>DocBlock</th>
        </tr>
	</thead>

	<tbody>
<?php $counter = 1; ?>
@foreach ($functions as $name => $info)
        <tr>
            <td>{{ $counter++ }}</td>
            <td>{{ $name }}</td>
            <td>{{ $info['signature'] }}</td>
            <td><pre>{{ $info['docblock'] }}</pre></td>
        </tr>
@endforeach
	</tbody>

</table>

@stop
