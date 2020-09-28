<template>
    <v-app>
        <v-app-bar
            app
            color="blue darken-3"
            dark
        >
            <v-toolbar-title>Document Tracking System</v-toolbar-title>
        </v-app-bar>

        <v-navigation-drawer v-model="drawer" absolute temporary>
            <v-list nav dense>
                <v-list-item-group
                    v-model="group"
                    active-class="deep-purple--text text--accent-4"
                >
                    <v-list-item>
                        <v-list-item-icon>
                            <v-icon>mdi-home</v-icon>
                        </v-list-item-icon>
                        <v-list-item-title>Home</v-list-item-title>
                    </v-list-item>

                    <v-list-item>
                        <v-list-item-icon>
                            <v-icon>mdi-account</v-icon>
                        </v-list-item-icon>
                        <v-list-item-title>Account</v-list-item-title>
                    </v-list-item>
                </v-list-item-group>
            </v-list>
        </v-navigation-drawer>

        <v-main class="mt-5">
            <v-layout align-center justify-center flat>
                <v-flex xs12 sm10 md4>
                    <v-row align="center" justify="center" class="mb-5">
                        <v-img
                            src="/images/provincial_logo.png"
                            lazy-src="/images/provincial_logo.png"
                            max-width="300"
                            max-height="350"
                        >
                            <template v-slot:placeholder>
                                <v-row
                                    class="fill-height ma-0"
                                    align="center"
                                    justify="center"
                                >
                                    <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                                </v-row>
                            </template>
                        </v-img>
                    </v-row>
                    <v-card>
                        <v-toolbar color="blue darken-3" dark flat>
                            <v-toolbar-title>Login</v-toolbar-title>
                        </v-toolbar>
                        <v-card-text>
                        <v-alert
                            dense
                            outlined
                            dismissible
                            v-if="submitStatus === 'ERROR'"
                            type="error"
                        >
                            Login Failed. Incorrect username or password
                        </v-alert>
                        <v-form>
                            <v-text-field
                                prepend-icon="fas fa-user-circle"
                                name="username"
                                v-model="username"
                                label="Username"
                                id="username"
                                type="text"
                                required
                            ></v-text-field>
                            <v-text-field
                                prepend-icon="fas fa-key"
                                name="password"
                                v-model="password"
                                label="Password"
                                id="password"
                                type="password"
                                required
                            ></v-text-field>
                        </v-form>
                        </v-card-text>
                        <v-card-actions >
                        <v-spacer></v-spacer>
                        <v-btn dark color="blue darken-3" @click="handleLoginForm()">Login</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-main>


</v-app>
</template>

<script>
export default {
  data: () => ({
    drawer: false,
    group: null,
    username: '',
    password: '',
    submitStatus: null
  }),
  methods: {
        handleLoginForm() {
            axios.post('login', {
                username: this.username,
                password: this.password,
            })
            .then(response => {
                window.location.reload()
            })
            .catch(error => {
                console.log(error.response.data);
            });
        }
    },
};
</script>