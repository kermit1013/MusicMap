<template>

    <form style="margin: 15px" class="needs-validation" novalidate>

            <div class="mb-3">
                <label for="name">Song Name</label>
                <input type="text" class="form-control" id="name" placeholder=""  v-model="name">
            </div>



        <div class="mb-3">
            <label for="url">URL <span class="text-muted"></span></label>
            <input type="text" class="form-control" id="url" placeholder="youtube site"  v-model="url">
        </div>


        <div class="mb-3">
            <label for="user_id">User <span class="text-muted"></span></label>
            <input type="text" class="form-control" id="user_id" placeholder="youtube site"  v-model="user_id">
        </div>

        <div class="row">
            <div class="col-md-5 mb-3">
                <label for="playlist">Which PlayList</label>
                <select class="custom-select d-block w-100" id="playlist"  v-model="playlist" >
                    <option value="">Choose...</option>
                    <option>#1</option>
                    <option>#2</option>
                    <option>#3</option>
                </select>

            </div>
        </div>




        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" @click="postPlayLists({name,url,user_id})">Continue to Add</button>
    </form>

   <!-- <div class="panel panel-default">
        <div class="card-header">新闻</div>
        <ul class="list-group">
            <li class="list-group-item"
                v-for="row in lists">
                <router-link :to="{path:'/detail/' + row.id}">
                    <span class="badge badge-success" v-if="row.is_recommend">推荐</span>
                    {{ row.title }}
                </router-link>
                <span class="pull-right">{{ row.created }}</span>
            </li>
        </ul>
    </div>-->
</template>
<script>
import { mapActions } from 'vuex';
export default({
    data() {
        return {
            name: '',
            url: '',
            playlist: '',
            user_id:''
        }
    },

    methods: {
        ...mapActions([
            'postPlayLists'
        ])
    },

});
</script>
