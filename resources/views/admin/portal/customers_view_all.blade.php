@include('admin.header_admin')


{{-- CONTENT COL START --}}

<div class="col-10 px-3">

    {{-- NAV BAR START --}}

    <div
        class="row-cols-1 row justify-content-center align-items-center text-white py-4 content_navbar">
        <div class="col">
            <nav class="navbar navbar-expand-sm bg-black navbar-light">
                <div class="container-fluid">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link active" href="">All Learners</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    {{-- NAV BAR END --}}

    {{-- TABLE START --}}

    <div class="row row-cols-1 justify-content-center align-items-center g-2 my-3 ">
        <div class="col">
            <div class="table-responsive">
                <table
                    class="table table-striped
                    table-hover	
                    table-borderless
                    table-primary
                    align-middle">
                    <thead class="table-light">
                        <caption>All Learners</caption>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Plan ID</th>
                            <th>Country</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($users as $val)
                            <tr class="table-primary">
                                <td>{{ $val->first_name }} {{ $val->last_name }}</td>
                                <td>{{ $val->gender }}</td>
                                <td>{{ $val->plan_id }}</td>
                                <td>{{ $val->country }}</td>
                                <td>{{ $val->username }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>

        </div>
    </div>


    {{-- TABLE END --}}


</div>

{{-- CONTENT COL END --}}

</div>
</div>

{{-- MAIN SECTION END --}}

@include('admin.footer_admin')
