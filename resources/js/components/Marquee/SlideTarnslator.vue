<template>
	<div class="slide-translator" style="left: 0;" @click="slideBack(-1)">〈</div>	
	<div class="slide-translator" style="right: 0;" @click="slideBack(1)">〉</div>
</template>
<script>
    export default{
        props:[
			'slidesInformation',
			'defaultSlide'
		],
		emits:[
			"updateByBack"
		],
		methods:{
			slideBack: function(counter){
				const slidelen = this.slidesInformation.length;
				const nowslide = (this.defaultSlide + counter + slidelen) % slidelen;
				this.$emit('updateByBack', nowslide);
			}
		}
	}
</script>