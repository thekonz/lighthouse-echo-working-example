# Working example for lighthouse echo subscriptions

Client implementation is using @thekonz/apollo-lighthouse-subscription-link

Run `make` to start the server and go to http://localhost.

This demo has two subscriptions (`userUpdated` and `userDeleted`), the component `resources/js/components/SubscribeUser.vue` subscribes to both and logs events.
