<template>
    <div>
        <p><router-link to="/" class="btn btn-default">Back</router-link></p>

        <div class="panel panel-default">
            <div class="panel-heading">{{ document.name }}</div>
            <div class="panel-body">
                {{ document.description }}
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            let id = this.$route.params.id;
            this.documentId = id;
            axios.get('/documents/' + id)
                .then((response) => {
                    this.document = response.data;
                });
        },
        data: function () {
            return {
                documentId: null,
                document: {
                    name: '',
                    description: '',
                }
            }
        }
    }
</script>
