@extends('layouts.front.master')

@section('content')
	
		<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 740px;">
					<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
						<ul>
							<li data-transition="fade">
								<img src="/front/img/demos/education/slides/slide-1.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat"
									data-kenburns="on" 
									data-duration="20000" 
									data-ease="Linear.easeNone" 
									data-scalestart="110" 
									data-scaleend="100" 
									data-offsetstart="250 100" 
									class="rev-slidebg">
								
								<h1 class="tp-caption font-weight-bold text-color-light text-center"
									data-x="center"
									data-y="center" data-voffset="['10','10','10','10']"
									data-width="['770','770','770','350']"
									data-start="1000"
									data-fontsize="['45','45','45','35']"
									data-lineheight="['56','56','50','40']"
									data-transform_in="y:[100%];opacity:0;s:500;"
									data-transform_out="opacity:0;s:500;"
									style="white-space: normal;">Complete Solution For Your Education Needs</h1>

								<a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1"
									href="https://www.ut.ac.id/"
									data-x="center"
									data-y="center" data-voffset="['130','130','130','130']"
									data-start="1300"
									data-fontsize="['14','14','14','20']"
									data-paddingtop="['11','11','11','16']"
									data-paddingbottom="['11','11','11','16']"
									data-paddingleft="['32','32','32','42']"
									data-paddingright="['32','32','32','42']"
									data-transform_in="y:[100%];opacity:0;s:500;"
									data-transform_out="opacity:0;s:500;">ABOUT US</a>

							</li>
							<li data-transition="fade">
								<img src="/front/img/demos/education/slides/slide-2.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									data-kenburns="on" 
									data-duration="20000" 
									data-ease="Linear.easeNone" 
									data-scalestart="110" 
									data-scaleend="100" 
									data-offsetstart="250 100" 
									class="rev-slidebg">
								
								<h1 class="tp-caption font-weight-bold text-color-dark text-center"
									data-x="center"
									data-y="center" data-voffset="['10','10','10','10']"
									data-width="['770','770','770','350']"
									data-start="1000"
									data-fontsize="['45','45','45','35']"
									data-lineheight="['56','56','50','40']"
									data-transform_in="y:[100%];opacity:0;s:500;"
									data-transform_out="opacity:0;s:500;"
									style="white-space: normal;">Your Future Is Coming For You, Get Ready!</h1>

								<a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1"
									href="http://web-suplemen.ut.ac.id/"
									data-x="center"
									data-y="center" data-voffset="['130','130','130','130']"
									data-start="1300"
									data-fontsize="['14','14','14','20']"
									data-paddingtop="['11','11','11','16']"
									data-paddingbottom="['11','11','11','16']"
									data-paddingleft="['32','32','32','42']"
									data-paddingright="['32','32','32','42']"
									data-transform_in="y:[100%];opacity:0;s:500;"
									data-transform_out="opacity:0;s:500;">OUR COURSES</a>

							</li>
						</ul>
					</div>
				</div>
			</div>

	
@endsection