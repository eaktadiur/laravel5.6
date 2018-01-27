@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Attendance</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class='table'>
                            <thead>
                                <th>S/N</th>
                                <th>User Name</th>
                                <?php
                                $start_date = date_format(date_create('2017-01-01'), 'Y-m-d');
                                $end_date = date_format(date_create('2017-01-31'), 'Y-m-d');

                                while (strtotime($start_date) <= strtotime($end_date)) {?>
                                <th class="text-center">
                                    <?php echo $start_date = date("d M Y", strtotime($start_date)); ?>
                                </th>
                                <?php

                                $start_date = date("Y-m-d", strtotime("+1 days", strtotime($start_date)));
                            }
                            ?>
                        </thead>

                        <tbody>
                            @foreach($users as $key => $user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$user->name}}</td>
                                <?php
                                $start_date = date_format(date_create('2017-01-01'), 'Y-m-d');
                                $end_date = date_format(date_create('2017-01-31'), 'Y-m-d');

                                while (strtotime($start_date) <= strtotime($end_date)) {?>
                                <td class="text-center">

                                </td>
                                <?php

                                $start_date = date("Y-m-d", strtotime("+1 days", strtotime($start_date)));
                            }
                            ?>

                        </tr>
                        @endforeach()
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
