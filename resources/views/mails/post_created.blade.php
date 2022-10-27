@component('mail::message')
<b>Nuovo post creato!</b> 

<br>

<h1>{{ $post->title }}</h1>
{{ $post->content }}
@component('mail::button', ['url' => route('admin.posts.show', $post)])
View Posts
@endcomponent
 
Thanks,<br>
{{ config('app.name') }}
@endcomponent