<template>
    <div class="panel panel-default">

        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Playlist #1
                        </button>
                        <router-link :to="{path:'/list'}"> <button type="button" class="btn btn-outline-info float-right">Add</button></router-link>

                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <ul class="list-group">
                        <li class="list-group-item"
                            v-for="row in playlists">
                            <router-link :to="{path:'/detail/' + row.id}">
                                {{ row.name }}
                            </router-link>
                            <span class="pull-right">{{ row.created }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Playlist #2
                        </button>
                        <router-link :to="{path:'/list'}"> <button type="button" class="btn btn-outline-info float-right"> Add</button></router-link>

                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <ul class="list-group">
                        <li class="list-group-item"
                            v-for="row in playlists">
                            <router-link :to="{path:'/detail/' + row.id}">
                                {{ row.name }}
                            </router-link>
                            <span class="pull-right">{{ row.created }}</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Playlist #3
                        </button>
                        <router-link :to="{path:'/list'}"> <button type="button" class="btn btn-outline-info float-right"> Add</button></router-link>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <ul class="list-group">
                        <li class="list-group-item"
                            v-for="row in playlists">
                            <router-link :to="{path:'/detail/' + row.id}">
                                {{ row.name }}
                            </router-link>
                            <span class="pull-right">{{ row.created }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
import { mapState, mapActions } from 'vuex';
export default({
    // 映射 vuex 上面的属性
    computed: mapState({
        playlists: state => state.news.playlists
    }),
    created() {
        // 获取推荐列表
        this.getPlayLists();
    },
    methods: {
        // 映射 vuex 对象上的方法
        ...mapActions([
            'getPlayLists'
        ])
    }
});
</script>
