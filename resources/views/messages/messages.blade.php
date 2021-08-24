@if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $er)
            <li>{{$er}}</li>
        @endforeach
        </ul>
    </div>
@endif
