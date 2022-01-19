@extends('model.model')
@section('content')
<div class="toolbar">
    <div class="title">幻燈片產生器</div>
    <tool-block></tool-block>
</div>

<div class="content">
    <div class="marquee">
        <div class="slide" >
			<div class="director">
                <slide-director 
                    v-for="(index, slideInformation) in slidesInformation" 
                    :slides-information="slidesInformation"
                    :default-slide="defaultSlide"
                    :id="slideInformation" 
                    :style="slideInformation === this.defaultSlide ? 'opacity: 1': ''"
                    @update-by-director="updateByDirector">
                </slide-director>
            </div>
            <slide 
                v-for="slideInformation in slidesInformation"
                :slide-number="slideInformation.slideNumber"
                :slide-description="slideInformation.slideDescription"
                :default-slide="defaultSlide"
                :slide-image="slideInformation.slideImage">
            </slide>
            <slide-translator
                :slides-information="slidesInformation"
                :default-slide="defaultSlide"
                @update-by-back="updateByBack">
            </slide-translator>
        </div>
    </div>
</div>
<div class="function-bar">
    
</div>
@endsection



