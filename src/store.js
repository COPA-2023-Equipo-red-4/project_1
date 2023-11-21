import { createStore } from 'vuex';

export default createStore({
    state: {
        user: null,
    },
    mutations: {
        setUser(state, user) {
            state.user = user;
        },
    },
    actions: {

    },
    getters: {
        isAuthenticated: (state) => {
            return state.user !== null;
        },
    },
});