

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
			    {!! Form::input('date', 'published_at', date('Y-m-d'), array('class'=>'form-control', 'size'=>'30x4')) !!}
		</div>


		<div class="form-group">		    
		    {!! Form::submit($submitButtonText, array('class'=>'btn btn-info')) !!}
		</div>