<div style="margin-bottom: 25px;">
    <table class="admin_table table is-bordered is-striped is-hoverable is-narrow sortable" style="width: 100%;">
        <thead>
        <tr class="admin_header_row">
            <td style="width:3%;">Id</td>
            <td style="width:20%;">Name</td>
            <td style="width:20%;">Email</td>
            <td style="width:10%;">Date Joined</td>
            <td class="sorttable_nosort" style="width:15%;">Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $user)
            <tr class="admin_row">
                <td>{{ ++$key }}</td>
                <td>
                    <a href="{{ route('admin_users_edit', $user->uuid) }}">
                        {{ $user->name }}
                    </a>
                </td>

                <td>{{ $user->email }}</td>
                <td>{{ $user->created !== NULL ? $user->created_at->format('j M Y') : '' }}</td>
                <td>
                    <div style="float:left; width: 50%;">
                        <a href="{{ route('admin_users_edit', $user->uuid) }}"><btn class="button is-info" style="width:90%;">Edit</btn></a>
                    </div>
                    <div style="float: left; width: 50%;">
                        <form method="GET" action="{{ route('admin_users_delete', $user->uuid) }}" accept-charset="UTF-8">
                            <button class="button is-danger" style="width:90%;" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Story" data-message="Are you sure you want to delete this story?">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@section('admin_scripts')

    <script>
        $(document).ready( function () {

            $('.admin_table').DataTable({
                "iDisplayLength" : 50,
                language: {
                    paginate: {
                        next: '<i class="fa fa-arrow-right">',
                        previous: '<i class="fa fa-arrow-left">'
                    }
                }
            } );
        } );
    </script>

    {{--    @include('partials.delete_confirm')--}}

@endsection
