
<template>
<div>
    <div class="form-outline">
        <input  v-model="text.name"  type="text" id="form1" class="form-control" placeholder="type name"/>
        <label class="form-label" for="form1">Name: {{text.name}}</label>
    </div>
        <div class="form-outline">
        <input  v-model="text.options"  type="text" id="form2" class="form-control" placeholder="select options"/>
        <label class="form-label" for="form2">Options: {{text.options}}</label>
        </div>
</div>
<!--    <div>-->
<!--    <div class="form-check">-->
<!--        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">-->
<!--        <label class="form-check-label" for="flexCheckDefault">-->
<!--            Default checkbox-->
<!--        </label>-->
<!--    </div>-->
<!--    </div>-->



</template>
<script>
export default {
    name: 'Input',

    data() {
        return {
            id         : 1,
            text : [{
                name:'',
                options:'',
            }],
        }
    },
    methods : {

    },
    computed: {

    }
}
</script>
