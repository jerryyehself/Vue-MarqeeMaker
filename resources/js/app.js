require('./bootstrap');

import { createApp } from 'vue';

import ToolBar from './components/ToolBar/ToolBar.vue'

createApp({
    components:{
        'tool-block': ToolBar
    }
}).mount('.toolbar')

import SlideDirector from './components/Marquee/SlideDirector.vue'
import SlideTarnslator from './components/Marquee/SlideTarnslator.vue'
import Slide from './components/Marquee/Slide.vue'

createApp({
    data(){
        return{
            slidesInformation: [
                {slideNumber: 1, slideDescription:"蘋果", slideImage:"https://www.publicdomainpictures.net/pictures/430000/nahled/many-apples-16402560020SC.jpg"},
                {slideNumber: 2, slideDescription:"橘子", slideImage:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaRrEwQmR48MOdeuf1WV0neriY_pttDv_Ysg&usqp=CAU"},
                {slideNumber: 3, slideDescription:"香蕉", slideImage:"https://obs.line-scdn.net/0hEv9W1kukGlkELgysi55lDj54GTY3QglaYBhLRltARG4oFl4GOxxTaiV8Q2x8TF0HakBSPCkuAWh8TAlfMB1T/w644"},
                {slideNumber: 4, slideDescription:"芭樂", slideImage:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJ2Rpm5dCBoF4MSwgz7Zd6ZoQqlA-IIxKV5A&usqp=CAU"},
                {slideNumber: 5, slideDescription:"水梨", slideImage:"https://live.staticflickr.com/522/20179912288_83eaa51a94_z.jpg"}
            ],
            defaultSlide: 0, //顯示的項目編號
        }
    },
    methods:{
        updateByBack: function(nowslide){
            this.defaultSlide = nowslide; //用back重新賦值
        },
        updateByDirector: function(nowslide){
            this.defaultSlide = nowslide; //用director重新賦值
        }
    },
    components:{
        'slide-director': SlideDirector,
        'slide-translator': SlideTarnslator,
        'slide': Slide,
    }  
}).mount('.marquee')

import FunctionComponent from './components/FunctionBar/FunctionComponent.vue'
import LightBox from './components/FunctionBar/LightBox.vue'
import ReferenceInformation from './components/FunctionBar/ReferenceInformation.vue';

createApp({
    components:{
        'function-bar': FunctionComponent,
        'light-box': LightBox,
        'reference-information': ReferenceInformation
    }
}).mount('.function-bar')



