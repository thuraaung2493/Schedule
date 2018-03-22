@extends ('layouts.app')

@section ('css')
    <link rel="stylesheet" href="/css/select2.min.css">
@endsection

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('schedules.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <select class="name form-control" name="name" required>
                            <option value="">Choose Name</option>
                            @foreach ($users as $user)
                                <option value="{{ $user }}">{{ $user }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="time">Time:</label>
                        <input type="time" name="time" id="time" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="data">Data:</label>
                        <textarea name="data" id="data" cols="30" rows="5" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section ('scripts')

    <script src="/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.name').select2();
        });
    </script>
@endsection
