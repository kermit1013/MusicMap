import axios from 'axios'

export default {
    getPlayLists: function (params) {
    return axios.get('api/lists', {
      params: params
    })
  },
  postPlayLists: function (params) {
    return axios.post('api/list/add', {
      params: params
    })
  },
  getNewsDetail: function (id) {
    return axios.get('api/news/' + id)
  }
}

