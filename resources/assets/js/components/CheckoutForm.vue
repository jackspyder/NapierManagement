<template>
    <form action="/purchases" method="POST" id="checkout-form">
        <!--<input type="hidden" name="_token" v-model="forge" :value="forge">-->
        <input type="hidden" name="stripeToken" v-model="stripeToken">
        <input type="hidden" name="stripeEmail" v-model="stripeEmail">
        <!--<input type="hidden" name="product_id" v-model="product_id">-->
        <input type="hidden" name="user_id" v-model="user_id">
        <input type="hidden" name="lesson_id" v-model="lesson_id">
        <button type="submit" class="btn btn-success" @click.prevent="pay">Pay Now with Stripe!</button>

    </form>
</template>

<script>
    export default {
        props: ['user', 'lesson'],


        data() {
            return {
                stripeEmail: '',
                stripeToken: '',
//                product_id: '',
                lesson_id: '',
                user_id: '',
//                forge: '{{ csrf_field() }}'
            };
        },
        created() {
            this.stripe = StripeCheckout.configure({
                key: nmt.stripeKey,
                image: "https://stripe.com/img/documentation/checkout/marketplace.png",
                locale: "auto",
                token: (token) => {

                    this.stripeToken = token.id;
                    this.stripeEmail = token.email;
//                    this.product_id = this.lesson.subject.id;
                    this.user_id = this.user.id;
                    this.lesson_id = this.lesson.id;

                    //document.querySelector('#checkout-form').submit();
                    axios.post('/purchases', this.$data).then(function (response) {
                        window.location = response.data.redirect;
                    });
                }
            });
        },

        methods: {
            pay() {

                let item = this.lesson.subject;
                this.stripe.open({
                    name: 'Napier Management Training',
                    description: item.title,
                    zipCode: true,
                    currency: 'gbp',
                    amount: item.price,
                });
            },
        }
    }
</script>
