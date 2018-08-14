{{--
  CurID =  Id for model to select
  Title = Title for dropdown
  Name = Name for dropdown and thing to return
  TypeModel = Model to use.

  @include('layouts.dropdown', ['TypeModel'=>$TypeModel, 'Name'=>$Name, 'Title'=>$Title, 'CurID'=>$CurID, 'Required'=>false])
--}}

<div class="form-group">
<label for="{{ $Name }}">{{ $Title }} @if($Required == true)<span class="required">*</span>@endif</label>
<select @if($Required == true) required @endif class="form-control" id="{{ $Name }}" name="{{ $Name }}">
  {{-- <option value="">Select {{$Title}}</option> --}}
  @foreach($TypeModel as $Type)
    @if($CurID && $CurID == $Type->key)
      <option selected value="{{$Type->key}}">{{$Type->description}}</option>
    @else
      <option value="{{$Type->key}}">{{$Type->description}}</option>
    @endif
  @endforeach
</select>
<span class="bar"></span>
<div class="errorBlock"></div>
</div>
