@push('scripts')
<script src="{{ mix('/js/app.js') }}"></script>
@endpush

<div>
    @foreach($test as $testFall)
    <div>
        {{ $testFall->type}}
    </div>
    @endforeach
</div>