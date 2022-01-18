<template>
<div 
    v-if="accessbility === 0" 
    @click="expendTrigger">
	
    <ul 
        class="references"
        v-if="avaliableOrNot === 1">
							
        <li v-for="referenceattribute in listcontent">
			<a :href="referenceattribute.referencelink">
				{{referenceattribute.referencetitle}}
			</a>
		</li>
	</ul>				
</div>
</template>
<script>
    export default{
                data: function(){
                    return{
                        listContent:[
							{referencetitle: "https://codepen.io/frank890417/pen/bWrKOZ", referencelink: "https://codepen.io/frank890417/pen/bWrKOZ"},
							{referencetitle: "讓我們來快速寫個漂浮感的輪播吧\！動態網頁程式教學（直播筆記）", referencelink: "https://creativecoding.in/2021/04/26/%E8%AE%93%E6%88%91%E5%80%91%E4%BE%86%E5%BF%AB%E9%80%9F%E5%AF%AB%E5%80%8B%E6%BC%82%E6%B5%AE%E6%84%9F%E7%9A%84%E8%BC%AA%E6%92%AD%E5%90%A7%EF%BC%81%EF%BC%88%E7%9B%B4%E6%92%AD%E7%AD%86%E8%A8%98%EF%BC%89/"},
							{referencetitle: "Day16 Vue Component(元件) props、emit介紹", referencelink: "https://ithelp.ithome.com.tw/articles/10223518"}
						],
						accessbility: 1
                    }
                },
                computed:{
					expendTrigger: function(){
						this.accessbility = 1;
					},
					blockTrigger: function(){
						this.accessbility = 0;
					}
                },
				methods:{
					showReferenceInformation: function(){
						
					}
				}
            }
</script>