import api from '../api';
export default{
    state: {
        playlists: [], // 推荐
        lists: [],  // 列表
        detail: {}  // 详情
    },
    mutations: {
        // 注意，这里可以设置 state 属性，但是不能异步调用，异步操作写到 actions 中
        GET_PLAYLISTS (state, lists) {
            state.playlists = lists;
        },
        ADD_PLAYLISTS(state, lists) {
            state.lists = lists;
        },
        SETDETAIL(state, detail) {
            state.detail = detail;
        }
    },
    actions: {
        getNewsDetail({commit}, id) {
            // 获取详情，并调用 mutations 设置 detail
            api.getNewsDetail(id).then(function(res) {
                commit('SETDETAIL', res.data);
                document.body.scrollTop = 0;
            });
        },
        getPlayLists({commit}) {
            api.getPlayLists().then(function(res) {
                commit('GET_PLAYLISTS', res.data);
            });
        },

        postPlayLists({commit},name,url,user_id) {
            api.postPlayLists(name,url,user_id).then(function(res) {
                commit('ADD_PLAYLISTS', res.data);
            });
        }
    }
}
