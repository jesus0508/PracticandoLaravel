@if (session('status'))
    <div class="alert alert-success">
        <ul>
            {{session('status')}}
        </ul>
    </div>
@endif