<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kurs Erate</title>

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
            <form method="post" action="{{url('/kurserateadd')}}">
                @csrf
                <table id="form">
                    <tr>
                        <td><label>Erate Beli</label></td>
                        <td><input type="text" id="beli"  name="beli" required></td>
                    </tr>
                    <tr>
                        <td><label>Erate Jual</label></td>
                        <td><input type="text" id="jual"  name="jual"></td>
                    </tr>
                    <tr>
                        <td><label>TT Counter Beli</label></td>
                        <td><input type="text" id="ttbeli"  name="ttbeli"></td>
                    </tr>
                    <tr>
                        <td><label>TT Counter Jual</label></td>
                        <td><input type="text" id="ttjual"  name="ttjual"></td>
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
            <form method="post" action="{{url('/kurserateupdate')}}">
                @csrf
                <table id="formupd">
                    <tr>
                        <td><label>ID</label></td>
                        <td><input type="text" id="id"  name="id" required></td>
                    </tr>
                    <tr>
                        <td><label>Erate Beli</label></td>
                        <td><input type="text" id="beli"  name="beli" required></td>
                    </tr>
                    <tr>
                        <td><label>Erate Jual</label></td>
                        <td><input type="text" id="jual"  name="jual"></td>
                    </tr>
                    <tr>
                        <td><label>TT Counter Beli</label></td>
                        <td><input type="text" id="ttbeli"  name="ttbeli"></td>
                    </tr>
                    <tr>
                        <td><label>TT Counter Jual</label></td>
                        <td><input type="text" id="ttjual"  name="ttjual"></td>
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
                        ERATE BELI
                    </th>
                    <th>
                        ERATE JUAL
                    </th>
                    <th>
                        TT COUNTER BELI
                    </th>
                    <th>
                        TT COUNTER JUAL
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
                            {{$data->erate_beli}}
                        </td>
                        <td>
                            {{$data->erate_jual}}
                        </td>
                        <td>
                            {{$data->ttcounter_beli}}
                        </td>
                        <td>
                            {{$data->ttcounter_jual}}
                        </td>
                        <td>
                            <?php
                            $myDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $data->date_created);
                            $newDateString = $myDateTime->format('d M Y');
                            echo $newDateString;
                            ?>
                        </td>
                        <td>
                            <a href="{{ url('/kurseratedelete/' . $data->id_kurs) }}" class="btn btn-xs btn-info pull-right">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  
</div>
</body>

