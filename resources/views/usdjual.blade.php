<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>USD Jual</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    <style>

        table {
            table-layout: auto;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
<div class="content">
    <div>
        <div class="form-group col-6">
            <h1>Insert</h1>
            <form method="post" action="{{url('/usdjualadd')}}">
                @csrf
                <table id="form">
                    <tr>
                        <td><label>Mata Uang</label></td>
                        <td><input type="text" id="matauang"  name="matauang" required></td>
                    </tr>
                    <tr>
                        <td><label>Jual Week</label></td>
                        <td><input type="text" id="week"  name="week"></td>
                    </tr>
                    <tr>
                        <td><label>Jual Month</label></td>
                        <td><input type="text" id="month"  name="month"></td>
                    </tr>
                    <tr>
                        <td><label>Jual Three Month</label></td>
                        <td><input type="text" id="threemonth"  name="threemonth"></td>
                    </tr>
                    <tr>
                        <td><label>Jual Six Month</label></td>
                        <td><input type="text" id="sixmonth"  name="sixmonth"></td>
                    </tr>                   
                    <tr>
                        <td colspan=2><button type="submit" class="btn btn-primary" id="btn_add" style="background-color:teal;margin:25px auto;float:center;">{{ __('Insert') }}</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <br>
        <div class="form-group col-6">
            <h1>Update</h1>
            <form method="post" action="{{url('/usdjualupdate')}}">
                @csrf
                <table id="formupd">
                    <tr>
                        <td><label>ID</label></td>
                        <td><input type="text" id="id"  name="id" required></td>
                    </tr>
                    <tr>
                        <td><label>Mata Uang</label></td>
                        <td><input type="text" id="matauang"  name="matauang" required></td>
                    </tr>
                    <tr>
                        <td><label>Jual Week</label></td>
                        <td><input type="text" id="week"  name="week"></td>
                    </tr>
                    <tr>
                        <td><label>Jual Month</label></td>
                        <td><input type="text" id="month"  name="month"></td>
                    </tr>
                    <tr>
                        <td><label>Jual Three Month</label></td>
                        <td><input type="text" id="threemonth"  name="threemonth"></td>
                    </tr>
                    <tr>
                        <td><label>Jual Six Month</label></td>
                        <td><input type="text" id="sixmonth"  name="sixmonth"></td>
                    </tr>
                    <tr>
                        <td colspan=2><button type="submit" class="btn btn-primary" id="btn_upd" style="background-color:teal;margin:25px auto;float:center;">{{ __('Update') }}</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <br>
        <div>
            <table id="example" class="display" style="width:100%">
                <thead >
                    <th>ID</th>
                    <th>
                        MATA UANG
                    </th>
                    <th>
                        JUAL WEEK
                    </th>
                    <th>
                        JUAL MONTH
                    </th>
                    <th>
                        JUAL THREE MONTH
                    </th>
                    <th>
                        JUAL SIX MONTH
                    </th>
                    <th>
                        DATE LABEL
                    </th>
                    <th>
                        DATE
                    </th>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td>
                            {{$data->id_usd}}
                        </td>
                        <td>
                            {{$data->mata_uang}}
                        </td>
                        <td>
                            {{$data->jual_week}}
                        </td>
                        <td>
                            {{$data->jual_month}}
                        </td>
                        <td>
                            {{$data->jual_threemonth}}
                        </td>
                        <td>
                            {{$data->jual_sixmonth}}
                        </td>
                        <td>
                            {{$data->date_label}}
                        </td>
                        <td>
                            <?php
                            $myDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $data->date_created);
                            $newDateString = $myDateTime->format('d M Y');
                            echo $newDateString;
                            ?>
                        </td>
                        <td>
                            <a href="{{ url('/usdjualdelete/' . $data->id_usd) }}" class="btn btn-xs btn-info pull-right">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  
</div>
</body>

