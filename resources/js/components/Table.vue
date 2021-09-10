<template>
    <div class="row">
        <div class="col-6">
            <h3>Question Tools</h3>

            <draggable
                class="dragArea list-group"
                :list="list1"
                :group="{ name: 'people', pull: 'clone', put: false }"
                @change="log"
                :clone="cloneDog"
                item-key="name"
            >
<!--                <transition-group>
                    <div>
                        <ul class="list-group" v-for="element in list1" :key="element.id">
                            <li class="list-group-item">{{ element.name }}</li>
                        </ul>
                    </div>
                </transition-group>-->

                <transition-group>
                    <div v-for="(element,index) in list1" :key="index" >
                        <li class="list-group-item">{{element.name}}</li>
                    </div>
                </transition-group>
            </draggable>
        </div>
        <div class="col-6 ">
            <h3>Draggable 2</h3>
            <draggable
                class="dragArea list-group border p-5"
                :list="list2"
                group="people"
                @change="log"
                item-key="name"
            >
                <div class="list-group" v-for="element in list2" :key="element.id">
                    {{ element.type }}
                    <component :is="`${element.type}_input`"
                               :inputType="element.type" v-model="list2">
                    </component>
                </div>
            </draggable>

            <div class="col-md-6 text-end">
                <button class="btn btn-success " :class="list2.length === 0 ? 'disabled' : ''" type="button" @click="submitForm" >Submit </button>
            </div>
        </div>

    </div>
</template>
<script>
import draggable from "vuedraggable";
import Input from './InputText'
import Select from './SelectList'
import TextArea from './TextArea'

export default {
    name: "clone",
    display: "Clone",
    order: 2,
    components: {
        draggable,
        'text_input':Input,
        'select_input':Select,
        'text_area_input':TextArea,
    },
    data() {
        return {
            list1: [
                // {name: "textInput", id: 1},
                // {name: "textarea", id: 2},
                // {name: "select", id: 3},
            ],
            list2: [
                // { name: "Juan", id: 5 },
                // { name: "Edgard", id: 6 },
                // { name: "Johnson", id: 7 }
            ],
        };
    },
    mounted() {
        {
            axios.post('/getData')
                .then((response) => this.list1 = this.element = response.data)
                .catch((error) => this.errors = error.response.data.errors)
            console.log('mounted')
        }
        {
            axios.post('/store',{
                type: '',
                title: '',
                options:'',
            })
                .then((response)=>this.list2 = this.element =response.data)
                .catch((error)=> this.errors = error.response.data.errors)
        }
    },
    methods: {
        log: function (evt) {
            window.console.log(evt);
        },
        cloneDog({id, name,type}) {
            let input_type = type;
            if (!['text', 'select', 'text_area'].includes(input_type)) {
                type = 'text'
                console.log(id, name,type)
            }
            return {
                id: id,
                title: name,
                type: type,
                value: 'value',
                input_type: 'input_type',
                input_value: '',
            };
        },
        submitForm(){

        },
    }
};
</script>
<style scoped></style>
