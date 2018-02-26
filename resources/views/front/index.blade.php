@extends('welcome')
@section('title', 'Drabr - say what you mean to say anonymously to people in your 7 mile radius.')

@section('content')
<div class="main-header">
	<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-pull">
                <div id="logo" class="text-center">
				<a href="mailto:admin@drabr.com" target="_top">Contact Us</a>
                    <h1><a class="black-color" href="/"><strong>DRABR</strong></a></h1>
                    <p style="color:silver;">"Say what you mean to say"</p>
                </div>
            </div>
        </div>
        <!--<div class="row">
            <div class="col-md-6 col-sm-12 col-md-offset-3">
                <form action="#" id="form-buscar" method="get" class="sidebar-form sidebar-formNew">
                    <div class="form-group">
                        <div class="input-group">
                            <input id="1" class="form-control" type="text" name="q" placeholder="Search..." required/>
                            <span class="input-group-btn">
                            	<button  name="search" class="btn btn-success" id="search-btn" type="submit"> 
                            	<i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search </button>
                            </span> 
                        </div>
                    </div>
                </form>
            </div>       
        </div> -->
        <div class="row">
            <div class="col-md-6 col-sm-12 col-md-offset-3">
                <div class="sidebar-form sidebar-formNew">
                	<div class="form-group">
                    	<div class="search-main-field">
                            <div class="input-group pointer addPOst"> 
                                <span class="input-group-addon fileUpload btn-primary" >Add Image</span>
                                <input type="hidden" class="lat">
                                <input type="hidden" class="long">
                                <input type="file" accept="image/x-png,image/gif,image/jpeg" class="hide" name="image" id="my-file-selector">
                                <input type="text" id="desc" name="desc" class="desc form-control" placeholder="Say Something">
                            </div>
                            <button  name="search"  class=" pointer post btn btn-flat btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
			
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="main-body">
    <div class='pin bounce'></div>
    <div class='pulse'></div>
    <div class="message">
        <p>Please allow gps to access location!</p>
    </div>
</div>
<div class="container-fluid">
    <div class="desc-dev hide">
        <ul class="timeline">
            <li>
                <div class="timeline-item">
                    <h3 class="timeline-header"> 
                        <span class="back"><i class="fa fa-mail-reply"></i> Back</span> 
                        <span class="timeSpan"><i class="fa fa-clock-o"></i></span> 
                        <span class="timeSec desc-time"></span> <a  class="desc-place"></a> 
                        <br>
                        <br>
                        <span class="timeSpanMap"> 
                            <span class="mapMarker bounce">
                                <i class="fa fa-map-marker"></i>
                            </span> 
                            <span class="desc-distance"></span> 
                        </span> 
                        <br>
                    </h3>
                    <div class="timeline-body desc-body"> </div>
                    <div class="clearfix">&nbsp;</div>
                </div>
            </li>
            <li>
                <div class="timeline-item">
                    <input type="hidden" class="desc-id">
                    <span class="commentIcon"><i class="fa fa-comment"></i></span>
                    <div class="sidebar-form addcomment" >
                        <div class="input-group">
                            <input type="text" class="comment form-control" placeholder="Say Something">
                            <span class="input-group-btn">
                                <button  name="search"  class="commentBtn pointer btn btn-default">Comment </button>
                            </span> 
                        </div>
                    </div>
                    <div class="clearfix">&nbsp;</div>
                </div>
            </li>
            <li>
                <div class="timeline-item commentsTag"></div>
            </li>
        </ul>
    </div>
</div>
<div class="overlay " style="display:none"><span class="wait"><i class="fa fa-spinner fa-spin" aria-hidden="true"></i></span></div>

<!-----<p id="latlng" style="color:silver;">'</p>------>

@endsection 