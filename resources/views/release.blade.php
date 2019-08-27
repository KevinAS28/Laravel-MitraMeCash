@extends("master_home")

@section("head")
@include("release_saldo_style")
@endsection

@section("body")
@if(isset($success))
<script>
    alert('Release saldo sebesar Rp. {{$saldo}} berhasil');
    location.href='{{URL::to("/home")}}';
</script>

@endif
<div style="margin-left: 45%;">
    <table style="width: 100%;">
        @foreach ($release_saldo as $dat)
        <tr style="width: 100%;">
            <form action="{{route('relsal', array($dat))}}" method="post">
                <td style="width: 100%;">

                    @csrf
                    <button class="but">
                        Rp. {{$dat}}
                    </button>
                        
                    
            
            </td>
        </form>
        </tr>
        @endforeach
    </table>
    @endsection
</div>
