<template>
	<span class="now-slide" @click="slidedirector(e)">
		—
	</span>
</template>
<script>
    export default{
        props:['slidesInformation','defaultSlide'],
		emits:['updateByDirector'],
        methods:{
			slidedirector: function(e){
				const directorid = Number(event.target.id);
				this.$emit('updateByDirector', directorid)
			}
		}
	}
</script>