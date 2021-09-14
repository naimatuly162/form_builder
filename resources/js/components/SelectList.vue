<template>

    <div class="list-group">
        <div v-if="inputType==='radio'" >
        <div v-for="element in radioInputs" v-model="radioInputs">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
            </label>
        </div>
    </div>

    <div v-else-if=" inputType === 'checkbox' " >
        <input type="checkbox" id="jack" value="Jack" v-model="radioInputs">
        <label for="jack">Jack</label>
        <input type="checkbox" id="john" value="John" v-model="radioInputs">
        <label for="john">John</label>
        <input type="checkbox" id="mike" value="Mike" v-model="radioInputs">
        <label for="mike">Mike</label>
        <br>
        <span>Checked names: {{ radioInputs }}</span>
    </div>

    <div v-else-if="inputType==='select'" >
        <select v-model="radioInputs">
            <option disabled value="">Please select one</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
        </select>
        <span>Selected: {{ radioInputs }}</span>
    </div>

    <div  v-else>
        <p>{{ inputType }}</p>
        <select v-model="radioInputs" :type="inputType" >
            <option disabled value="">Please select one</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
        </select>
        <span>Selected: {{ radioInputs }}</span>
    </div>
    </div>


</template>
<script>
import Input from "./InputText";
export default {
    name: 'Select',
    components: {Input},
    props: ['inputType','options', 'value','name'],

    data() {
        return {
            id: 2,
        }
    },
    methods: {},
    mounted() {
        console.log('jhjfjh')
    },
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
        },
    },

}
</script>

