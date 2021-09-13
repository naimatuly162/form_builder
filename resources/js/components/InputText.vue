<template>
    <div>
        <div class="form-outline">
            <input v-model="radioInputs" type="text" id="form1" class="form-control" placeholder="type name"/>
            <label class="form-label" for="form1"></label>
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
    props: ['inputType', 'select_options', 'value', 'name'],

    data() {
        return {
            id: 1,

        }
    },
    mounted() {
        console.log('lfkjlfjj')
    },
    methods: {},
    computed:
        {
            radioInputs: {
                get() {
                    return this.options;
                },
                set(element) {
                    console.log('dhdjhd')
                    this.$emit('input', element)
                }
            }
        },
}
</script>
