<!-- <ul class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{ route('dashboard')}}"><i class="feather icon-home"></i></a></li>
	@foreach($datta as $key=>$data)
	<li class="breadcrumb-item"><a href="#!">{{ $data }}</a></li>
	@endforeach

	@foreach(Request::segments() as $segment)
    <li class="breadcrumb-item">
        <a href="#">{{$segment}}</a>
    
    @endforeach

</ul> -->


<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="{{ route('dashboard')}}"><i class="feather icon-home"></i></a></li>               
<?php $link = "" ?>
@for($i = 1; $i <= count(Request::segments()); $i++)
    @if($i < count(Request::segments()) & $i > 0)
    <?php $link .= "/" . Request::segment($i); ?>
    <li class="breadcrumb-item">
    	<a href="<?= $link ?>">{{ __(ucwords(str_replace('-',' ',Request::segment($i)))) }}</a>
    </li>
    @else <li class="breadcrumb-item"> {{ __(ucwords(str_replace('-',' ',Request::segment($i)))) }} </li>
    @endif
@endfor
</ul>

