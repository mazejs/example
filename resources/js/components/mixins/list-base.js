
export default {
    data() {
        return {
            meta: {
                total: 0,
                per_page: 10,
                current_page: 1,
                last_page: 1,
                from: 1,
                to: 1
            },
            meta_keys: ['total', 'per_page', 'current_page', 'last_page', 'from', 'to'],
            actions: [
                {name: 'viewing', label: 'View'}
            ]
        }
    },

    methods: {
        queryString(page) {
            let query = {
                params: {
                    page: page,
                    per_page: this.per_page,
                    order: this.order ? this.setOrder() : null
                }
            };

            if (this.search.value)
                query.params[this.search.type] = this.search.value;

            return query;
        },

        paginate(page) {
            this.fetchData(page);
        },

        perPage(value) {
            this.per_page = value;
            this.fetchData();
        },

        ordering(order) {
            this.order = order;
            this.fetchData();
        },

        setOrder() {
            if (this.order.column.includes('.'))
                return `${this.order.column}:${this.order.sort}`;

            return `${this.order.column}.${this.order.sort}`;
        },

        filter(data) {
            this.search = data;
            this.fetchData();
        },

        viewing(data) {
            window.location.href = data.links.me;
        }
    }
}
