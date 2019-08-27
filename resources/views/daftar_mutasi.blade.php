@extends("master_home")

@section('body')
<table border="2" style="margin-left: 30%;width: 40%;">
    @for ($i = 0; $i < 15; $i+=1)
    <tr>
        <td>Ref</td>
        <td>Keterangan</td>
        <td>Debet</td>
    </tr>
    @endfor
</table>
@endsection