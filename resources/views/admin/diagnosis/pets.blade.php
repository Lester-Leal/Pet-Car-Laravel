<option value="">Select</option>
@foreach ($pets as $pet)
    <option value="{{ $pet->id }}">{{ $pet->name }}</option>
@endforeach
