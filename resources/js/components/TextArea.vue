<template>
    <div class="form-group">
        <label for="exampleFormControlTextarea2">Small textarea</label>
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
    </div>
</template>

<script>
export default {
    name: 'TextArea',
    props: ['inputType','select_options', 'value'],

    data() {
        return {
            id         : 3,
            text : [{

            }],
        }
    },
    methods : {

    },
    mounted() {

    },
    computed: {
        radioInputs: {
            get() {
                return this.value;
            },
            set(element) {
                console.log('dhdjhd')
                this.$emit('input', element)
            }
        },
    }

}
</script>
