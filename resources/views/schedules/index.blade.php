@extends ('layouts.app')

@section ('css')

    <style>
        .tb-resize {
            width: 16.66%;
        }
    </style>

@endsection

@section ('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-3">Schedules</h1>
                @foreach ($scheduleByDate as $date => $schedules)
                <div class="float-right my-3">
                    <button type="button" class="btn btn-secondary disabled">
                        <small>Date (YY-MM-DD):</small>
                        <span class="badge badge-light">{{$date}}</span>
                    </button>
                </div>
                <table class="table table-bordered clearfix">
                    <tr>
                        <th class="tb-resize table-secondary"><strong>Time:</strong></th>
                        @foreach ($schedules as $schedule)
                            <td>{{ date('h:i a', strtotime($schedule->time)) }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <th class="tb-resize table-secondary"><strong>Name:</strong></th>
                        @foreach ($schedules as $schedule)
                            <td>{{ $schedule->name }}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <th class="tb-resize table-secondary"><strong>Data:</strong></th>
                        @foreach ($schedules as $schedule)
                            <td>{{ $schedule->data }}</td>
                        @endforeach
                    </tr>
                </table>
                @endforeach
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('schedules.create') }}" class="btn btn-outline-secondary">Add New</a>
            </div>
        </div>
    </div>

@endsection
