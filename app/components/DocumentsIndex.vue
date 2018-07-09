<template>
    <div>
        <p><router-link :to="{name: 'createDocument'}" class="btn btn-success">Add Document</router-link></p>
        
        <div class="panel panel-default" v-for="document, index in documents">
            <div class="panel-heading">
                <div class="pull-right">
                    <router-link :to="{name: 'editDocument', params: {id: document.id}}" class="btn btn-xs btn-primary">
                        <span class="glyphicon glyphicon-pencil"></span> Edit
                    </router-link>
                    <a href="#"
                       class="btn btn-xs btn-danger"
                       v-on:click="deleteEntry(document.id, index)">
                        <span class="glyphicon glyphicon-remove"></span> Delete
                    </a>
                </div>
                <router-link :to="{name: 'viewDocument', params: {id: document.id}}">
                    {{ document.name }}
                </router-link>
            </div>
            <div class="panel-body">
                {{ document.description }}
            </div>
        </div>

    </div>
</template>
 
<script>
    export default {
        data: function () {
            return {
                documents: []
            }
        },
        mounted() {
            axios.get('/documents')
                .then((response) => {
                    this.documents = response.data;
                });
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Are you sure?")) {
                    axios.delete('/documents/' + id)
                        .then((response) => {
                            this.documents.splice(index, 1);
                        });
                }
            }
        }
    }
</script>
