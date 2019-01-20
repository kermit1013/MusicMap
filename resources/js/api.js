import axios from 'axios'

export default {
    getPlayLists: function (params) {
    return axios.get('api/lists', {
      params: params
    })
  },
  postPlayLists: function (params) {
    return axios.post('api/lists/add',{
        name: params.name,
        url:params.url,
        user_id:params.user_id})
  },
  getNewsDetail: function (id) {
    return axios.get('api/news/' + id)
  }
}

