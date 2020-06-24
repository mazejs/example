import listBase from '../mixins/list-base';

const template = `
    <datagrid
        :columns='columns'
        :entries='users'
        :controls='true'
        :meta='meta'
        :order='order'
        :search="search"
        :actions='actions'
        @paginate='paginate'
        @per-page='perPage'
        @order-by='ordering'
        @searching="filter"
        @viewing='viewing'
    ></datagrid>
`;

export default {
    mixins: [listBase],

    template,

    data() {
        return {
            users: [],
            columns: [
                {name: 'name', label: 'Name', sortable: true},
                {name: 'email', label: 'Email', sortable: true},
                {name: 'updated_at', label: 'Update at', format: 'datetime'},
            ],
            order: {
                column: 'name',
                sort: 'asc'
            },
            search: {
                value: '',
                type: 'name',
                types: [
                    {name: 'name', label: 'Name'},
                    {name: 'email', label: 'Email address'}
                ]
            }
        }
    },

    created() {
        this.fetchData();
    },

    methods: {
        fetchData(page = 1) {
            axios.get('/users', this.queryString(page))
                .then(response => {
                    this.users = response.data.data;
                    this.meta = response.data;
                })
                .catch(error => console.log(error));
        }
    }
}
