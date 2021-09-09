
<template>

<!--    <div class="form-outline">-->
<!--        <input type="text" id="form1" class="form-control" placeholder="type text"/>-->
<!--        <label class="form-label" for="form1">Text Area</label>-->
<!--    </div>-->
<!--    <div>-->
<!--    <div class="form-check">-->
<!--        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">-->
<!--        <label class="form-check-label" for="flexCheckDefault">-->
<!--            Default checkbox-->
<!--        </label>-->
<!--    </div>-->
<!--    </div>-->

    <div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
           1
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
        <label class="form-check-label" for="flexRadioDefault2">
          2
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
        <label class="form-check-label" for="flexRadioDefault3">
          3
        </label>
    </div>
    </div>

</template>
<script>
export default {
    name: 'Input',

    data() {
        return {
            id         : 1,
            text : [{

            }],
        }
    },
    methods : {

    },
    computed: {

    }
}
</script>
