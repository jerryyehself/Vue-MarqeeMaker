<template>
	<div class="tool" v-for="tool in tools">
		{{tool.toolName}}
	</div>
</template>
<script>
    export default{
                data: function(){
                    return{
                        tools:[
                            {toolName: "修改樣式"},
                            {toolName: "自訂內容"},
                            {toolName: "打包下載"}
                        ],
                        header: "",
                        sizeButton: "◀ 變更版型",
                        size: 5
                        //[{funcName:"編輯內容",funcTemp:""}]
                    }
                }
            }
</script>