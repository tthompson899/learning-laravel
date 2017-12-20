{{-- label and input text field for title --}}
  <div class="form-group">
    {!! Form::label('title', 'Name:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>

  {{-- label and input textarea field for body --}}
  <div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
  </div>

  {{-- published at field --}}
  <div class="form-group">
    {!! Form::label('published_at', 'Publish On:') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
  </div>

  {{-- Tags Form input --}}
  <div class="form-group">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple']) !!}
  </div>

  {{-- submit button to add article --}}
  <div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary for-control']) !!}
  </div>
