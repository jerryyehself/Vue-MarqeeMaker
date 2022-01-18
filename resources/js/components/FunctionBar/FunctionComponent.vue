<template>
	<div class="function-component" @click="isShow = true">
		{{functionName}}
    </div>
<div class="lightbox">
    <div class="modal-mask" :style="modalStyle">
	    <div class="modal-container"  @click.self="toggleModal">
		    <div class="modal-body">
		        <ul class="references">
                    <li v-for="referenceAttribute in listContent">
		                <a :href="referenceAttribute.referenceLink">
		                    {{referenceAttribute.referenceTitle}}
		                </a>
		            </li>
	            </ul>		
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
				functionName:"參考資料",
                listContent:[
							{referenceTitle: "https://codepen.io/frank890417/pen/bWrKOZ", referenceLink: "https://codepen.io/frank890417/pen/bWrKOZ"},
							{referenceTitle: "讓我們來快速寫個漂浮感的輪播吧\！動態網頁程式教學（直播筆記）", referenceLink: "https://creativecoding.in/2021/04/26/%E8%AE%93%E6%88%91%E5%80%91%E4%BE%86%E5%BF%AB%E9%80%9F%E5%AF%AB%E5%80%8B%E6%BC%82%E6%B5%AE%E6%84%9F%E7%9A%84%E8%BC%AA%E6%92%AD%E5%90%A7%EF%BC%81%EF%BC%88%E7%9B%B4%E6%92%AD%E7%AD%86%E8%A8%98%EF%BC%89/"},
							{referenceTitle: "Day16 Vue Component(元件) props、emit介紹", referenceLink: "https://ithelp.ithome.com.tw/articles/10223518"}
						],
                isShow: false
            }
        },
        computed: {
            modalStyle: function() {
                    return {"display": this.isShow ? '' : 'none'}
            }
        },
        methods: {
            toggleModal() {
                console.log('click')
                this.isShow = !this.isShow;
            }
        }
    }
</script>