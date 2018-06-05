<template>
    <div>
        <section>
            <table class="table-striped">
                <thead>
                    <tr>
                        <th>nr.</th>
                        <th>data utworzenia</th>
                        <th>tytuł</th>
                        <th>skrót</th>
                        <th>akcja</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: [],
                post: {
                    id: '',
                    title: '',
                    text: '',
                    slug: '',
                },
                post_id: '',
                edit: false,
            }
        },

        created() {
            this.fetchPosts();
        },

        methods: {
            fetchPosts() {
                // fetch('api/posts') 
                //     .then(res => res.json())
                //     .then(res => {
                //         console.log(res.data);
                //     })
                // axios.get('/api/posts').then((response) => {
                    // this.time = response.data;
                //     console.log(response.data);
                // });
                $.ajax({
                    type: 'GET',
                    url: "api/posts",
                    success: function (data) {
                        console.log(data);
                    },
                    error: function (data) {
                        alert("error");
                        // console.log(data);
                    }
                });
            }
        }
    }
</script>
