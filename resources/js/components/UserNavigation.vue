<template>
<div>
    <v-navigation-drawer app v-model="drawer">
        <template v-slot:prepend>
        <v-list-item two-line>
        <v-list-item-avatar>
        <img src="https://randomuser.me/api/portraits/women/81.jpg">
        </v-list-item-avatar>

        <v-list-item-content>
        <v-list-item-title>{{navUser.username}}</v-list-item-title>
        <v-list-item-subtitle>{{roleName}}</v-list-item-subtitle>
        </v-list-item-content>
        </v-list-item>
        </template>

        <v-divider></v-divider>

        <v-list>
            <v-list-item
                v-for="item in items"
                :key="item.title"
                link
            >
                <v-list-item-icon>
                    <v-icon size="15">{{ item.icon }}</v-icon>
                </v-list-item-icon>

                <v-list-item-content>
                    <v-list-item-title @click="handleLogout()">{{ item.title }}</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </v-list>

        <template v-slot:append>
            <div class="pa-2">
                <v-btn block @click.stop="drawer = !drawer">
                    Close
                </v-btn>
            </div>
        </template>
    </v-navigation-drawer>
    <v-app-bar
        app
        color="blue darken-3"
        dark
    >
        <v-app-bar-nav-icon class="d.none .d-sm-flex" @click.stop="drawer = !drawer">
            <i class="fas fa-bars"/>
        </v-app-bar-nav-icon>
        <v-toolbar-title>Logo</v-toolbar-title>
    </v-app-bar>
</div>
</template>

<script>
export default {
    props:{
        navUser: {
            type: Object,
            default: () => ({}),
        }
    },
    computed: {
        roleName() {
            if(this.navUser.role_id) {
                switch(this.navUser.role_id) {
                    case 1:
                        return 'Administrator'
                        break;
                    case 2:
                        return 'User'
                        break;
                    case 3:
                        return 'Observer'
                        break;
                }
            }
        }
    },
    data: () => ({
        drawer: true,
        group: null,
        items: [
            { title: 'Dashboard', icon: 'fa-home' },
            { title: 'Logout', icon: 'fa-sign-out-alt' },
        ],
    }),
    methods: {
    handleLogout() {
        axios
        .post("logout", {})
        .then((response) => {
            window.location.reload();
        })
        .catch((error) => {
            console.log(error.response.data);
        });
    },
    },
};
</script>