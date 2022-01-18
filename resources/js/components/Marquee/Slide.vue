<template>
	<div class="per-slide"
		:style="computedLeft">
		{{slideNumber}}
		<div class="slide-description">
			{{slideDescription}}
		</div>
	</div>
</template>
<script>
    export default{
		props:['slideNumber', 'slideDescription', 'defaultSlide', 'slideImage'],
		data: function(){
			return{
				slidewidth: 100 //slide寬度100%
			}
		},
		computed:{
			computedLeft: function(){
				const result = "left: " + (-this.slidewidth * (this.defaultSlide)) + "%; background-image: url(" + this.slideImage +");";
				console.log(result);
				
				return result;
				}
		}
	}
</script>