<html>
<body>
<table>

    @for ($i = 0; $i < count($clients); $i++)
        <tr>
            <td>DATAA</td>
            <td>{{$clients[$i]['rc_id']}}</td>
            <td>{{$clients[$i]['rc_name']}}</td>
            <td>{{$clients[$i]['meeting_title']}}</td>
            <td>{{$clients[$i]['meeting_date']}}</td>
            <td>{{$clients[$i]['meeting_content']}}</td>

        </tr>
    @endfor
</table>


</body>


</html>
