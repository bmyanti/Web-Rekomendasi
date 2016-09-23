@extends('admin_page')
@section('Header_Administrasi')
    <h2>ADMIN - BANTUAN</h2>
@stop

@section('Content_Administrasi')
 <style type="text/css">
    .block1 {
    color: red;
    width: 100px;
    position: relative;
}

.block2 {
 
    width: 250px;
    height: 100px;
    position: absolute;
    top: 0px;
    right: 0px;
}
</style>

<textarea class="form-control" rows="25">
    {{$detail}}
</textarea>
<div align="center">
 <button  type="submit" class="btn">
                 <a href="#">Ubah</a>
                </button></p>
    
</div>
 <!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- <div class="block2">
	
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57ad4fbc38f9be3f"></script>	
</div>
 -->

@stop