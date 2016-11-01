<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li v-for="report in reports" class="list-group-item">
                                {{ report.gut }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                reports: []
            }
        },
        mounted () {
            this.$http.get('/api/reports').then((data) => {
                console.log(data.body);
                this.reports = data.body;
            });
        }
    }
</script>
