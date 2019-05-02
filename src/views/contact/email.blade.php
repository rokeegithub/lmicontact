@component('mail::message')
# Introduction

Their is new query form
<br>
Message:
{{$message}}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
