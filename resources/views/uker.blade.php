<table class="table table-bordered table-striped" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>TID</th>
            <th>Type</th>
            <th>Merk</th>
            <th>Pengelola</th>
            <th>Branch</th>
            <th>Region_id</th>
            <th>Kanwil</th>
            <th>Status Instalasi</th>
            <th>IP Adress</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $i => $item)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $item->tid }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->brand }}</td>
                <td>{{ $item->pengelola }}</td>
                <td>{{ $item->branch2 }}</td>
                <td>{{ $item->kanwil }}</td>
                <td>{{ $item->kanwil_name }}</td>
                <td>{{ $item->installation_status }}</td>
                <td>{{ $item->ip_address }}</td>
                <td>{{ $item->acc_created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
