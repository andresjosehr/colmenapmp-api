<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{Config("app.url_test")}}/images/logo.png" class="logo" alt="ColmenaPMP">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
