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
                            <a href="{{ route('view_plans') }}" class="nav-link active"
                                href="">View Plans</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('create_plans') }}" class="nav-link"
                                href="">Add Basic Plan</a>
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
                    table-primary   ">
                    <thead class="table-light">
                        <caption>All Plans</caption>
                        <tr>
                            <th>Plan ID</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Features</th>
                            <th>Active Status</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($plans as $plan)
                            <tr class="table-primary">
                                <td> {{ $plan->plan_id }}</td>
                                <td> {{ $plan->planname }}</td>
                                <td> {{ $plan->price }}</td>
                                <td>
                                    <ul>
                                        @php
                                            $features = json_decode($plan->features);
                                        @endphp
                                        @foreach ($features as $feature)
                                            @if ($feature != null)
                                                <li>{{ $feature }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    @if ($plan->is_active == 1)
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </td>
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
