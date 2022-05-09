var app = new Vue(
    {
        el: '#root',

        data: {
            arrayApi: [],
        },

        created() {
            axios.get('http://localhost/php-ajax-dischi/api/integers.php')
            .then((res) => {
                console.log(res);
                this.arrayApi = res.data.response;
            })
        }

    }
)