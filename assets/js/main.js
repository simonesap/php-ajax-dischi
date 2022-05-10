var app = new Vue(
    {
        el: '#root',

        data: {
            arrayApi: [],
            generi: [],
            genereSelezionato: '',
        },

        created() {
            axios.get('http://localhost/php-ajax-dischi/api/integers.php')
            .then((res) => {
                console.log(res);
                this.arrayApi = res.data.response;

                //bonus
                this.arrayApi.forEach((el) => {
                    if(!this.generi.includes(el.genre)) {
                        this.generi.push(el.genre)
                    }
                });
            })
        },

        methods: {
            selectGenre() {
                axios.get(`http://localhost/php-ajax-dischi/api/integers.php?genere=${genereSelezionato}`)
                .then((res) => {
                    this.arrayApi = res.genre;
                })
            }
        }

    }
)