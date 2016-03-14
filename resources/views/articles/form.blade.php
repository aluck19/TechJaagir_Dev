<!-- Temporary: to show the articles for a user using user_id -->
{{--{!! Form::hidden('user_id',1) !!}--}}

<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=> 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class'=> 'form-control']) !!}
</div>

<!-- Published form Input -->
<div class="form-group">
    {!! Form::label('published_at', 'Published On:') !!}
    {!! Form::input('date','published_at', $article-> published_at, ['class'=> 'form-control']) !!}
</div>

<!-- Published form Select -->
{{--<div class="form-group">--}}
    {{--{!! Form::label('tags', 'Tags:') !!}--}}
    {{--{!! Form::select('tags',['defaults'], null, ['class'=> 'form-control', 'multiple']) !!}--}}
    {{--{!! Form::select('tags[]',$tags, null, ['class'=> 'form-control', 'multiple']) !!}--}}
{{--</div>--}}


<div class="form-group">
    {!! Form::label('tag_list', 'Tags:') !!}
    {{--{!! Form::select('tags',['defaults'], null, ['class'=> 'form-control', 'multiple']) !!}--}}
    {!! Form::select('tag_list[]',$tags, null, ['id'=> 'tag_list',  'class'=> 'form-control', 'multiple']) !!}
</div>


<!-- Add Article form Input -->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder: 'Choose a tag',
            tags: true,
//            data: [
//                {id: 'one', text: 'One'},
//                {id: 'two', text: 'Two'},
//            ]

//            ajax: {
//                dataType: 'json',
//                url: 'api/tags'
//                delay: 250,
//                data: function(params){
//                    return{
//                        q: params.term
//                    }
//                },
//                processResults: function(data){
//                    return {results: data}
//                }
//            }
        });
    </script>
@endsection