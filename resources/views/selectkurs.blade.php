<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kurs</title>

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
            <form method="post" action="{{url('/kursadd')}}">
                @csrf
                <table id="form">
                    <tr>
                        <td><label>Bank</label></td>
                        <td><input type="text" id="bank"  name="bank" required></td>
                    </tr>
                    <tr>
                        <td><label>Kurs Jual</label></td>
                        <td><input type="text" id="jual"  name="jual"></td>
                    </tr>
                    <tr>
                        <td><label>Kurs Beli</label></td>
                        <td><input type="text" id="beli"  name="beli"></td>
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
            <form method="post" action="{{url('/kursupdate')}}">
                @csrf
                <table id="formupd">
                    <tr>
                        <td><label>ID</label></td>
                        <td><input type="text" id="id"  name="id" required></td>
                    </tr>
                    <tr>
                        <td><label>Bank</label></td>
                        <td><input type="text" id="bankupd"  name="bankupd" required></td>
                    </tr>
                    <tr>
                        <td><label>Kurs Jual</label></td>
                        <td><input type="text" id="jualupd"  name="jualupd"></td>
                    </tr>
                    <tr>
                        <td><label>Kurs Beli</label></td>
                        <td><input type="text" id="beliupd"  name="beliupd"></td>
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
                        BANK
                    </th>
                    <th>
                        JUAL
                    </th>
                    <th>
                        BELI
                    </th>
                    <th>
                        DATE
                    </th>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td>
                            {{$data->id_kurs}}
                        </td>
                        <td>
                            {{$data->bank}}
                        </td>
                        <td>
                            {{$data->kurs_jual}}
                        </td>
                        <td>
                            {{$data->kurs_beli}}
                        </td>
                        <td>
                            <?php
                            $myDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $data->date_created);
                            $newDateString = $myDateTime->format('d M Y');
                            echo $newDateString;
                            ?>
                        </td>
                        <td>
                            <a href="{{ url('/kursdelete/' . $data->id_kurs) }}" class="btn btn-xs btn-info pull-right">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  
</div>
</body>

