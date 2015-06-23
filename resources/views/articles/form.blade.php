

		<div class="form-group">
		    {!! Form::label('title','Title:') !!}
		    <br/>
		    {!! Form::text('title', null, array('class'=>'form-control', 'placeholder'=>'Title goes here ...')) !!}
		</div>

		<div class="form-group">
			    {!! Form::label('Body:') !!}
			    <br/>
			    {!! Form::textarea('body', null, array('class'=>'form-control', 'size'=>'30x4', 'placeholder'=>'Body goes here ...')) !!}
		</div>

		<div class="form-group">
			    {!! Form::label('published_at', 'Published On') !!}
			    <br/>
			    {!! Form::input('date', 'published_at', $article->published_at, array('class'=>'form-control', 'size'=>'30x4')) !!}
		</div>

		<div class="form-group">
			    {!! Form::label('tag_list', 'Tags:') !!}
			    <br/>
			    {!! Form::select('tag_list[]', $tags, null, ['id'=>'tag_list','class'=>'form-control', 'multiple']) !!}
		</div>



		<div class="form-group">		    
		    {!! Form::submit($submitButtonText, array('class'=>'btn btn-info')) !!}
		</div>

		@section('footer')		
		<script type="text/javascript">
		  $('#tag_list').select2({
		  	placeholder: 'Choose a tag',
		  	tags: true,
		  	// data: [
		  	// 	{id: 'one', text: 'One'},
		  	// 	{id: 'two', text: 'Two'},
		  	// ]
		  	//OR
		  	// ajax{
		  	// 	dataType: 'json',
		  	// 	url: 'api/tags',
		  	// 	delay: 250,
		  	// 	data:function(params) {
		  	// 		return {
		  	// 			q:params.term
		  	// 		}
		  	// 	},
		  	// 	processResults: function(data) {
		  	// 		return { results: data.property }
		  	// 	}
		  	//OR
		  	// ajax: {
		  	// 	dataType: 'json',
		  	// 	url: 'tags.json',
		  	// 	processResults: function(data){
		  	// 		results: data
		  	// 	}
		  	// 	}
		  	// }

		  });
		</script>
		@endsection