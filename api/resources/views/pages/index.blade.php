@extends('layouts.master')
@section('title', 'Netadım')
@section('content')
<div id="body">
    <input type="text" name="name" placeholder="Adınızı Giriniz"><br>
    <input type="text" name="phone" placeholder="Telefonunuzu Giriniz"><br>
    <button type="button" name="send">SUBMIT</button>
    <span id="result"></span>
</div>
@stop
@section('script')
<script type="text/javascript">
    $('button[name="send"]').click(function(){
        $('#result').html($('input[name="name"]').val());
    })
    
</script>
@stop