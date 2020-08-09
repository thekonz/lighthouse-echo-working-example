<template>
    <div>
        Events:
        <div v-for="(event, index) in events" :key="index">{{ event }}</div>
    </div>
</template>
<script>
import ApolloClient from "apollo-client";
import {ApolloLink} from "apollo-link";
import gql from "graphql-tag";
import Echo from "laravel-echo";
import {HttpLink} from "apollo-link-http"
import {InMemoryCache} from "apollo-cache-inmemory"
import {createLighthouseSubscriptionLink} from "@thekonz/apollo-lighthouse-subscription-link";
import SocketIoClient from "socket.io-client";

const echoClient = new Echo({
    client: SocketIoClient,
    broadcaster: "socket.io",
    host: "localhost:6001",
});
window.echo = echoClient

const httpLink = new HttpLink({
    uri: "http://localhost/graphql"
});

const client = new ApolloClient({
    link: ApolloLink.from([
        createLighthouseSubscriptionLink(echoClient),
        httpLink,
    ]),
    cache: new InMemoryCache(),
});


export default {
    data: () => ({
        events: []
    }),
    mounted() {
        client
            .subscribe({
                query: gql`
                    subscription update {
                        userCreated {
                            id
                            name
                            email
                        }
                    }
                `,
            })
            .subscribe(({ data }) => {
                this.events.push({ event: "userCreated", data })
            });


        client
            .subscribe({
                query: gql`
                    subscription delete {
                        userDeleted {
                            id
                            name
                            email
                        }
                    }
                `,
            })
            .subscribe(({ data }) => {
                this.events.push({ event: "userDeleted", data })
            });
    }
}
</script>
