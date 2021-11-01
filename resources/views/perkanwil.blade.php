@extends('welcome')

@section('content')
    <table class="table table-bordered table-striped" style="width:100%">
        <thead>
            <tr>
                <td>#</td>
                <th>Kanwil</th>
                <th>Total ATM V2020</th>
                <th>Total CRM V2020</th>
                <th>ATM Problem</th>
                <th>CRM Problem</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $i => $item)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $item->kanwil_name }}</td>
                    <td>{{ rand(1000, 2000) }}</td>
                    <td>{{ rand(1000, 2000) }}</td>
                    <td>
                        <a href="{{ route('perkanwilType', [$item->kanwil, 'atm']) }}">{{ $item->acc_atm_count }}</a>
                    </td>
                    <td><a href="{{ route('perkanwilType', [$item->kanwil, 'crm']) }}">{{ $item->acc_crm_count }}</a>
                    </td>
                    <td><a href="{{ route('export.perkanwil', $item->kanwil) }}">Export kanwil</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
