
<div class="form-group">
    {!! Form::label('ISBN', 'ISBN:') !!}
    {!! Form::text('isbn', null, ['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Author', 'Author:') !!}
    {!! Form::text('author', null, ['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Publisher', 'Publisher:') !!}
    {!! Form::text('publisher', null, ['class'=> 'form-control']) !!}
</div>
<!--<div class="form-group">
    {!! Form::label('published_at', 'Published On:') !!}
    {!! Form::input('date', 'published_at', Carbon\Carbon::now()->format('Y-m-d'), ['class'=> 'form-control']) !!}
</div>-->
<div class="form-group">
    {!! Form::label('Language', 'Language') !!}
    {!! Form::select('language', array('0' => 'Select a Level', 
    '1' => 'English', '2' => 'Spanish'), Input::old('language'), 
    array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitTextButton, array('class' => 'btn btn-primary')) !!}
</div>
