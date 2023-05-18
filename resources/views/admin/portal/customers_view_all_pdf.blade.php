<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Learners.pdf</title>
    <style>
        table, td, th {
            border: 1px solid;
            text-align: center;
          }
          table{
            border-collapse: collapse;
            align-items: center;
          }
          td{
            padding:4px;
          }
    </style>
</head>
<body>









    
        
            
                <table>
                    <thead>
                        
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Plan</th>
                            <th>Country</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($users as $val)
                            <tr class="table-primary">
                                <td>{{ $val->first_name }} {{ $val->last_name }}</td>
                                <td>{{ $val->gender }}</td>
                                <td>
                                    @if ($val->plan_id == 1)
                                        Basic
                                    @elseif ($val->plan_id == 2)
                                        Starter
                                    @elseif ($val->plan_id == 3)
                                        Builder
                                    @elseif ($val->plan_id == 4)
                                        Expert
                                    @endif
                                </td>
                                <td>{{ $val->country }}</td>
                                <td>{{ $val->username }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
           

        
   









</body>
</html>