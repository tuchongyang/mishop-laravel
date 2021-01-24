@if(session('message'))
    <div class="alert alert-{{session('status')}} mb-0">{{ session('message') }}</div>
@endif