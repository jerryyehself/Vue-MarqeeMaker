<template>
<div class="lightbox">
	<div class="modal-mask" :style="modalStyle">
		<div class="modal-container"  @click.self="toggleModal">
			<div class="modal-body">
				{{functionList}}
			</div>
		</div>
	</div>
</div>
</template>
<script>
import ReferenceInformation from './ReferenceInformation.vue';
    export default{
                data: function(){
                    return{
                        functionList: '<reference-information></reference-information>',
						isShow: false
                    }
                },
                computed:{
					modalStyle() {
						return {
							'display': this.isShow ? '' : 'none'
						};
					}
				},
				methods:{
					toggleModal() {
						this.isShow = !this.isShow;
					}
				},
				component:{
					'reference-information': ReferenceInformation
				}
            }
</script>