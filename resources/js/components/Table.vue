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
                    <div v-for="(element,index) in list1" :key="index" class="panel panel-default">
                        <li class="list-group-item">{{ element.name }}</li>
                    </div>
                </transition-group>
            </draggable>
        </div>


        <div class="col-6 ">
            <h3>Questions Paper</h3>

            <div class="mb-5">
                <input class="form-control" v-model="formTitle" placeholder="type options">
            </div>

            <draggable
                class="dragArea list-group border p-5"
                :list="list2"
                group="people"
                @change="log"
                item-key="name"
            >

                <div class="list-group" v-for="(element,index) in list2" :key="element.index"
                     style="margin-bottom: 15px">
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between" style="margin-bottom: 15px">
                            <h5>{{ element.type }}</h5>
                            <div><span class="text-danger" aria-label="close" @click="deleteItem(index)"><i
                                class="fa fa-trash"></i></span></div>
                        </div>
                        <component :is="`${element.type}_input`" :name="element.type"
                                   :inputType="element.input_type" v-model="element.value" @abc="texting">
                        </component>
                        <div>
                            <input class="form-control"
                                   v-if="['radio', 'select','checkbox'].includes(element.input_type)" type="text"
                                   v-model="element.options" placeholder="type options">
                        </div>
                    </li>
                </div>
            </draggable>
            <div class="panel-default">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-success "
                            type="button"
                            @click="submitForm">Submit
                    </button>
                </div>
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
        Input,
        draggable,
        'text_input': Input,
        'select_input': Select,
        'textarea_input': TextArea,
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
            formTitle: ''
        };
    },
    mounted() {
        {
            axios.post('/getData')
                .then((response) => this.list1 = this.element = response.data)
                .catch((error) => this.errors = error.response.data.errors)
            console.log('mounted')
        }
        axios.post('/getInput')
            .then((response) => this.list2 = this.element = response.data
                // console.log(response);
            )
            .catch((error) => this.errors = error.response.data.errors)
    },
    methods: {
        log: function (evt) {
            window.console.log(evt);
        },

        // vClone({id, form_name}) {
        //     return {
        //         id: id,
        //        form_name: '',
        //     };
        // },

        cloneDog({id, name, type, value}) {
            let input_type = type;
            if (!['text', 'select', 'textarea'].includes(input_type)) {
                type = 'text'
                console.log(id, name, type, value)
            }
            return {
                id: id,
                title: name,
                type: type,
                value: '',
                options: '',
                input_type: input_type,
            };
        },
        texting(e) {
            console.log('gh', e)
            this.list2[0].options = e
            // axios.post('/store',this.list2)
            //     .then((response)=>  {
            //         console.log(response);
            //     })
            //     .catch((error)=> this.errors= error.response.data.errors)
        },
        submitForm() {

            //  this.$emit('input_type', this.list2)
            let formData = {'form_title': this.formTitle, 'questions': this.list2}

            axios.post('/store', formData)
                .then((response) => {
                    console.log(response);
                })
                .catch((error) => this.errors = error.response.data.errors)
        },
        deleteItem(id) {
            this.list2.splice(id, 1)
        },

    }
};
</script>
<style scoped></style>
