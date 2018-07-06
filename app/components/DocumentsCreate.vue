<template>
    <div>
        <p><router-link to="/" class="btn btn-default">Back</router-link></p>

        <div class="panel panel-default">
            <div class="panel-heading">Add Document</div>
            <div class="panel-body">
                <form v-on:submit.prevent="submitForm()">
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input type="text" v-model="document.name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea v-model="document.description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                document: {
                    name: '',
                    description: ''
                }
            }
        },
        methods: {
            submitForm() {
                axios.post('/documents', this.document)
                    .then((response) => {
                        this.$router.push({name: 'index'});
                    });
            }
        }
    }
</script>
