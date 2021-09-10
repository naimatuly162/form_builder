<template>

    <div v-if="inputType==='radio'">
        <div class="form-check" v-for="element in radioInputs" v-model="radioInputs">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
            </label>
        </div>
        <span>Checked names: {{ radioInputs }}</span>
    </div>

    <div v-else-if=" inputType === 'check' ">
        <input type="checkbox" id="jack" value="Jack" v-model="radioInputs">
        <label for="jack">Jack</label>
        <input type="checkbox" id="john" value="John" v-model="radioInputs">
        <label for="john">John</label>
        <input type="checkbox" id="mike" value="Mike" v-model="radioInputs">
        <label for="mike">Mike</label>
        <br>
        <span>Checked names: {{ radioInputs }}</span>
    </div>

    <div v-else-if="inputType==='select'">
        <select v-model="radioInputs">
            <option disabled value="">Please select one</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
        </select>
        <span>Selected: {{ radioInputs }}</span>
    </div>

    <div v-else>
        <p>{{ inputType }}</p>
        <select v-model="radioInputs" :type="inputType" class="form-control">
            <option disabled value="">Please select one</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
        </select>
        <span>Selected: {{ radioInputs }}</span>
    </div>

</template>
<script>
export default {
    name: 'Select',
    props: ['inputType'],

    data() {
        return {
            id: 2,
            radioInputs: [],
        }
    },
    methods: {},
    mounted() {
        console.log('jhjfjh', this.inputType)
    },
    computed: {},

}
</script>

